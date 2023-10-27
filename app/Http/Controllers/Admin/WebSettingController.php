<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SeoRequest;
use App\Http\Requests\SmtpRequest;
use App\Http\Controllers\Controller;
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
        toastr()->success($toastMessage);
        return redirect()->back();
    }

    function smtp(SmtpRequest $request)
    {
        $dataToUpdateOrCreate = [
            'driver'       => $request->driver,
            'host'         => $request->host,
            'port'         => $request->port,
            'username'     => $request->username,
            'password'     => $request->password,
            'encryption'   => $request->encryption,
            'from_address' => $request->from_address,
            'from_name'    => $request->from_name,
            'status'       => $request->status,
        ];

        $smtp = $this->smtpRepository->updateOrCreateSmtp($dataToUpdateOrCreate);

        $toastMessage = $smtp->wasRecentlyCreated ? 'Data has been created successfully!' : 'Data has been updated successfully!';
        toastr()->success($toastMessage);
        return redirect()->back();
    }
}
