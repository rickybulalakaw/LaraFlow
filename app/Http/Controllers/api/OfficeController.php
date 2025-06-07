<?php

namespace App\Http\Controllers\api;

use App\Models\core\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficeController extends Controller
{
    public function index () 
    {
        $offices = Office::where('is_active', True)->get();
        return $offices;
    }

    public function types ()
    {
        $offices = new Office;
        $officeTypes = $offices->officeArray();
        return $officeTypes;
    }
    public function show ( Office $office )
    {
        return $office;
    } 
}
