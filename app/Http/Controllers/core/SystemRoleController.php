<?php

namespace App\Http\Controllers\core;

use App\Http\Requests\StoreSystemRoleRequest;
use App\Http\Requests\UpdateSystemRoleRequest;
use App\Models\core\SystemRole;
use App\Http\Controllers\Controller;

class SystemRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('core.common.manage', ['table' => 'system_role']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSystemRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemRole $systemRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemRole $systemRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemRoleRequest $request, SystemRole $systemRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SystemRole $systemRole)
    {
        //
    }
}
