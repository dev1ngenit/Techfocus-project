<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FaqRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\FaqRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\DynamicCategoryRepositoryInterface;

class FaqController extends Controller
{
    private $faqRepository;
    private $companyRepository;
    private $dynamicCategoryRepository;

    public function __construct(FaqRepositoryInterface $faqRepository, CompanyRepositoryInterface $companyRepository, DynamicCategoryRepositoryInterface $dynamicCategoryRepository)
    {
        $this->faqRepository             = $faqRepository;
        $this->companyRepository         = $companyRepository;
        $this->dynamicCategoryRepository = $dynamicCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.faq.index', [
            'faqs'              => $this->faqRepository->allFaq(),
            'companies'         => $this->companyRepository->allCompany(),
            'dynamicCategories' => $this->dynamicCategoryRepository->allDynamicCategory(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        $data = [
            'country_id'          => $request->country_id,
            'company_id'          => $request->company_id,
            'dynamic_category_id' => $request->dynamic_category_id,
            'question'            => $request->question,
            'answer'              => $request->answer,
            'order'               => $request->order,
            'is_published'        => $request->is_published,
        ];
        $this->faqRepository->storeFaq($data);

        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, $id)
    {
        $data = [
            'country_id'          => $request->country_id,
            'company_id'          => $request->company_id,
            'dynamic_category_id' => $request->dynamic_category_id,
            'question'            => $request->question,
            'answer'              => $request->answer,
            'order'               => $request->order,
            'is_published'        => $request->is_published,
        ];

        $this->faqRepository->updateFaq($data, $id);

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
        $this->faqRepository->destroyFaq($id);
    }
}
