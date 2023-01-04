<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePartnerFormRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{ 
    protected $model;
    public function __construct(Partner $partner)
    {
        $this->model = $partner;
    }
    public function index(Request $request)
    {
        $search = $request->search;
        $partners = $this->model->getPartners(
            search: $request->search ?? ''
        );
 
        return view('partners.index', compact('partners'));
    }

    public function show($id)
    {
        if (!$partners = $this->model->find($id))
            return redirect()->route('partners.index');

        return view('partners.show', compact('partners'));
    }
    public function create()
    {
        return view('partners.create');
    }

    public function store(StoreUpdatePartnerFormRequest $request)
    {
        $data = $request->all();
       /* if ($request->image) {
            $extension = $request->image->getClientOriginalExtension();
            $data['image'] = $request->image->storeAs('partners', date('Y') . rand() . ".{$extension}");
        } */
     
        $this->model->create($data);
        return redirect()->route('partners.index');
    }

    public function edit($id)
    {
        if (!$partners = $this->model->find($id))
            return redirect()->route('partners.index');
        return view('partners.edit', compact('partners'));
    }

    public function update(Request $request, $id)
    {
        if (!$partners = $this->model->find($id))
            return redirect()->route('partners.index');
        $data = $request->only('name', 'email');

        if ($request->image) {
            if (Storage::exists($partners->image)) {
                Storage::delete($partners->image);
            }
            $extension = $request->image->getClientOriginalExtension();
            $data['image'] = $request->image->storeAs('partners', date('Y') . rand() . ".{$extension}");
        }
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        $partners->update($data);
        return redirect()->route('partners.index');
    }

    public function destroy($id)
    {
        if (!$partners = $this->model->find($id))
            return redirect()->route('partners.index');
        $partners->delete();
        return redirect()->route('partners.index');
    }
}
