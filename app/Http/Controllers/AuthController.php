<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // Mengembalikan view untuk halaman register
    }

    public function processRegister(Request $request)
    {
        // Validasi data form
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            // Tambahkan validasi untuk isian lainnya jika diperlukan
        ]);

        // Redirect ke halaman welcome dengan membawa data nama depan dan nama belakang
        return redirect()->route('welcome')->with($data);
    }

    public function welcome(Request $request)
    {
        // Mengambil data nama depan dan nama belakang dari session
        $first_name = session('first_name');
        $last_name = session('last_name');

        return view('welcome', compact('first_name', 'last_name'));
    }
}

