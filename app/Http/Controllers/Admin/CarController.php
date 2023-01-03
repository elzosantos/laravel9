<?php

namespace App\Http\Controllers\Admin;

use App\Models\{
    Car,
    User
};
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCarRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

class CarController extends Controller
{
    protected $car;
    protected $user;

    public function __construct(Car $car, User $user)
    {

        $this->car = $car;
        $this->user = $user;
    }

    public function index(Request $request, $userId)
    { 
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $cars = $user->cars()
            ->where('name', 'LIKE', "%$request->search%")
            ->get();
        return view('cars.index', compact('user', 'cars'));
    }

    public function associate(Request $request)
    {

      //  dd(AuthenticatedSessionController::class()->username);
        if (!$user = $this->user->find($request)) {
            return redirect()->back();
        }

        $cars = $user->cars()
            ->where('name', 'LIKE', "%$request->search%")
            ->get();
        return view('cars.index', compact('user', 'cars'));
    }


    public function create($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        return view('cars.create', compact('user'));
    }

    public function store(StoreUpdateCarRequest $request, $userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $user->cars()->create($request->all());

        return redirect()->route('cars.index', $user->id);
    }

    public function edit($userId, $id)
    {
        if (!$car = $this->car->find($id)) {
            return redirect()->back();
        }
        $user = $this->user->find($car->user_id);
        return view('cars.edit', compact('user', 'car'));
    }

    public function update(StoreUpdateCarRequest $request, $id)
    {
        if (!$car = $this->car->find($id)) {
            return redirect()->back();
        }

        $car->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'year' => $request->year,
        ]);

        return redirect()->route('cars.index', $car->user_id);
    }
}
