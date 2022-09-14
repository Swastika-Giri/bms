<?php

namespace App\Http\Controllers;

use App\Http\Requests\MediaManagerRequest;
use App\Models\MediaManager;
use Illuminate\Http\Request;

class MediaManagerController extends Controller
{
    function create()
    {

        return view('admin.mediamanager.create');
    }
    function index()
    {
        $data = MediaManager:: all();
        //dd($data);
        return view('admin.mediamanager.index', compact('data'));
    }
    function store(MediaManagerRequest $request)
    {
        //->validate([
        //  'data' => 'required|mimes:jpg,png,jpeg,pdf,|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        // ]);

        $img = $request->file('file_name');
        $iname = $img->getClientOriginalName();
        $img->move('images/', $iname);
        //rename  file automatically after uploaded in database
        //if (Input::hasFile('file_name')) {
            //$file_name = Input::file('file_name');
            //$file_name->move($destinationPath, $file_name);
           // $iname = Input::get('rename_to');
            // for filetype Extension
            $img = $request->file('file_type');
            $filetype = $request->file('file_name')->getClientOriginalExtension();
            $destinationPath = public_path('/images') . $iname;
            $img = $request->file('file_path');
            $filepath = $request->file('file_name')->getPath();
            $post = array(
                'file_name' => $iname,
                'file_type' => $filetype,
                'file_path' => $destinationPath,
            );

            if (MediaManager::create($post)) {
                $request->session()->flash('success', 'Image uploaded  successfully');
                return redirect()->route('admin.mediamanager.index');

            } else {
                $request->session()->flash('error', 'Image upload   failed');
                return redirect()->back();
            }

        }
   // }
    public function uploadImage() {

    }
    function destroy($id)
    {
        $data = MediaManager:: find($id);
        if (!$data) {
            request()->session()->flash('error', 'Media  not found');
            return redirect()->route('admin.mediamanager.index');
        }
        if ($data->delete()) {
            $image_path = public_path("images/") .$data->file_name;
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            request()->session()->flash('success', ' picture  deleted successfully');

        } else {
            request()->session()->flash('error', 'Picture delete failed');
        }
        return redirect()->back();
    }
}

