<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function edit(Setting $setting)
    {
        $setting = Setting::find(1);
        return view('admin.settings.index',compact('setting'));
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

        $setting = Setting::find(1);
        $setting->site_name = $request->input('site_name');
        $setting->site_email = $request->input('site_email');
        $setting->save();

        if (!empty($setting->id)) {
            return redirect()->back()->with('success', 'Settings saved successfully!');
        } else {
            return redirect()->back()->with('error', 'Oops.. Some error occured while saving!');
        }
    }
}
