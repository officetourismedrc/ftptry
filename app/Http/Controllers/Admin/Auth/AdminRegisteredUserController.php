<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\Auser;
use Illuminate\Http\Request;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class AdminRegisteredUserController extends Controller
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
        return view('Admin.Auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Auser::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $auser = Auser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($auser));

        Auth::login($auser);

        //return redirect(route('admin.dashboard'));

        return redirect(RouteServiceProvider::ADMIN_HOME);

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
    public function destroy(Auser $auser)
    {
        //
    }
}
