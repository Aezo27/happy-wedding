<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wish;
use App\Models\Data;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function happy()
  {
    $pesans = Wish::all();
    $pesans2 = Wish::orderBy('nama')->get();
    $pesans3 = Wish::orderBy('created_at', 'desc')->get();
    return view('happy', compact("pesans", "pesans2", "pesans3"));
  }

  public function happyAdd(Request $req)
  {
    DB::beginTransaction();
    try {
      $add = new Wish();
      $add->nama = $req->nama;
      $add->pesan = $req->pesan;
      $add->status = $req->opsi;
      $add->save();

      DB::commit();
      return [
        'notif'     => 'Pesan berhasil disimpan',
        'alert'     => 'success'
      ];
    } catch (\Exception $e) {
      DB::rollback();
      return $e;
      return [
        'notif'     => 'Pesan gagal disimpan',
        'alert'     => 'error'
      ];
    };
  }

  public function happyGenerate()
  {
    $datas = Data::all();
    return view('happy_generate', compact("datas"));
  }
}
