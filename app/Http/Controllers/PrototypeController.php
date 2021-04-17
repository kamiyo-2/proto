<?php

namespace App\Http\Controllers;
use App\Models\Prototype;
use Illuminate\Http\Request;

class PrototypeController extends Controller
{
    public function index () 
    {
        // $prototypes = Prototype::latest()->get();

        // return view('prototypes.index', ['prototypes' => $prototypes]);

        return view('prototypes.index');
    }

    public function create()
    {
        return view('prototypes.create');
    }

    public function store(Request $request)
    {
        $prototype = new Prototype();
        $prototype->user_id = $request->user()->id;
        $prototype->title =$request->input('title');
        $prototype->catch_copy =$request->input('catch_copy');
        $prototype->concept =$request->input('concept');
        $prototype->iamge =$request->input('iamge');
        $prototype->save();


        return redirect('prototypes')->with(
            'status',
            $prototype->title . 'を登録しました！',
            $prototype->catch_copy . 'を登録しました！',
            $prototype->concept . 'を登録しました！',
            $prototype->image . 'を登録しました！'
        );
    }
}
