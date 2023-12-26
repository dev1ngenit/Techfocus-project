<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Site;
use App\Models\Admin\Company;
use App\Http\Requests\SeoRequest;
use App\Http\Requests\SiteRequest;
use App\Http\Requests\SmtpRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Repositories\Interfaces\SeoRepositoryInterface;
use App\Repositories\Interfaces\SmtpRepositoryInterface;

class WebSettingController extends Controller
{
    private $seoRepository;
    private $smtpRepository;

    public function __construct(SeoRepositoryInterface $seoRepository, SmtpRepositoryInterface $smtpRepository)
    {
        $this->seoRepository  = $seoRepository;
        $this->smtpRepository = $smtpRepository;
    }

    public function index()
    {
        return view('admin.pages.webSetting.index', [
            'seo'       => $this->seoRepository->getFirstSeo(),
            'smtp'      => $this->smtpRepository->getFirstSmtp(),
            'companies' => Company::get(['id', 'name']),
            'site'      => Site::first(),
        ]);
    }

    function seo(SeoRequest $request)
    {
        $dataToUpdateOrCreate = [
            'page_name'                => $request->page_name,
            'page_link'                => $request->page_link,
            'meta_title'               => $request->meta_title,
            'meta_description'         => $request->meta_description,
            'meta_keywords'            => json_encode($request->meta_keywords),
            'google_analytics_code'    => $request->google_analytics_code,
            'google_verification_code' => $request->google_verification_code,
            'google_adsense_code'      => $request->google_adsense_code,
        ];

        $seo = $this->seoRepository->updateOrCreateSeo($dataToUpdateOrCreate);

        $toastMessage = $seo->wasRecentlyCreated ? 'Data has been created successfully!' : 'Data has been updated successfully!';
        return redirect()->back()->with('success', $toastMessage);
    }

    function smtp(SmtpRequest $request)
    {
        $dataToUpdateOrCreate = [
            'host'         => $request->host,
            'port'         => $request->port,
            'encryption'   => $request->encryption,
            'username'     => $request->username,
            'password'     => $request->password,
            'from_address' => $request->from_address,
            'from_name'    => $request->from_name,
            'sender_email' => $request->sender_email,
            'sender_name'  => $request->sender_name,
            'status'       => $request->status,
        ];

        $smtp = $this->smtpRepository->updateOrCreateSmtp($dataToUpdateOrCreate);

        $toastMessage = $smtp->wasRecentlyCreated ? 'Data has been created successfully!' : 'Data has been updated successfully!';
        // toastr()->success($toastMessage);
        return redirect()->back();
    }

    function site(SiteRequest $request)
    {
        $webSetting                = Site::firstOrNew([]);

        $siteIconMainFile          = $request->file('site_icon');
        // dd($siteIconMainFile);
        $systemLogoWhiteMainFile   = $request->file('system_logo_white');
        $systemLogoBlackMainFile   = $request->file('system_logo_black');

        $siteIconUploadPath        = storage_path('app/public/webSetting/siteIcon/');
        $systemLogoWhiteUploadPath = storage_path('app/public/webSetting/systemLogoWhite/');
        $systemLogoBlackUploadPath = storage_path('app/public/webSetting/systemLogoBlack/');

        if ($request->hasFile('site_icon')) {
            if (!empty($webSetting->site_icon)) {
                $filePaths = [
                    storage_path("app/public/webSetting/siteIcon/" . $webSetting->site_icon),
                ];

                foreach ($filePaths as $filePath) {
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            }
            $globalFunSiteIcon  = customUpload($siteIconMainFile, $siteIconUploadPath);
        } else {
            $globalFunSiteIcon = ['status' => 0];
        }

        if ($request->hasFile('system_logo_white')) {
            if (!empty($webSetting->system_logo_white)) {
                $filePaths = [
                    storage_path("app/public/webSetting/systemLogoWhite/" . $webSetting->system_logo_white),
                ];

                foreach ($filePaths as $filePath) {
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            }
            $globalFunSystemLogoWhite  = customUpload($systemLogoWhiteMainFile, $systemLogoWhiteUploadPath);
        } else {
            $globalFunSystemLogoWhite = ['status' => 0];
        }

        if ($request->hasFile('system_logo_black')) {
            if (!empty($webSetting->system_logo_black)) {
                $filePaths = [
                    storage_path("app/public/webSetting/systemLogoBlack/" . $webSetting->system_logo_black),
                ];

                foreach ($filePaths as $filePath) {
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            }
            $globalFunSystemLogoBlack  = customUpload($systemLogoBlackMainFile, $systemLogoBlackUploadPath);
        } else {
            $globalFunSystemLogoBlack = ['status' => 0];
        }



        $site = Site::updateOrCreate([], [
            'country_id'                 => $request->country_id,
            'company_id'                 => $request->company_id,
            'system_name'                => $request->system_name,
            'frontend_website_name'      => $request->frontend_website_name,
            'site_motto'                 => $request->site_motto,
            'site_icon'                  => $globalFunSiteIcon['status'] == 1 ? $globalFunSiteIcon['file_name'] : $webSetting->site_icon,
            'system_logo_white'          => $globalFunSystemLogoWhite['status'] == 1 ? $globalFunSystemLogoWhite['file_name'] : $webSetting->system_logo_white,
            'system_logo_black'          => $globalFunSystemLogoBlack['status'] == 1 ? $globalFunSystemLogoBlack['file_name'] : $webSetting->system_logo_black,
            'system_timezone'            => $request->system_timezone,
            'base_color'                 => $request->base_color,
            'base_hover_color'           => $request->base_hover_color,
            'secondary_base_color'       => $request->secondary_base_color,
            'secondary_base_hover_color' => $request->secondary_base_hover_color,
            'phone_one'                  => $request->phone_one,
            'phone_two'                  => $request->phone_two,
            'whatsapp_number'            => $request->whatsapp_number,
            'default_language'           => $request->default_language,
            'contact_email'              => $request->contact_email,
            'support_email'              => $request->support_email,
            'info_email'                 => $request->info_email,
            'sales_email'                => $request->sales_email,
            'facebook_url'               => $request->facebook_url,
            'twitter_url'                => $request->twitter_url,
            'instagram_url'              => $request->instagram_url,
            'linkedin_url'               => $request->linkedin_url,
            'youtube_url'                => $request->youtube_url,
            'github_url'                 => $request->github_url,
            'portfolio_url'              => $request->portfolio_url,
            'fiver_url'                  => $request->fiver_url,
            'upwork_url'                 => $request->upwork_url,
            'service_days'               => $request->service_days,
            'service_time'               => $request->service_time,
        ]);

        $toastMessage = $site->wasRecentlyCreated ? 'Data has been created successfully!' : 'Data has been updated successfully!';
        return redirect()->back()->with('success', $toastMessage);
    }
}
