<?php

namespace App\Http\Controllers\Adv;
use App\Models\Advertising;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvController extends Controller
{
    //
    public function index()
    {
        return view('adv.create');
    }

    public function single($id)
    {
        $single = Advertising::select()->with('users')->find($id);
        return view('adv.single-adv',compact('single'));
    }

    public function update(Request $request , $id)
    {
        try
        {
        $single = Advertising::select()->with('users')->find($id);
        if (!$single) {
            return redirect()->route('single-adv', $id)->with(['error' => 'هذه الملف الصادر غير موجوده']);
        }
        $single-> update(([

                'type' => $request['type'],
                'state' => $request['state'],
                'size' => $request['size'],
                'price' => $request['price'],
                'block_num' => $request['block_num'],
                'address' => $request['address'],
                'details' => $request['details'],
                'time' => $request['time'],
                'user_type' => $request['user_type'],
                'images' => $request['images'],
                'phone' => $request['phone'],
                'whats_app' => $request['whats_app'],
                

            ]));

            return redirect()->route('single-adv', $id) -> with(['success' => 'تم التعديل بنجاح']);

        }
        catch(\Exception $ex)
        {
            return redirect()->route('single-adv', $id) -> with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }

    }


    public function save (Request $request)
    {
        try
        {
            Advertising::create(([

                'type' => $request['type'],
                'state' => $request['state'],
                'size' => $request['size'],
                'price' => $request['price'],
                'block_num' => $request['block_num'],
                'address' => $request['address'],
                'details' => $request['details'],
                'time' => $request['time'],
                'user_type' => $request['user_type'],
                'images' => $request['images'],
                'phone' => $request['phone'],
                'whats_app' => $request['whats_app'],
                'user_id' => $request['user_id'],

            ]));

            return redirect()->route('create') -> with(['success' => 'تم التسجيل بنجاح']);

        }
        catch(\Exception $ex)
        {
            return redirect()->route('create') -> with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }

    }

    public function all()
    {
        $advs = advertising::select()->with("users")->get();
        return view('adv.advertising',compact("advs"));
    }


    public function edit($id)
    {
        //
        $single = Advertising::select()->with('users')->find($id);
        return view('adv.edit',compact('single'));

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertising $advertising)
    {
        //
    }
}
