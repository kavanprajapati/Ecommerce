<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function edit(Setting $setting)
    {
        return view('admin.settings.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $validated = $request->validate([
            'site_name' => 'required',
            'site_email' => 'required|email',
        ]);

        dd($request->input());
    }
}
