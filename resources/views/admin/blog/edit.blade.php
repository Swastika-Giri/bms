@extends('layouts.admin')
@section('main-content')
    <div class="w-full p-6">
        <div class="w-full max-w-full">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                </div>
                <div class="flex-auto p-6">
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4">
                                @if(session('success'))
                                    <p class="bg-red-500 text-cyan-500 font-bold rounded-t px-4 py-2" class="">{{session('success')}}</p>
                                @endif
                                @if(session('error'))
                                    <p class="bg-red-500 text-cyan-500 font-bold rounded-t px-4 py-2">{{session('error')}}</p>
                                @endif
                            <form action ="{{route('admin.blog.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <label for="author" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> Enter Your Title</label>
                                <input type="text" name="title" value="{{ $errors->has('title') ? old('title'): $data->title}}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                @error('title')
                                <span class="text-red-600">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4">
                            <label for=" author" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> Enter Author</label>
                            <input type="text" name="author" value="{{$data->author}}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                            @error('author')
                            <span class="text-red-600">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4">
                            <label for="feature_image" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> Feature Image</label>
                            <input type="file" name="feature_image" value="{{$data->feature_image}}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                            @error('feature_image')
                            <span class="text-red-600">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <p class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> Page Content</p>
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4" >
                            <label for="page_content" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"></label>
                            {{--                                        <input type="text" id="" name="page_content" value="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-red text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-red-500/30 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />--}}
                            <textarea  name="page_content" id="editor" >{{$data->page_content}}</textarea>

                        </div>
                    </div>
                    @error('page_content')
                    <span class="text-red-600">{{$message}}</span>
                    @enderror
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4">
                            <label for="date" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> Date</label>
                            <input type="date" name="date" value="{{$data->date}}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                            @error('date')
                            <span class="text-red-600">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4">
                            <label for="status" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-500 dark:text-white/80">Status</label>
                        @if($data-> status==1)
                                <input type="radio" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-400 dark:border-gray-400" value="1" checked> Active
                                <input type="radio" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-400 dark:border-gray-400" value="0">Deactive
                            @else
                                <label for="status" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"/> </label>
                                <input type="radio" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-400 dark:border-gray-400" value="1" >Active
                                <input type="radio" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-400 dark:border-gray-400" value="0" checked>Deactive
                            @endif
                                @error('status')
                                <span class="text-red-600">{{$message}}</span>
                                @enderror
                        </div>
                    </div>

                </div>


                <div>
                    <div>
                        <button type="submit" class="inline-block w-f px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-black align-middle transition-all bg-gray-500/30  border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 size:20% margin-top:10px absolute bottom-0 left-0 ">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
@endsection
