<?php
namespace App\Http\Controllers;

header('Access-Control-Allow-Origin: *');

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
        dd($request->all());
        // if ($request->hasFile('imagen')) {
        //     dd('s');
        //     // $file = $request->imagen;
        //     // $fileData = \File::get($file->path());

        //     // $fileName   = $this->createFilename($file);
        //     // $finalPath = public_path("/");
        //     // $request->file('imagen')->move($finalPath, $fileName);

        //     // return response()->json(Response::HTTP_OK);
        // } else {
        //     dd('f');
        //     // return response()->json(Response::HTTP_NOT_FOUND);
        // }

    }

}
