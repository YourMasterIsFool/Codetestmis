<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view('role', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_role');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $this->validate(
            $request,
            [
                'nama' => 'required',
            ]
        );

        $role =  new Role;
        $role->nama = $request->nama;
        $role->save();

        if ($role) {
            return redirect()->route('role.index')->with(['success' => 'role Berhasil disimpan']);
        } else {
            return redirect()->route('role.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $role = Role::find($id);
        // dd($role);
        return view('edit_role', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate(
            $request,
            [
                'nama' => 'required',
            ]
        );

        $update = [
            "nama" => $request->nama,
        ];

        $role = Role::where('id', $id)->update($update);
        if ($role) {
            return redirect()->route('role.index')->with(['success' => 'role Berhasil disimpan']);
        } else {
            return redirect()->route('role.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $role = Role::destroy($id);
        if ($role) {
            return redirect()->route('role.index')->with(['success' => 'role Berhasil disimpan']);
        } else {
            return redirect()->route('role.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
    }
}
