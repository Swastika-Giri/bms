<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('admin.blog.create');
    }

    function store(BlogRequest $request)
    {
        $post = $request->validated();
        $img = $request->file('feature_image');
        $iname = $img->getClientOriginalName();
        $post['feature_image'] = $iname;
        $img->move('images/', $iname);
        if (Blog::create($post)) {
            $request->session()->flash('success', 'blog created successfully');
            return redirect()->route('admin.blog.index');
        } else {
            $request->session()->flash('error', ' Blog created  failed');
            return redirect()->back();
        }
    }

    function index()
    {
        $data = Blog:: all();
        //dd($data);
        return view('admin.blog.index', compact('data'));
    }

    function edit($id)
    {
        $data = Blog::find($id);
        if (!$data) {
            request()->session()->flash('error', ' Blog  not found something went wrong');
            return redirect()->route('admin.blog.index');
        }
        return view('admin.blog.edit', compact('data'));
    }

    function update(BlogRequest $request, $id)
    {

        $post = $request->validated();
        $data = Blog:: find($id);
        if (!$data) {
            request()->session()->flash('error', ' blog not found');
            return redirect()->route('admin.blog.index');
        }
        if ($data->update($post)) {
            $request->session()->flash('success', ' blog  updated successfully');
            return redirect()->route('admin.blog.index');

        } else {
            $request->session()->flash('error', 'blog update failed failed');
            return redirect()->back();
        }
        //$data->update($post);
    }

    function show($id)
    {
        $data = Blog:: find($id);
        if (!$data) {
            request()->session()->flash('error', 'blog not found');
            return redirect()->route('admin.blog.index');
        }
        return view('admin.blog.show', compact('data'));

    }

    function destroy($id)
    {
        $data = Blog:: find($id);
        if (!$data) {
            request()->session()->flash('error', 'Media  not found');
            return redirect()->route('admin.blog.index');
        }
        if ($data->delete()) {
            $image_path = public_path("images/") . $data->feature_name;
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
            request()->session()->flash('success', ' Blog deleted  successfully');

        } else {
            request()->session()->flash('error', 'Blog  deletion  failed something went wrong');
        }
        return redirect()->back();
    }


    function updateStatus(Request $request)
    {
        if ($request->ajax()) {
            $post = [
                'status' => $request->status
            ];
            $update = Blog::where('id', $request->blog_id)->update($post);
            if ($update == true) {
                return response()->json(['success' => true, 'message' => 'Blog  status has been changed successfully']);
            } else {
                return response()->json()(['error' => true, 'message' => ' blog status update fail. something went  wrong']);
            }
        } else {
            return response()->json(['status' => 'Http request']);
        }
    }
}


