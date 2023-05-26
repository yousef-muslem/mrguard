<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.setting');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed'
        ], [
            'old_password.required' => 'كلمة المرور القديمة مطلوبة.',
            'new_password.required' => 'كلمة المرور الجديدة مطلوبة',
            'new_password.min' => ' يجب أن تحوي كلمة المرور الجديدة على 6 أحرف على الأقل',
            'new_password.confirmed' => 'كلمة المرور الجديدة غير مطابقة'
        ]);

        $admin = Auth::user();

        if (Hash::check($request->old_password, $admin->password)) {
            $admin->password = Hash::make($request->new_password);
            $admin->save();
        } else
            return redirect()->route('dashboard.setting.index')->with('error', 'كلمة المرور القديمة خاطئة!');

        return redirect()->route('dashboard.setting.index')->with('success', 'تم تغيير كلمة المرور بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
