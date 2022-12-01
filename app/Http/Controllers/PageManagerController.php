<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageManagerRequest;
use App\Models\MediaManager;
use App\Models\PageManager;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageManagerController extends Controller
{
    function create()
    {
        return view('admin.page_manager.create');
    }

    function index()
    {
        $data= PageManager::orderBy('position','asc')->get();
        return view('admin.page_manager.index', compact('data'));

    }
    function store(PageManagerRequest $request)
    {
        $post = $request->validated();
        $fimg = $request->file('feature_image');
        $iname = $fimg->getClientOriginalName();
        $post['feature_image'] = $iname;
        $post['menu_slug'] = Str::slug($post['menu_name']);
        $fimg->move('images/', $iname);
       // $status = actions.PageManagerRequest(id, $request);
       // $post->status= $request->status;
        //$post->save();
        //return  response()->json('success');
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
        $data = PageManager:: find($id);
        if (!$data) {
            request()->session()->flash('error', ' pagemanager not found');
            return redirect()->route('admin.page_manager.index');
        }
        if ($data->update($post)) {
            $request->session()->flash('success', 'Pagemanager updated successfully');
            return redirect()->route('admin.page_manager.index');

        } else {
            $request->session()->flash('error', 'Pagemanager update failed failed');
            return redirect()->back();
        }
        //$data->update($post);
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
    function updateStatus(Request $request) {
        if($request->ajax()){
            $post = [
                'status' => $request->status
            ];
            $update = PageManager::where('id', $request->page_id)->update($post);
            if ($update == true) {
                return response()->json(['success' => true, 'message' => 'page status has been changed successfully']);
            } else {
                return response()->json()(['error' => true, 'message' => 'status update fail. something goes wrong']);
            }
        } else {
            return response()->json(['status'=>'Http request']);
        }
    }

}

















