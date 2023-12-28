<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\CurrencyRequest;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.currency.index', [
            'currencys' => Currency::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CurrencyRequest $request)
    {
        Currency::create([
            'country_id'              => $request->country_id,
            'system_default_currency' => $request->system_default_currency ?? false,
            'name'                    => $request->name,
            'currency'                => $request->currency,
            'code'                    => $request->code,
            'symbol'                  => $request->symbol,
            'thousand_separator'      => $request->thousand_separator,
            'decimal_separator'       => $request->decimal_separator,
            'no_of_decimals'          => $request->no_of_decimals,
            'exchange_rate'           => $request->exchange_rate,
        ]);

        return redirect()->back()->with('success', 'Data has been saved successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CurrencyRequest $request, $id)
    {
        $currency = Currency::find($id);

        $currency->update([
            'country_id'              => $request->country_id,
            'system_default_currency' => $request->system_default_currency ?? false,
            'name'                    => $request->name,
            'currency'                => $request->currency,
            'code'                    => $request->code,
            'symbol'                  => $request->symbol,
            'thousand_separator'      => $request->thousand_separator,
            'decimal_separator'       => $request->decimal_separator,
            'no_of_decimals'          => $request->no_of_decimals,
            'exchange_rate'           => $request->exchange_rate,
        ]);

        return redirect()->back()->with('success', 'Data has been saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Currency::find($id)->delete();
    }
}
