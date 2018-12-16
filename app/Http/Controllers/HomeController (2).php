<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $role = Role::create(['name' => 'writer']);
         // $permission = Permission::create(['name' => 'Write articles']);

            $role = Role::findById(1);
            $permission = Permission::findById(1);
            // $role->givePermissionTo($permission);
            $role->syncPermissions($permission);
        return view('home');
    }
}
