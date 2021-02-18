<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Galeri extends Model
{
    public function allData()
    {
        return DB::table('galeri')->get();
    }
    public function detailData($id)
    {
        return DB::table('galeri')->where('id', $id)->first();
    }
    public function tambahData($data)
    {
        DB::table('galeri')->insert($data);
    }
    public function editData($id ,$data)
    {
        DB::table('galeri')->where('id' , $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('galeri')->where('id' , $id)->delete();
    }
}