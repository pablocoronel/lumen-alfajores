<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlfajorsController extends Controller
{
    const MODEL = "App\Alfajor";

    use RESTActions;

    /**
     * @param Request $request
     */
    public function imagenUpload(Request $request)
    {
        dd($request);
    }
}
