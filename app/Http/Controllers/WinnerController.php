<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemenang;
use Validator;
use Exception;
use Storage;
use Auth;
use Str;

class WinnerController extends Controller
{
    public function index()
    {
        try {
            $data = Pemenang::with('pembuat')->orderBy('created_at', 'desc')->paginate(6);
            $new = Pemenang::orderBy('created_at', 'desc')->limit(4)->get();
    
            return view('winner.index', compact(['data', 'new']));
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function detail($slug)
    {
        try {
            $data = Pemenang::with('pembuat')->where('slug', $slug)->first();
            $new = Pemenang::orderBy('created_at', 'desc')->limit(4)->get();

            return view('winner.detail', compact(['data', 'new']));
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function add()
    {
        $date = date("Y-m-d");

        return view('winner.add', compact(['date']));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'judul' => 'required|unique:pemenang,judul',
                'konten' => 'required',
                'thumbnail' => 'required',
            ]);

            if($validator->fails()) {
                return back()->withErrors($validator->errors());
            }

            $path = "images/pemenang/thumbnail/";
            $thumbnail = uploads($request->thumbnail, $path);

            $input = [
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'isi' => $request->konten,
                'thumbnail' => $thumbnail,
                'id_user' => Auth::user()->id_user
            ];

            Pemenang::create($input);

            return back()->with('success', 'Info Pemenang berhasil ditambahkan !');
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function edit($slug)
    {
        try {
            $data = Pemenang::with('pembuat')->where('slug', $slug)->first();

            return view('winner.edit', compact(['data']));
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function update(Request $request, $slug)
    {
        try {
            $update = $request->except(['thumbnail', 'konten', '_token', '_method']);
            $update['id_admin'] = Auth::user()->id_user;

            if($request->konten) {
                $update['isi'] = $request->konten;
            }

            if($request->thumbnail) {
                $data = Pemenang::select('thumbnail')->where('slug', $slug)->first();
                $path = "images/pemenang/thumbnail/";

                if (Storage::disk('public')->exists($path.$data->thumbnail)) {
                    Storage::disk('public')->delete($path.$data->thumbnail);
                }

                $thumbnail = uploads($request->thumbnail, $path);
                $update['thumbnail'] = $thumbnail;
            }

            Pemenang::where('slug', $slug)->update($update);

            return redirect('/pemenang')->with('success', 'Info Pemenang berhasil diperbarui !');
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function delete($id)
    {
        try {
            $data = Pemenang::find($id);
            $path = "images/pemenang/thumbnail/";

            if (Storage::disk('public')->exists($path.$data->thumbnail)) {
                Storage::disk('public')->delete($path.$data->thumbnail);
            }

            Pemenang::destroy($id);

            return redirect('/pemenang')->with('success', 'Info Pemenang berhasil dihapus.');
        } catch (Exception $e) {
            return view('error');
        }
    }
}
