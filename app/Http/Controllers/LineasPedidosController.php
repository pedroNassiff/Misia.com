<?php

namespace App\Http\LineasPedidosControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\LineasPedidosController as BaseController;

class LineasPedidosController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
