<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use Exception;
use Validator;
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

    public function detail()
    {
        return view('tournament.detail');
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
                'file' => 'required',
            ]);

            if($validator->fails()) {
                return back()->withErrors($validator->errors());
            }

            $pathThumbnail = "images/tournament/thumbnail/";
            $pathFile = "images/tournament/file/";
            $thumbnail = uploads($request->thumbnail, $pathThumbnail);
            $file = uploads($request->file, $pathFile);


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
                'file' => $thumbnail,
                'id_penyelenggara' => Auth::user()->id_user
            ];

            Tournament::create($input);

            return back()->with('success', 'Tournament berhasil diposting !');
        } catch (Exception $e) {
            dd($e->getMessage());
            return view('error');
        }
    }
}
