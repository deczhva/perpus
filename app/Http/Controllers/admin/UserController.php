<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Role;
use App\Models\User;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexAnggota()
    {
        $anggota = User::where('role', 'user')->get();
        $count = count($anggota);
        $code = 'AA00' . $count +1;
        
        return view('admin.anggota.index', compact('anggota', 'code'));
    }
}
