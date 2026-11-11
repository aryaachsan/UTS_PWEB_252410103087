<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // Menampilkan halaman Login
    public function login()
    {
        return view('login');
    }

    // Memproses username dari form Login
    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50'
        ]);

        $username = $request->username;

        return redirect()->route('dashboard', [
            'username' => $username
        ]);
    }

    // Menampilkan Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        return view('dashboard', compact('username'));
    }

    // Menampilkan data inventaris
    public function pengelolaan()
    {
        $barang = [
            [
                'nama' => 'Laptop ASUS',
                'kategori' => 'Elektronik',
                'kondisi' => 'Baik'
            ],
            [
                'nama' => 'Kamera Canon',
                'kategori' => 'Multimedia',
                'kondisi' => 'Baik'
            ],
            [
                'nama' => 'Proyektor Epson',
                'kategori' => 'Elektronik',
                'kondisi' => 'Dipinjam'
            ],
            [
                'nama' => 'Speaker JBL',
                'kategori' => 'Audio',
                'kondisi' => 'Baik'
            ],
            [
                'nama' => 'Tripod',
                'kategori' => 'Perlengkapan',
                'kondisi' => 'Rusak'
            ]
        ];

        return view('pengelolaan', compact('barang'));
    }

    // Menampilkan Profile
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        return view('profile', compact('username'));
    }
}
