@extends('layouts.admin')
@section('main-content')
    <div class="w-full p-6">
        <div class="w-full max-w-full">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="card-body">
        <form action ="{{route('admin.mediamanager.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex-auto p-6">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                <label for="file_name"class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> UPLOAD FILE</label>
                <input type="file" name="file_name" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                        @error('file_name')
                        <span class="block sm:inline flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">{{$message}}</span>
@enderror
            <div class="text-center">
                <button type="submit" class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-blue-500 align-middle transition-all bg-orange-500/30 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 size:"20%">Upload</button>
            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



@endsection
