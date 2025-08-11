<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    // Show all menus
    public function index()
    {
        $menu = DB::table('users')->get();
        return view('menu.index', compact('menu'));
    }

    // Show create form
    public function create()
    {
        return view('menu.create');
    }

    // Store menu
    public function store(Request $request)
    {
        $user = Auth::user();
        DB::table('user')
            ->where('ID_USER', $user->ID_USER)
            ->update([
                'NO_HP' => $request->input('nohp'),
                'WA' => $request->input('wa'),
                'PIN' => $request->input('pin'),
            ]);

        return redirect()->route('menu.index')->with('success', 'Menu created successfully!');
    }

    public function createpage()
    {
        return view('menu.create');
    }
}
