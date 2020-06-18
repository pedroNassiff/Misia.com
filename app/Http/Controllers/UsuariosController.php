<?php

namespace App\Http\UsuariosControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\UsuariosController as BaseController;

class UsuariosController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
