<?php

namespace App\Http\RolesControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\RolesController as BaseController;

class RolesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
