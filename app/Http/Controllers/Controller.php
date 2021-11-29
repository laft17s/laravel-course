<?php

/*
|--------------------------------------------------------------------------
| namespace
|--------------------------------------------------------------------------
|
| Se utiliza para no crear conflictos entre clases y variables con el mismo
| nombre. Un namespace es una carpeta en tu aplicación.
|
*/

namespace App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| use
|--------------------------------------------------------------------------
|
| Importa diferentes clases que se utilizan en bibliotecas.
|
*/

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
