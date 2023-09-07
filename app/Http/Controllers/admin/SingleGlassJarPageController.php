<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SingleGlassJarPageContent;
use App\Models\Jawharacproduct;
use File;
use Storage;
use Carbon\Carbon;
class SingleGlassJarPageController extends Controller
{
    public function create(){
        $models = Jawharacproduct::all();

        return view('front.create_single_glass_jar_page',compact('models'));
    }
    public function insert(Request $request)
    {
        try {
            // $year = now()->year;
            $main=SingleGlassJarPageContent::all();
            if($request->jawharacproducts_id == $main->jawharacproducts_id) {
              $old=SingleGlassJarPageContent::find($request->jawharacproducts_id);
              if ($request->img_GJfirst) {
                @unlink(public_path($old->img_GJfirst));
            }
            if ($request->img_GJsecond) {
                @unlink(public_path($old->img_GJsecond));
            }
            if ($request->img_GJthird) {
                @unlink(public_path($old->img_GJthird));
            }
            $old->delete();
            }
            $directoryPath = 'public/uploads/singleglassjarpage';
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
    
            // Create a new SingleGlassJarPageContent instance
            SingleGlassJarPageContent::updateOrCreate($data);
    
            return redirect()->back()->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            // Handle exceptions and display error
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }
    }