<?php

namespace App\Http\ProductoControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\ProductoController as BaseController;

class ProductoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
