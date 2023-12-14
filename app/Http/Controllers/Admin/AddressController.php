<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Admin;
use App\Models\Country;
use App\Models\User;
use App\Repositories\Interfaces\AddressRepositoryInterface;

class AddressController extends Controller
{
    private $addressRepository;

    public function __construct(AddressRepositoryInterface $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.address.index', [
            'addresses' => $this->addressRepository->allAddress(),
            'admins'    => Admin::get(['id', 'name']),
            'users'     => User::get(['id', 'name']),
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
    public function store(AddressRequest $request)
    {
        $data = [
            'country_id'   => $request->country_id,
            'state_id'     => $request->state_id,
            'city_id'      => $request->city_id,
            'admin_id'     => $request->admin_id,
            'user_id'      => $request->user_id,
            'user_type'    => $request->user_type,
            'address_type' => $request->address_type,
            'address'      => $request->address,
            'postal_code'  => $request->postal_code,
            'phone'        => $request->phone,
        ];
        $this->addressRepository->storeAddress($data);

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
    public function update(AddressRequest $request, $id)
    {
        $data = [
            'country_id'   => $request->country_id,
            'state_id'     => $request->state_id,
            'city_id'      => $request->city_id,
            'admin_id'     => $request->admin_id,
            'user_id'      => $request->user_id,
            'user_type'    => $request->user_type,
            'address_type' => $request->address_type,
            'address'      => $request->address,
            'postal_code'  => $request->postal_code,
            'phone'        => $request->phone,
        ];

        $this->addressRepository->updateAddress($data, $id);

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
        $this->addressRepository->destroyAddress($id);
    }
}
