<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::get();
        return view('user.index', compact('users'));
    }

    public function show($id)
    {
        //$user = User::where('id', '=', $id)->first();
        if(!$user = User::find($id))
            return redirect()->route('user.index');

        return view('user.show', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        return redirect()->route('user.index');
        // se for redirecionar para a pagina anterior enviando esse id
        //return redirect()->route('user.show', $user->id);

        //dd($request->all());
    }

    public function edit($id)
    {
       if(!$user = User::find($id))
            return redirect()->route('user.index');
        return view('user.edit', compact('user'));
    }


    public function update(StoreUpdateUserFormRequest $request, $id)
    {
       if(!$user = User::find($id))
        return redirect()->route('user.index');

        $data = $request->only('name', 'email');
        if($request->password)
            $data['password'] =bcrypt($request->password);
            $user->update($data);
            return redirect()->route('user.index');

    }

    public function delete($id)
    {
        if(!$user = User::find($id))
        return redirect()->route('user.index');

        $user->delete();
        return redirect()->route('user.index');
    }
}
