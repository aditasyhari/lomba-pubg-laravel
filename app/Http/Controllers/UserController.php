<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Exception;
use Storage;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        try {
            return view('user.index');
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function list(Request $request)
    {
        try {
            if($request->ajax()) {
                $data = User::orderBy('role', 'asc')->get();

                return DataTables::of($data)
                        ->addIndexColumn()
                        ->make(true);
            }
        } catch (Exception $e) {
            return response()->json([
                'data' => 'error'
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $data = User::findOrFail($id);

            return view('user.detail', compact(['data']));
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function delete($id)
    {
        try {
            $data = User::find($id);
            $path = "images/profile/";

            if (Storage::disk('public')->exists($path.$data->thumbnail)) {
                Storage::disk('public')->delete($path.$data->thumbnail);
            }

            User::destroy($id);

            return response()->json('success', 200);
        } catch (Exception $e) {
            return view('error');
        }
    }
}