<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->Galeri = new Galeri();
    }

    public function index()
    {
        $data = [
            'galeri' => $this->Galeri->allData(),
        ];
        return view('galeri.index', $data);
    }
    public function add()
    {
        return view('galeri.create');
    }

    public function insert()
    {
        Request()->validate(
            [
                'judul' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'required|mimes:jpg,jpeg,bmp,png',
                'status' => 'required',
                'created_by' => 'required',
                'updated_by' => 'required',
            ],
            [
                'judul.required' => 'Judul Wajib diisi',
                'deskripsi.required' => 'Deskripsi Wajib diisi',
                'gambar.required' => 'Gambar Wajib diisi',
                'gambar.mimes' => 'ekstensi hanya boleh JPG,PNG.JPEG,BMP',
                'status.required' => 'Status Wajib diisi',
                'created_by.required' => 'Created Wajib diisi',
                'updated_by.required' => 'Updated Wajib diisi',
            ]
        );
        $file = Request()->gambar;
        $filename = Request()->judul . '.' . $file->extension();
        $file->move(public_path('img'), $filename);

        $data = [
            'judul' => Request()->judul,
            'deskripsi' => Request()->deskripsi,
            'gambar' => $filename,
            'status' => Request()->status,
            'created_by' => Request()->created_by,
            'updated_by' => Request()->updated_by
        ];
        $this->Galeri->tambahData($data);
        return redirect()->route('galeri');
    }
    public function edit($id)
    {
        if (!$this->Galeri->detailData($id)) {
            abort(404);
        }
        $data = [
            'galeri' => $this->Galeri->detailData($id),
        ];
        return view('galeri.edit', $data);
    }

    public function update($id)
    {
        Request()->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'mimes:jpg,jpeg,bmp,png',
            'status' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',

        ], [
            'judul.required' => 'wajib di isi',
            'deskripsi.required' => 'wajib di isi',
            'gambar.mimes' => 'ekstensi harus jpg,jpeg,bmp,png',
            'status.required' => 'wajib di isi',
            'crated_by.required' => 'wajib di isi',
            'updated_by.required' => 'wajib di isi',

        ]);
        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->gambar <> "") {
            //jika ingin ganti foto
            //upload gambar/foto
            $file = Request()->gambar;
            $fileName = Request()->judul . '.' . $file->extension();
            $file->move(public_path('img'), $fileName);

            $data = [
                'judul' => Request()->judul,
                'deskripsi' => Request()->deskripsi,
                'gambar' => $fileName,
                'status' => Request()->status,
                'created_by' => Request()->created_by,
                'updated_by' => Request()->updated_by,

            ];

            $this->Galeri->editData($id, $data);
        } else {
            //jika tidak ingin ganti foto
            $data = [
                'judul' => Request()->judul,
                'deskripsi' => Request()->deskripsi,
                'status' => Request()->status,
                'created_by' => Request()->created_by,
                'updated_by' => Request()->updated_by,
            ];
            $this->Galeri->editData($id, $data);
        }
        return redirect()->route('galeri');
    }

    public function delete($id)
    {
        $galeri =  $this->Galeri->detailData($id);
        if ($galeri->gambar <> "") {
            unlink(public_path('img') .'/'. $galeri->gambar);
        }

        $this->Galeri->deleteData($id);
        return redirect()->route('galeri');
    }
}
