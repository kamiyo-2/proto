<?php




namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Prototype;
use Illuminate\Http\Request;
use App\Http\Controllers\PrototypeController;

class UserController extends Controller
{

  
    public function show($id)
    {
        $user = User::findOrFail($id);
        $prototypes = $user->prototypes;
        
        return view('users.show', compact('user', 'prototypes'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));

    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $prototypes = $user->prototypes;

        $user->name = $request->input('name');
        $user->save();
        return view('users.show', compact('user','prototypes'))->with(
            'status',
            $user->name . "を更新しました！"
        );
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $prototypes = $user->prototypes;

        foreach ($prototypes as $prototype) {

            $prototype->delete();
        
        }
        $user->delete();

        return redirect('prototypes')->with(
            'status',
            $user->name . 'を削除しました！'
        );
    }

   
}
