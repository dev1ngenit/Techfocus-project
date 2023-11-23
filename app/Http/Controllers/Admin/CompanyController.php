<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CompanyRequest;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyController extends Controller
{
    private $companyRepository;

    public function __construct(CompanyRepositoryInterface $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.company.index', [
            'companies' =>  $this->companyRepository->allCompany(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $logoFile = $request->file('logo');
        $filePath = storage_path('app/public/');
        if (!empty($logoFile)) {
            $globalFunLogo = customUpload($logoFile, $filePath,   44, 44);
        } else {
            $globalFunLogo = ['status' => 0];
        }

        $data = [
            'headquarter_country_id' => $request->headquarter_country_id,
            'name'                   => $request->name,
            'industry'               => json_encode($request->industry),
            'country'                => json_encode($request->country),
            'location'               => json_encode($request->location),
            'phone'                  => $request->phone,
            'email'                  => $request->email,
            'website_url'            => $request->website_url,
            'logo'                   => $globalFunLogo['status'] == 1 ? $globalFunLogo['file_name'] : null,
            'postal_code'            => $request->postal_code,
            'contact_name'           => $request->contact_name,
            'contact_email'          => $request->contact_email,
            'contact_phone'          => $request->contact_phone,
            'headquarter'            => $request->headquarter,
            'founder'                => $request->founder,
            'year_founded'           => $request->year_founded,
            'ceo'                    => $request->ceo,
            'mission'                => $request->mission,
            'vision'                 => $request->vision,
            'history'                => $request->history,
            'about'                  => $request->about,
        ];
        $this->companyRepository->storeCompany($data);

        // toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Data has been saved successfully!')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.company.edit', [
            'company' =>  $this->companyRepository->findCompany($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        $company =  $this->companyRepository->findCompany($id);

        $logoFile = $request->file('logo');
        $filePath = storage_path('app/public/');

        if (!empty($logoFile)) {
            $globalFunLogo = customUpload($logoFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$company->logo}"),
                storage_path("app/public/requestImg/{$company->logo}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunLogo = ['status' => 0];
        }

        $data = [
            'headquarter_country_id' => $request->headquarter_country_id,
            'name'                   => $request->name,
            'slug'                   => Str::slug($request->name),
            'industry'               => json_encode($request->industry),
            'country'                => json_encode($request->country),
            'location'               => json_encode($request->location),
            'phone'                  => $request->phone,
            'email'                  => $request->email,
            'website_url'            => $request->website_url,
            'logo'                   => $globalFunLogo['status'] == 1 ? $globalFunLogo['file_name'] : $company->logo,
            'postal_code'            => $request->postal_code,
            'contact_name'           => $request->contact_name,
            'contact_email'          => $request->contact_email,
            'contact_phone'          => $request->contact_phone,
            'headquarter'            => $request->headquarter,
            'founder'                => $request->founder,
            'year_founded'           => $request->year_founded,
            'ceo'                    => $request->ceo,
            'mission'                => $request->mission,
            'vision'                 => $request->vision,
            'history'                => $request->history,
            'about'                  => $request->about,
        ];

        $this->companyRepository->updateCompany($data, $id);

        toastr()->success('Data has been updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company =  $this->companyRepository->findCompany($id);

        $paths = [
            storage_path('app/public/') . $company->logo,
            storage_path('app/public/requestImg/') . $company->logo,
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $this->companyRepository->destroyCompany($id);
    }
}
