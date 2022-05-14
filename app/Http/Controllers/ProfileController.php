<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Exception;
use Storage;
use Auth;

class ProfileController extends Controller
{
    //
    public function show()
    {
        try {
            $id_user = Auth::user()->id_user;
            $user = User::find($id_user);

            return view('profile.show', compact('user'));
        } catch (Exception $e) {
            return view('error-500');
        }
    }

    public function updateGeneral(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'email' => 'required',
                'no_hp' => 'required|numeric',
                'alamat' => 'required',
                'role' => 'nullable'
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator);
            }

            $user = User::find(Auth::user()->id_user);
            $user->update($request->all());

            return back()->with('success', 'Profile berhasil diperbarui');
        } catch (Exception $e) {
            dd($e->getMessage());
            // return view('error-500');
        }
    }

    public function updateFoto(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'foto' => 'required|max:2048',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator);
            }

            $path = "images/profile/";
            $user = User::find(Auth::user()->id_user);

            if (Storage::disk('public')->exists($path.$user->foto)) {
                Storage::disk('public')->delete($path.$user->foto);
            }
            
            $nameFile = uploads($request->foto, $path);
            $user->update([
                'foto' => $nameFile
            ]);

            return back()->with('success', 'Foto Profile berhasil diperbarui');
        } catch (Exception $e) {
            dd($e->getMessage());
            // return view('error-500');
        }
    }

    public function updatePassword(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'old_password' => 'required',
                'password' => 'required|confirmed',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator);
            }

            $user = User::find(Auth::user()->id_user);

            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
                
                return back()->with('success', 'Password berhasil diperbarui');
            }

            return back()->with('error', 'Password lama tidak sesuai');
        } catch (Exception $e) {
            dd($e->getMessage());
            // return view('error-500');
        }
    }

}
