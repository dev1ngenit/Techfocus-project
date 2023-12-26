<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Admin\DynamicCss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DynamicCssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['css'] = DynamicCss::firstOrFail();
        return view('admin.pages.dynamicCss.index', $data);
    }


    public function update(Request $request, $id)
    {
        $css = DynamicCss::findOrFail($id);
        $css->update([
            'primary_color'             => $request->primary_color,
            'secondary_color'           => $request->secondary_color,
            'secondary_bg_color'        => $request->secondary_bg_color,
            'secondary_deep_color'      => $request->secondary_deep_color,
            'btn_color'                 => $request->btn_color,
            'main_bg_color'             => $request->main_bg_color,
            'paragraph_color'           => $request->paragraph_color,
            'secondary_paragraph_color' => $request->secondary_paragraph_color,
            'heading_color'             => $request->heading_color,
            'white'                     => $request->white,
            'black'                     => $request->black,
            'secoandaryborder_color'    => $request->secoandaryborder_color,
            'border_color'              => $request->border_color,
            'divider_color'             => $request->divider_color,
            'toggle_color'              => $request->toggle_color,
            'text_color'                => $request->text_color,
            'para_color'                => $request->para_color,
            'custom_shadow'             => $request->custom_shadow,
            'primary_font'              => $request->primary_font,
            'number_font'               => $request->number_font,
            'section_title_font_size'   => $request->section_title_font_size,
            'header_font_size'          => $request->header_font_size,
            'content_title_font_size'   => $request->content_title_font_size,
            'paragraph_font_size'       => $request->paragraph_font_size,
            'badge_font_size'           => $request->badge_font_size,
            'primary_font_url'          => $request->primary_font_url,
            'number_font_url'           => $request->number_font_url,
        ]);
        Session::flash('success', 'Website CSS Successfully Updated');
        return redirect()->back();
    }
}
