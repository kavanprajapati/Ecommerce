<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_DATA')) {
            return redirect()->route('dashboard');
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $adminData = Admin::where(['email' => $request->email])->first();

        if (isset($adminData)) {
            if ($adminData->email == $request->email && Hash::check($request->password, $adminData->password)) {
                $request->session()->put('ADMIN_DATA', ["id" => $adminData->id, "name" => $adminData->name, "email" => $adminData->email]);
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->withErrors(["topError" => "Sorry! Your credentials are not valid!"]);
            }
        } else {
            return redirect()->back()->withErrors(["topError" => "Sorry! Email doesn't exist in the system!"]);
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
