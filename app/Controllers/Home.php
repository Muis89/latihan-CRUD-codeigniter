<?php

namespace App\Controllers;
use App\Models\KategoriModel;
class Home extends BaseController
{
  protected $model;
  public function __construct() 
  {
    $this->model = new KategoriModel();
  }
  public function index(): string
  {
    return view('pages/home');
  }

  public function kategori()
  {
    $data = [
      'tbl_kategori' => $this->model->tblKategori()->getResult()
    ];
    return view('pages/kategori', $data);
  }

  public function barang()
  {
    return view('pages/barang');
  }

  public function blog()
  {
    return view('pages/blog');
  }

  public function pemasok()
  {
    return view('pages/pemasok');
  }
}
