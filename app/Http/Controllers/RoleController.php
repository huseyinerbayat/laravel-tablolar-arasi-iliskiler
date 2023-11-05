<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::with(['users'])->get();

        return view('roles.index', compact('roles'));
    }
}
