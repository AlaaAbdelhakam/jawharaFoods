<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SingleMetallicTinsPageContent;
use App\Models\Jawharacproduct;
use File;
use Storage;
use Carbon\Carbon;
class SingleMetallicTinsPageController extends Controller
{
    public function create(){
        $models = Jawharacproduct::all();

        return view('front.single_metallic_tins_page',compact('models'));
    }
    public function insert(Request $request)
    {
        try {
            // $year = now()->year;
            $main=SingleMetallicTinsPageContent::all();
            if($request->jawharacproducts_id == $main->jawharacproducts_id) {
                $old= SingleMetallicTinsPageContent::find($request->jawharacproducts_id)->delete();
                if ($request->img_MTfirst) {
@unlink(public_path($old->img_MTfirst));
            }
            if ($request->img_MTsecond ) {
@unlink(public_path($old->img_MTsecond));
            }
            if ($request->img_MTthird) {
@unlink(public_path($old->img_MTthird));
            }
            }
            $directoryPath = 'public/uploads/singlemetallictinspage';
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
            SingleMetallicTinsPageContent::updateOrCreate($data);
    
            return redirect()->back()->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            // Handle exceptions and display error
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }
    }