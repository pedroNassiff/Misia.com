<?php

namespace App\Http\ProductosControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\ProductosController as BaseController;

class ProductosController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
