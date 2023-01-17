<?php

namespace App\Http\Controllers;

use App\Models\Fipe;
use Illuminate\Support\Facades\App;

class FipeController extends Controller
{
    protected $modelFipe;
    protected $brandController;

    public function __construct(Fipe $fipe, BrandController $brandController)
    {
        $this->modelFipe = $fipe;
        $this->brandController = $brandController;
    }
    public function index()
    {
        return view('fipe.index');
    }
    public function crawler()
    { 
        $this->modelFipe->getBrands();
        return view('fipe.crawler');
    }
    public function vehicles()
    { 
        $this->modelFipe->getVehicles();
        return view('fipe.vehicles'); 
    }
}
