<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\Auser;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Auth\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminAuthSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("Admin.Auth.login");
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(AdminLoginRequest $request): RedirectResponse
    {
        //
        $request->adminAuthenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }

    /**
     * Display the specified resource.
     */
    public function show(Auser $auser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auser $auser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auser $auser)
    {
        //
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
