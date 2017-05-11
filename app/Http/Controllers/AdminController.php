<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMemberRequest;
use App\Http\Requests\AddFunctionRequest;
use App\Http\Requests\EditFunctionRequest;
use App\Http\Requests\EditMemberRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Member;
use App\Func;
use App\Group;
use App\User;
use App\Sessions;
use Input;
use Auth;
use Redirect;
use Session;

class AdminController extends Controller
{

    public function index()
    {

    }

    // 登入
    public function loginHandle ()
    {

        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password'),

        );

        if ( Auth::validate($userdata) ) {

            if ( Auth::attempt($userdata) ) {

                // 給予新的 token
                $saveToken = User::where('username', '=', Input::get('username'))->get();
                $createToken = $saveToken->remember_token = "123456";

                // 登入紀錄到 session table
                $newSession = [
                    'username' => Input::get('username'),
                ];
                Sessions::create($newSession);

                return Redirect::intended('/admin/lists');
            }
        }
        else {

            Session::flash('error', '帳號或密碼錯誤');
            return Redirect::to('/');
        }
    }

    // 登入清單
    public function loginLists ()
    {
        $record = Sessions::select('id', 'username', 'created_at')->groupBy('username')->get();
        return view('admin.record')->with('record', $record);
    }

    // 登出
    public function logout ()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    // 新增管理員帳號頁面
    public function addMember ()
    {
        $group = Group::all();
        return view('admin.new_member')->with('group', $group);
    }

    // 新增管理員帳號
    public function addMemberHandle (AddMemberRequest $request)
    {

        $new = [
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'firstname' => $request->firstname,
            'email' => $request->email,
            'phone' => $request->phone,
            'qq_id' => $request->qq,
            'wechat_id' => $request->wechat,
            'line_id' => $request->line,
            'group' => $request->group,
        ];
        if (!Member::create($new)) {

            return "fail";
        }
        return redirect('admin/lists'); // 導到管理員列表
    }

    // 管理員列表
    public function lists ()
    {


        $data = Member::all();
        $data = Member::select('member.*', 'group.title')->join('group', 'member.group', '=', 'group.auth')->get();

        return view('admin.lists')->with('info', $data);
    }


    // 編輯管理員頁面
    public function edit(Request $request)
    {
        $data = array(
            'member' => Member::find($request->id),
            'group' => Group::all(),
        );

        return view('admin.edit')->with('info', $data);
    }

    // 編輯管理員
    public function editHandle (EditMemberRequest $request)
    {

        $member = Member::find($request->member_id);

        $member->username = $request->username;
        $member->password = bcrypt($request->password);
        $member->firstname = $request->firstname;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->qq_id = $request->qq;
        $member->wechat_id = $request->wechat;
        $member->line_id = $request->line;
        $member->group = $request->group;
        $member->save();

        return redirect('admin/lists');
    }

    // 刪除管理員
    public function removeHandle(Request $request)
    {

        $member = Member::find($request->member_id);
        $member->delete();

        return redirect()->back();
    }

    // 新增群組頁面
    public function addGroups()
    {
        $func = Func::all();
        return view('admin.addgroup')->with('func', $func);
    }

    // 新增群組
    public function addGroupsHandle(AddFunctionRequest $request)
    {

        $new = [
            'title' => $request->title,
            'auth' => $request->auth,
            'manager' => !empty( $request->func1 ) ? 1:0,
            'member' => !empty( $request->func2 ) ? 1:0,
            'game_server' => !empty( $request->func3 ) ? 1:0,
            'firewall' => !empty( $request->func4 ) ? 1:0,
            'finance' => !empty( $request->func5 ) ? 1:0,
            'server_auth' => !empty( $request->func6 ) ? 1:0,

        ];
        if (!Group::create($new)) {

            return "fail";
        }
        return redirect('admin/groups/create'); // 導到管理員列表

    }

    // 管理員列表
    public function groupLists ()
    {

        $group = Group::all();
        return view('admin.grouplists')->with('group', $group);
    }

    //編輯群組頁面
    public function groupEdit(Request $request)
    {

        $group = Group::find($request->member_id);
        $func = Func::all();
        if (!$group) {
            return "not found";
        }
        return view('admin.groupedit')->with('group', $group)->with('func', $func);
    }

    // 編輯群組
    public function groupEditHandle(EditFunctionRequest $request)
    {

        $group = Group::find($request->member_id);

        $group->title = $request->title;
        $group->manager = !empty( $request->manager ) ? 1:0;
        $group->member = !empty( $request->member ) ? 1:0;
        $group->game_server = !empty( $request->game_server ) ? 1:0;
        $group->firewall = !empty( $request->firewall ) ? 1:0;
        $group->finance = !empty( $request->finance ) ? 1:0;
        $group->server_auth = !empty( $request->server_auth ) ? 1:0;
        $group->save();

        return redirect('/admin/groups/lists');
    }

    // 刪除群組
    public function groupRemoveHandle (Request $request)
    {
        $group = Group::find($request->member_id);
        $group->delete();

        return redirect()->back();
    }

}
