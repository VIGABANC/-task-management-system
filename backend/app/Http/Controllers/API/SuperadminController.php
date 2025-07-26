<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Superadmin;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    // GET /api/admins
    public function index()
    {
        $sadmins = Superadmin::all();
        return response()->json($sadmins);
    }

    // POST /api/admins
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'role'=> 'required|max:255',
        ]);

        $sadmin = Superadmin::create($validatedData);
        return response()->json([
            'message' => 'Admin created successfully',
            'data'    => $sadmin
        ], 201);
    }

    // GET /api/admins/{admin}
    public function show(Superadmin $sadmin)
    {
        return response()->json($sadmin);
    }

    // PUT/PATCH /api/admins/{admin}
    public function update(Request $request, Superadmin $sadmin)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'role' => 'required|max:255',
        ]);

        $sadmin->update($validatedData);
        return response()->json([
            'message' => 'Admin updated successfully',
            'data'    => $sadmin
        ]);
    }

    // DELETE /api/admins/{admin}
    public function destroy(Superadmin $admin)
    {
        $sadmin->delete();
        return response()->json(['message' => 'Admin deleted successfully']);
    }
}
