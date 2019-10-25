<?php

namespace App\Http\Controllers;

use App\Models\TblDevice;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'device_code' => 'required|min:3',
            'device_sn' => 'required|min:3',
            ]);

        $device = TblDevice::create([
            'device_code' => $request->device_code,
            'device_sn' => $request->device_sn,
            'delete_flg' => false,
        ]);

        session()->flash('success', '注册成功');
        return redirect()->route('signup', [$device]);
    }
}
