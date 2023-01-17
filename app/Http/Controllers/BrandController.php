<?php

namespace App\Http\Controllers;
use App\Models\Brand; 
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //  
    protected $model;
    public function __construct(Brand $brand)
    {
        $this->model = $brand;
    }
    public function index(Request $request)
    { 
        $search = $request->search;
        $brands = $this->model->getBrandsCars($search);
       
        
        return view('brands.index', compact('brands'));
    }

    public function storeBrand (Brand $brands)
    { 
     /*   foreach ($brands as $brand) {
            $brand[] = $this->model->create($brand);
        }*/
        $brand= $this->model->create($brands);
       
        
        return view('brands.index', compact('brand'));
    }

}
 

