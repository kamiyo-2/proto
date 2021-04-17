<?php

namespace App\Http\Controllers;
use App\Models\Prototype;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class PrototypeController extends Controller
{
    public function index () 
    {
        $prototypes = Prototype::latest()->get();

        return view('prototypes.index', ['prototypes' => $prototypes]);

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

    public function show($id)
    {
        $prototype = Prototype::find($id);

        return view('prototypes.show', compact('prototype'));
    }

    public function edit($id)
    {
        $prototype = Prototype::find($id);

        return view('prototypes.edit', compact('prototype'));
    }

    public function update(Request $request, $id)
    {
        $prototype = Prototype::find($id);

        $prototype->title = $request->input('title');
        $prototype->save();
        return view('prototypes.show', compact('prototype'))->with(
            'status',
            $prototype->title . 'を更新しました！'
        );
    }

    public function destroy($id)
    {
        $prototype = Prototype::find($id);
        $prototype->delete();

        return redirect('prototypes')->with(
            'status',
            $prototype->title . 'を削除しました！'
        );
    }
}
