<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pemberitahuan;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

    public function index()
    {
        $pemberitahuan = Pemberitahuan::where('status', 'aktif')->get();
        return view('admin.dashboard', compact('pemberitahuan'));
    }

}
