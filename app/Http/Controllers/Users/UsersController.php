<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Advertising;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::select()->with("ads")->get();
        return view("users.users",compact("users"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        //
        $profile = User::select()->find($id);
        $profile_adv = Advertising::select()->where("user_id",$id)->get();
        if (!$profile) {
            return redirect()->route('home')->with(['error' => 'هذه الملف غير موجوده']);
        }
        return view("users.profile" ,compact("profile","profile_adv"));
    }


    /**
     * Show the form for creating a new resource.
     *
     *
     * @param  array  $data
     *
     */
    public function create(Request $request)
    {
        //
        try
        {
            User::create(([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'state' => $request['state'],
                'type' => $request['type'],


            ]));

            return redirect()->route('add.user') -> with(['success' => 'تم التسجيل بنجاح']);

        }
        catch(\Exception $ex)
        {
            return redirect()->route('add.user') -> with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }



    }

    public function add (){
        return view("users.add-user");
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $users = User::find($id);
            if (!$users) {
                return redirect()->route('all.users', $id)->with(['error' => 'هذه الملف الصادر غير موجوده']);
            }
            $users->forcedelete();

            return redirect()->route('all.users')->with(['success' => 'تم حذف المستخدم بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('all.users')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
