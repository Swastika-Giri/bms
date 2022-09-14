<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageManagerRequest;
use App\Models\MediaManager;
use App\Models\PageManager;
use Illuminate\Http\Request;

class PageManagerController extends Controller
{
    function create()
    {
        return view('admin.page_manager.create');
    }

    function index()
    {
        $data= PageManager:: all();
        return view('admin.page_manager.index', compact('data'));
    }
    function store(PageManagerRequest $request)
    {
        $post = $request->validated();
        $fimg = $request->file('feature_image');
        $iname = $fimg->getClientOriginalName();
        $post['feature_image'] = $iname;
        $fimg->move('images/', $iname);
        if (PageManager::create($post)) {
            $request->session()->flash('success', 'Data Saved  successfully');
            return redirect()->route('admin.page_manager.index');
        } else {
            $request->session()->flash('error', ' Data Saved  failed');
            return redirect()->back();
        }
    }
    function edit($id){
        $data = PageManager::find($id);
        if(!$data){
            request()->session()->flash('error',' Page_manager not found');
            return redirect()->route('admin.page_manager.index');
        }
        return view('admin.page_manager.edit', compact('data'));
    }
    function update(PageManagerRequest $request,$id)
    {

        $post = $request->validated();
       // dd($post);
        //dd($post);
        $data = PageManager:: find($id);
        if (!$data) {
            request()->session()->flash('error', ' pagemanager not found');
            return redirect()->route('admin.page_manager.index');
        }
        if ($data->update($request->all())) {
            $request->session()->flash('success', 'Pagemanager updated successfully');
            return redirect()->route('admin.page_manager.index');

        } else {
            $request->session()->flash('error', 'Pagemanager update failed failed');
            return redirect()->back();
        }
        $data->update($request->all());
    }
    function destroy($id)
    {
        $data = PageManager:: find($id);
        if (!$data) {
            request()->session()->flash('error', 'page manager not found');
            return redirect()->route('admin.page_manger.index');

        }
        if ($data->delete()) {
            request()->session()->flash('success', 'page manager delete success');

        } else {
            request()->session()->flash('error', 'page manager delete failed');


        }
        return redirect()->back();


    }
}

















