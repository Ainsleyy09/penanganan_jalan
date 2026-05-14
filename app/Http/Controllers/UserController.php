<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        if ($users->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Users Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Users",
            "data" => $users
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "User Detail",
            "data" => $user
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|string',
            'user_photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $imageName = null;

        if ($request->hasFile('user_photo')) {
            $image = $request->file('user_photo');
            $image->store('users', 'public');
            $imageName = $image->hashName();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'user_photo' => $imageName,
        ]);

        return response()->json([
            'success' => true,
            'message' => "User Added Successfully!",
            "data" => $user
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User Not Found!'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
            'role' => 'required|string',
            'user_photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('user_photo')) {
            $image = $request->file('user_photo');
            $image->store('users', 'public');

            if ($user->user_photo) {
                Storage::disk('public')->delete('users/' . $user->user_photo);
            }

            $data['user_photo'] = $image->hashName();
        }

        $user->update($data);

        return response()->json([
            "success" => true,
            "message" => "User Updated Successfully!",
            "data" => $user
        ]);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User Not Found!'
            ]);
        }

        if ($user->user_photo) {
            Storage::disk('public')->delete('users/' . $user->user_photo);
        }

        $user->delete();

        return response()->json([
            "success" => true,
            "message" => "User Deleted Successfully!"
        ]);
    }
}
