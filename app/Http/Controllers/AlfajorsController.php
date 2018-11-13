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
        return $request->all();
        // if ($request->hasFile('imagen')) {
        //     return response()->json(Response::HTTP_OK);
        // }else{
        //     return response()->json(Response::HTTP_NOT_FOUND);
        // }
        // if ($request->hasFile('imagen')) {
            // $fileData = \File::get($file->path());

            // $fileName = $this->createFilename($file);
            // Group files by mime type
            // $mime = str_replace('/', '-', $file->getMimeType());
            // Group files by the date (week
            // $dateFolder = date("Y-m-W");

            // Build the file path
            // $filePath  = "upload/{$mime}/{$dateFolder}/";
            // $finalPath = public_path("/");
            // $request->file('imagen')->move('/', 's.jpg');
// $finalPath = storage_path("app/" . $filePath);

            // move the file name (Sube al hosting)
            // $file->move($finalPath, $fileName);

            // return response()->json(Response::HTTP_OK);
        // }else{
            return response()->json(Response::HTTP_NOT_FOUND);
        // }

    }

}
