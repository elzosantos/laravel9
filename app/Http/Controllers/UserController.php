<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    protected $model;
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function index(Request $request)
    {

        $search = $request->search;
      
        $users = $this->model->getUsers(
            search: $request->search ?? ''
        );
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if (!$users = $this->model->find($id))
            return redirect()->route('users.index');

        return view('users.show', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        if ($request->image) {
            $extension = $request->image->getClientOriginalExtension();
            $data['image'] = $request->image->storeAs('users', date('Y') . rand() . ".{$extension}");
        } 
        $data['password'] = bcrypt($data['password']); 
        $this->model->create($data);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$users = $this->model->find($id))
            return redirect()->route('users.index');
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        if (!$users = $this->model->find($id))
            return redirect()->route('users.index');
        $data = $request->only('name', 'email');

        if ($request->image) {
            if (Storage::exists($users->image)) {
                Storage::delete($users->image);
            }
            $extension = $request->image->getClientOriginalExtension();
            $data['image'] = $request->image->storeAs('users', date('Y') . rand() . ".{$extension}");
        }
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        $users->update($data);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if (!$users = $this->model->find($id))
            return redirect()->route('users.index');
        $users->delete();
        return redirect()->route('users.index');
    }
}
