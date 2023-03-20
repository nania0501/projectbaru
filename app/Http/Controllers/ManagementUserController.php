<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ManagementUserController extends Controller
{
    public function index(){
        return "Halo ini adalah method index, dalam controller ManagementUser.";
    }
    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menapilkan form untuk menambah data user ";
    }
    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk mencuptakan data user yang baru";
    }
    public function show($id)
    {
        return "method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan data user dengan id=" . $id;
    }
    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }
    public function destory($id)
    {
        return "Method ini nantinya akan digunakan untuk menghapus data user dengan id=" . $id;
    }

}

