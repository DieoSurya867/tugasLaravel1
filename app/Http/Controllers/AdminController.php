<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::select('select * from admins');
        // $data2 = Admin::select('admins.id', 'admins.project', 'admins.client', 'admins.status', 'sekolahs.namaSekolah')->join('sekolahs', 'admins.sekolah_id', '=', 'sekolah_id')->get();
        // $data3 = Admin::all();
        $data2 = Admin::all();

        // dd($data2);
        // dd('$data3');
        return view('pages.tables', compact('data2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data2 = Sekolah::all();
        return view("pages.admin.tambah", compact('data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // DB::insert('insert into admins (project, client, status, sekolah_id) values (?,?,?,?)', [$request->project, $request->client, $request->status, $request->sekolah_id]);

        $validator = $request->validate([
            'project' => 'required|string',
            'client' => 'required|string',
            'status' => 'required|string',
            'sekolah_id' => 'required'
        ]);
        Admin::create($validator);

        return redirect('tables')->with('success', 'Data Berhasil Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data2 = Admin::findOrFail($id);
        $sekolah = Sekolah::all();
        return view("pages.admin.edit", [
            'data2' => $data2,
            'sekolah' => $sekolah
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data2 = $request->all();
        $item = Admin::findOrFail($id);

        $validator = $request->validate([
            'project' => 'required|string',
            'client' => 'required|string',
            'status' => 'required|string',
            'sekolah_id' => 'required'
        ]);

        $item->update($validator);
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data2 = Admin::findOrFail($id);
        $data2->delete();

        return redirect('tables')->with('success', 'Data Berhasil Terhapus');
    }
}
