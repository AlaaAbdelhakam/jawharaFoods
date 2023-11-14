<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class UploadPDF extends Controller
{
    public function upload(Request $request)
    {
        $path = Storage::put('Catalog', $request->file('catalog'));

        return redirect()->back(); // images/FGZOpU9V5guncEb6ljnDqHAg2z7rd3yL83PgCihf.jpg
    }
    public function download(Request $request)
{
    return Storage::download('Catalog.pdf');
}
}
