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
        $img = $request->file('file_name');
        $fileName = time().'.'.$request->file('file_name')->getClientOriginalExtension();
        $destinationPath = public_path('/images') . $fileName;
        $img->move(public_path('/images'), $fileName);
        $post = array(
            'file_name' => $fileName,
            'file_type' => $img->getClientOriginalExtension(),
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

