<?php
namespace App\Http\Controllers;

use App\Imagen;
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
        $idAlfajor = $request->idAlfajor;
        $finalPath = storage_path('app/public');

        foreach ($request->imagen as $key => $cada_imagen) {
            if ($request->hasFile('imagen')) {
                if ($cada_imagen->isValid()) {
                    $file = $cada_imagen;

                    $name      = $idAlfajor . '_' . $key . '_' . base_convert(time(), 10, 36);
                    $extension = $file->guessExtension();
                    $fileName  = $name . '.' . $extension;

                    $guardado = $cada_imagen->move($finalPath, $fileName);

                    if (! is_null($guardado)) {
                        $ruta = $fileName;

                        Imagen::create(['file_path' => $ruta, 'alfajor_id' => $idAlfajor]);
                    }

                }

            } else {
                return response()->json(Response::HTTP_NOT_FOUND);
            }

        }

        return response()->json(Response::HTTP_OK);

    }

}
