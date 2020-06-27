<?php

namespace App\Http\CategoriaControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\CategoriaPedidosController as BaseController;

class CategoriaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
