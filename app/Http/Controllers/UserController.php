<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function index(Request $request)
    {


        
        $search = $request->search;
        $users = User::where(function ($query) use ($search){
                if($search){
                    $query->where('name','=', $search);
                    $query->orWhere('email','LIKE',"%{$search}%"); 
                }
            })->paginate(3);
            
            return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if (!$user = User::find($id)) 
            return redirect()->route('users.index');
        
        return view('users.show',compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if(!$user = User::find($id))
        return redirect()->route('users.index');

        return view('users.edit',compact('user'));

    }

    public function update(StoreUpdateFormRequest $request ,$id)
    {
        if(!$user = User::find($id))
        return redirect()->route('users.index');
    
        $data = $request->only('name','email');  
        
        if($request->password)
            $data['password'] = bcrypt($request->password);
        $user->update($data);

        return redirect()->route('users.index');   

    }

    public function destroy($id)
    {
        if(!$user = User::find($id))
        return redirect()->route('users.index');

        $user->delete();
        return redirect()->route('users.index');
    }

}
