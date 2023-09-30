<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SinglePetJarPageContent;
use App\Models\Jawharacproduct;
use File;
use Storage;
use Carbon\Carbon;
class SinglePetJarPageController extends Controller
{
    public function create(){
        $models = Jawharacproduct::all();

        return view('front.single_pet_jar_page_contents',compact('models'));
    }
    public function insert(Request $request)
    {
        try {
            // $year = now()->year;
            $main=SinglePetJarPageContent::all();
            if($request->jawharacproducts_id == $main->jawharacproducts_id) {
                $old= SinglePetJarPageContent::find($request->jawharacproducts_id)->delete();
                if ($request->img_PJfirst) {
@unlink(public_path($old->img_PJfirst));
            }
            if ($request->img_PJsecond ) {
@unlink(public_path($old->img_PJsecond));
            }
            if ($request->img_PJthird) {
@unlink(public_path($old->img_PJthird));
            }
            }
            $directoryPath = 'public/uploads/singlepetjarpage';
            // if (Storage::disk('local')->exists($directoryPath)) {
            //   Storage::disk('local')->deleteDirectory($directoryPath);
            
            // }
              // Check if the directory exists, and create it if not
              if (!Storage::disk('local')->exists($directoryPath)) {
                Storage::disk('local')->makeDirectory($directoryPath);
            }
            
          
    
            $uploadedImages = [];
    
            // Loop through all uploaded images
            foreach ($request->allFiles() as $key => $file) {
                $imageName = date('YmdHi') . $file->getClientOriginalName();
                $filePath = $directoryPath . '/' . $imageName;
    
                // Store the image and add its path to the array
                Storage::disk('local')->put($filePath, file_get_contents($file));
                $uploadedImages[$key] = $filePath;
            }
    
            // Combine uploaded images and request data
            $data = array_merge($request->all(), $uploadedImages);
    
            // Create a new SingleMetallicTinsPageContent instance
            SinglePetJarPageContent::updateOrCreate($data);
    
            return redirect()->back()->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            // Handle exceptions and display error
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }
}