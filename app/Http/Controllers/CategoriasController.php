<?php

namespace App\Http\CategoriasControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\CategoriasPedidosController as BaseController;

class CategoriasController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
