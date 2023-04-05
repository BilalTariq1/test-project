<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a list of users.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function list(Request $request) {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Add new User
    * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add(AddUserRequest $request) {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->address = $request->address;
        $user->email = $request->email ?? '';
        $user->password = $request->password ?? '';
        $user->save();
        return response()->json($user);
    }
    /**
     * update User
     * @param Request $request
     */
    public function update(UpdateUserRequest $request) {
        $user = User::find($request->_id);
        if(!$user) 
            return response()->json(['error' => 'User not found'], 404);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->address = $request->address;
        $user->email = $request->email ?? '';
        $user->password = $request->password ?? '';
        $user->save();
        return response()->json($user);
    }
}
