<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * 顯示
     */
    public function edit() 
    {
        $user = Auth::user();
        
        return view('profile', compact('user'));
    }

    /**
     * update
     */
    public function update(Request $reqest) 
    {
        $user = Auth::user();
        
        $user->update([
            'name' => $reqest->name
        ]);

        UserProfile::updateOrCreate([
            'user_id' => $user->id
        ], [
            'gender' => $reqest->gender,
            'birthday' => $reqest->birthday,
            'address' => $reqest->address,
        ]);

        session()->flash('status', '更新成功。');
        return redirect()->route('home');
    }

}
