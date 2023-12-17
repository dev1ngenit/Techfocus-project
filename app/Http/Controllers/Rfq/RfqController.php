<?php

namespace App\Http\Controllers\Rfq;

use App\Models\Rfq\Rfq;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\RfqRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class RfqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.rfq.index', [
            'rfqs' => Rfq::get(),
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
    public function store(RfqRequest $request)
    {
        $mainFile = $request->file('image');

        $filePath_image = storage_path('app/public/rfq/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath_image);
        } else {
            $globalFunImage = ['status' => 0];
        }

        Rfq::create([
            'rfq_code'        => $request->rfq_code,
            'sales_man_id_L1' => $request->sales_man_id_L1,
            'sales_man_id_T1' => $request->sales_man_id_T1,
            'sales_man_id_T2' => $request->sales_man_id_T2,
            'client_id'       => $request->client_id,
            'client_type'     => $request->client_type,
            'name'            => $request->name,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'company_name'    => $request->company_name,
            'designation'     => $request->designation,
            'address'         => $request->address,
            'create_date'     => $request->create_date,
            'close_date'      => $request->close_date,
            'sale_date'       => $request->sale_date,
            'pq_code'         => $request->pq_code,
            'pqr_code_one'    => $request->pqr_code_one,
            'pqr_code_two'    => $request->pqr_code_two,
            'qty'             => $request->qty,
            'image'           => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'message'         => $request->message,
            'rfq_type'        => $request->rfq_type,
            'call'            => $request->call,
            'regular'         => $request->regular,
            'special'         => $request->special,
            'tax_status'      => $request->tax_status,
            'deal_type'       => $request->deal_type,
            'status'          => $request->status,
            'tax'             => $request->tax,
            'vat'             => $request->vat,
            'total_price'     => $request->total_price,
            'quoted_price'    => $request->quoted_price,
            'price_text'      => $request->price_text,
            'rfq_department'  => $request->rfq_department,
        ]);
        return redirect()->back()->with('success', 'Data has been saved successfully!');
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
    public function update(RfqRequest $request, $id)
    {
        $rfq = Rfq::find($id);

        $mainFile = $request->file('image');
        $filePath_image = storage_path('app/public/rfq/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath_image);
            $paths = [
                storage_path("app/public/rfq/{$rfq->image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $rfq->update([
            'rfq_code'        => $request->rfq_code,
            'sales_man_id_L1' => $request->sales_man_id_L1,
            'sales_man_id_T1' => $request->sales_man_id_T1,
            'sales_man_id_T2' => $request->sales_man_id_T2,
            'client_id'       => $request->client_id,
            'client_type'     => $request->client_type,
            'name'            => $request->name,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'company_name'    => $request->company_name,
            'designation'     => $request->designation,
            'address'         => $request->address,
            'create_date'     => $request->create_date,
            'close_date'      => $request->close_date,
            'sale_date'       => $request->sale_date,
            'pq_code'         => $request->pq_code,
            'pqr_code_one'    => $request->pqr_code_one,
            'pqr_code_two'    => $request->pqr_code_two,
            'qty'             => $request->qty,
            'image'        => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : $rfq->image,
            'message'         => $request->message,
            'rfq_type'        => $request->rfq_type,
            'call'            => $request->call,
            'regular'         => $request->regular,
            'special'         => $request->special,
            'tax_status'      => $request->tax_status,
            'deal_type'       => $request->deal_type,
            'status'          => $request->status,
            'tax'             => $request->tax,
            'vat'             => $request->vat,
            'total_price'     => $request->total_price,
            'quoted_price'    => $request->quoted_price,
            'price_text'      => $request->price_text,
            'rfq_department'  => $request->rfq_department,

        ]);
        return redirect()->route('admin.rfq.index')->with('success', 'Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rfq = Rfq::find($id);

        $paths = [
            storage_path("app/public/rfq/{$rfq->image}"),
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $rfq->delete();
    }
}
