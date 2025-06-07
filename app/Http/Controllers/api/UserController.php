<?php

namespace App\Http\Controllers\api;

use App\Models\core\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
      /**
     * Returns active employees of an office 
     *
     * @param Office $office
     * @return void
     */
    public function office ($officeUuid)
    {


        $office = Office::where('uuid', $officeUuid)->firstOrFail();

    }
}
