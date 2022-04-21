<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use Exception;
use Validator;
use Storage;
use Auth;
use Str;

class TournamentController extends Controller
{
    public function index()
    {
        try {
            $data = Tournament::with('penyelenggara')->orderBy('tgl_valid', 'desc')->paginate(9);

            return view('tournament.index', compact(['data']));
        } catch (Exception $e) {
            dd($e->getMessage());
            return view('error');
        }
    }

    public function detail($slug)
    {
        try {
            $data = Tournament::with('penyelenggara')->where('slug', $slug)->first();

            return view('tournament.detail', compact(['data']));
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function add()
    {
        try {
            $date = date("Y-m-d");

            return view('tournament.add', compact(['date']));
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required|unique:tournament,nama',
                'lokasi' => 'required',
                'biaya_pendaftaran' => 'required|numeric',
                'jumlah_slot' => 'required|numeric',
                'tgl_valid' => 'required',
                'tgl_tournament' => 'required',
                'deskripsi' => 'required',
                'thumbnail' => 'required',
                'file_poster' => 'required',
            ]);

            if($validator->fails()) {
                return back()->withErrors($validator->errors());
            }

            $pathThumbnail = "images/tournament/thumbnail/";
            $pathFile = "images/tournament/file/";
            $thumbnail = uploads($request->thumbnail, $pathThumbnail);
            $file = uploads($request->file_poster, $pathFile);

            $input = [
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'lokasi' => $request->lokasi,
                'jumlah_slot' => $request->jumlah_slot,
                'sisa_slot' => $request->jumlah_slot,
                'biaya_pendaftaran' => $request->biaya_pendaftaran,
                'tgl_valid' => $request->tgl_valid,
                'tgl_tournament' => $request->tgl_tournament,
                'deskripsi' => $request->deskripsi,
                'thumbnail' => $thumbnail,
                'file' => $file,
                'id_penyelenggara' => Auth::user()->id_user
            ];

            Tournament::create($input);

            return back()->with('success', 'Tournament berhasil diposting !');
        } catch (Exception $e) {
            dd($e->getMessage());
            return view('error');
        }
    }

    public function edit($slug)
    {
        try {
            $data = Tournament::with('penyelenggara')->where('slug', $slug)->first();

            return view('tournament.edit', compact(['data']));
        } catch (Exception $e) {
            return view('error');
        }
    }

    public function update(Request $request, $slug)
    {
        try {
            $update = $request->except(['thumbnail', 'file_poster', '_token', '_method']);

            if($request->thumbnail) {
                $data = Tournament::select('thumbnail')->where('slug', $slug)->first();
                $pathThumbnail = "images/tournament/thumbnail/";

                if (Storage::disk('public')->exists($pathThumbnail.$data->thumbnail)) {
                    Storage::disk('public')->delete($pathThumbnail.$data->thumbnail);
                }

                $thumbnail = uploads($request->thumbnail, $pathThumbnail);
                $update['thumbnail'] = $thumbnail;
            }

            if($request->file_poster) {
                $data = Tournament::select('file')->where('slug', $slug)->first();
                $pathFile = "images/tournament/file/";

                if (Storage::disk('public')->exists($pathFile.$data->file)) {
                    Storage::disk('public')->delete($pathFile.$data->file);
                }

                $file = uploads($request->file_poster, $pathFile);
                $update['file'] = $file;
            }

            Tournament::where('slug', $slug)->update($update);

            return redirect('/tournament')->with('success', 'Tournament berhasil diperbarui !');
        } catch (Exception $e) {
            dd($e->getMessage());
            return view('error');
        }
    }

    public function delete($id)
    {
        try {
            $data = Tournament::find($id);
            $pathThumbnail = "images/tournament/thumbnail/";
            $pathFile = "images/tournament/file/";

            if(Storage::disk('public')->exists($pathThumbnail.$data->thumbnail)) {
                Storage::disk('public')->delete($pathThumbnail.$data->thumbnail);
            }

            if(Storage::disk('public')->exists($pathFile.$data->file)) {
                Storage::disk('public')->delete($pathFile.$data->file);
            }

            Tournament::destroy($id);

            return redirect('/tournament')->with('success', 'Tournament berhasil dihapus.');
        } catch (Exception $e) {
            return view('error');
        }
    }
}
