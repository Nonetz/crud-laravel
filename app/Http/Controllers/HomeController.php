<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/pegawai'); // Mengarahkan ke halaman /pegawai setelah login
    }

    /**
     * Handle logout process.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Memanggil fungsi logout dari Auth
        $request->session()->invalidate(); // Menghapus sesi yang ada
        $request->session()->regenerateToken(); // Menghasilkan token sesi baru

        return redirect('/'); // Mengarahkan kembali ke halaman utama
    }
}
