<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    // 新增使用者頁面
    public function addMember()
    {
        return view('user.new_member');
    }

    // 新增使用者
    public function addMemberHandle(AddUserRequest $request)
    {
        $new = [
            'username' => $request->username,
            'password' => $request->password,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'phone' => $request->phone,
            'qq_id' => $request->qq,
            'wechat_id' => $request->wechat,
            'line_id' => $request->line,
            'point' => $request->point,
        ];
        if (!User::create($new)) {

            return "fail";
        }
        return redirect('user/lists'); // 導到管理員列表
    }

    // 使用者列表
    public function lists ()
    {
        $user = User::all();
        return view('user.lists')->with('user', $user);
    }

    // 編輯使用者頁面
    public function edit (Request $request)
    {
        $user = User::find($request->id);
        if (!$user) {
            return "not found";
        }
        return view('user.edit')->with('user', $user);
    }

    // 編輯使用者
    public function editHandle (EditUserRequest $request)
    {
        $user = User::find($request->id);

        $user->username = $request->username;
        $user->password = $request->password;
        $user->firstname = $request->firstname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->qq_id = $request->qq;
        $user->wechat_id = $request->wechat;
        $user->line_id = $request->line;
        $user->point = $request->point;
        $user->save();

        return redirect('user/lists');
    }

    // 刪除使用者
    public function removeHandle (Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return redirect('user/lists');
    }

    // 搜尋使用者
    public function searchHandle (Request $request)
    {
        $keywords = $request->search;

        $search_user = User::where('username', '=', $keywords)
        ->orWhere('email', '=', $keywords)
        ->orWhere('id', '=', $keywords)
        ->get();

        if (!$search_user) {
            return "not found";
        }
        return view('user.lists')->with('user', $search_user);
    }

    // 加值頁面
    public function deposit (Request $request)
    {
        $user = User::find($request->id);
        if (!$user) {
            return "not found";
        }
        return view('user.deposit')->with('user', $user);
    }

    // 加值
    public function depositHandle (Request $request)
    {
        $user = User::find($request->id);
        $user->point += $request->deposit;
        $result = $user->save();

        return ( !$result ) ? "failed" : view('user.deposit')->with('user', $user);
    }

}
