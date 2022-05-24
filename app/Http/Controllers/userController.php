<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Controllers\dedirect;

class userController extends Controller
{
    public function tableList()
    {
        $user = User::all();
        return view('Admin.pages.tables.table')->with('user', $user);
    }

    public function store(Request $request)
    {

        User::create($request->all());
        return redirect()->back();
    }


    public function edit($id)
    {

        $user = User::find($id);
        //dd($user);
        return view('Admin.pages.forms.edit', compact(['user']));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/Admin/table');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'user deleted!');
    }
}
