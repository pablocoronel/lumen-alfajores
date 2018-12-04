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
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file      = $request->imagen;
                $fileName  = base_convert(time(), 10, 36) . '.' . $file->guessExtension();
                $finalPath = storage_path('app/public');

                $request->file('imagen')->move($finalPath, $fileName);

                return response()->json(Response::HTTP_OK);
            }

        } else {
            return response()->json(Response::HTTP_NOT_FOUND);
        }

    }

}
