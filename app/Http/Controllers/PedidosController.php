<?php

namespace App\Http\PedidosControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\PedidosController as BaseController;

class PedidosController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
