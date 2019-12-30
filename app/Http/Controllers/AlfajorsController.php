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
        // $finalPath = storage_path('app/public');
        $folder = base_path('public/images');

        if (isset($request->imagen) && count($request->imagen) > 0) {
            foreach ($request->imagen as $key => $cada_imagen) {
                if ($request->hasFile('imagen')) {
                    if ($cada_imagen->isValid()) {
                        $file = $cada_imagen;

                        $name      = $idAlfajor . '_' . $key . '_' . base_convert(time(), 10, 36);
                        $extension = $file->guessExtension();
                        $fileName  = $name . '.' . $extension;
                        $path      = 'images/' . $fileName;

                        $guardado = $cada_imagen->move($folder, $fileName);

                        if (! is_null($guardado)) {
                            Imagen::create(['file_path' => $path, 'alfajor_id' => $idAlfajor]);
                        }

                    }

                } else {
                    return response()->json(Response::HTTP_NOT_FOUND);
                }

            }

        }

        return response()->json(Response::HTTP_OK);

    }

    /**
     * @param int $id
     */
    public function getImage($id)
    {
// $name    = Imagen::where('alfajor_id', '=', $id)->get()->first()->file_path;

// $path    = storage_path('app/public/') . Imagen::where('alfajor_id', '=', $id)->get()->first()->file_path;

// $headers = array('Content-Type' => 'image/jpeg', 'Access-Control-Allow-Origin' => '*');

        // return response()->download($path, $name, $headers);

        return $imagenes = Imagen::where('alfajor_id', '=', $id)->get();
    }

}
