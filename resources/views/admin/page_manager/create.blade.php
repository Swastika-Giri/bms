@extends('layouts.admin')
@section('main-content')
        <div class="w-full p-6">
                <div class="w-full max-w-full">
                    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">

                        </div>
                        <div class="flex-auto p-6">
                            <div class="flex flex-wrap -mx-3">

                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class=" w-full max-w-full">
                                        <form action ="{{route('admin.page_manager.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <label for="menu_name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> Enter Menu name</label>
                                        <input type="text" name="menu_name"  id="name" value="{{old('menu_name')}}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            @error('menu_name')
                                            <span class="text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="position" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Position</label>
                                        <input type="text" name="position" value="{{old('position')}}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-red text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        @error('position')
                                        <span class="text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="feature_image" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> Feature Image</label>
                                        <input type="file" name="feature_image" value="{{old('feature_image')}}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        @error('feature_image')
                                        <span class="text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <p class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"> </p>
                                <div class="max-w-full">
                                    <div class="mb-4" >
                                        <label for="page_content" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80  text-center"> page Content</label>
{{--                                        <input type="text" id="" name="page_content" value="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-red text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-red-500/30 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />--}}
                                        <textarea  name="page_content" id="editor"  value="{{old('page_content')}}" class="h-1/4 height: 25%;"></textarea>
                                    </div>
                                </div>
                            @error('page_content')
                            <span class="text-red-600">{{$message}}</span>
                            @enderror
                            <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="redirect_url" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Redirect Url</label>
                                        <input type="text" name="redirect_url" value="{{old('redirect_url')}}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        @error('redirect_url')
                                        <span class="text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div><br>
                                <br>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="status" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-500 dark:text-white/80">Status</label>
                                    <br>
                                    <label for="status" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"/> True</label>
                                    <input type="radio" name="status" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-400 dark:border-gray-400">
                                    <label for="status" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"/> False</label>
                                    <input type="radio" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-400 dark:border-gray-400">
                                    @error('status')
                                    <span class="text-red-600">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

<br>
                    <div>
                        <button type="submit" class="bg-orange-500/30 hover:bg-blue-700 text-blue font-bold py-2 px-4 rounded content-center align-content: center;">Save</button>
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

            {{--<script>
                $("#name").keyup(function() {
                    var Text = $(this).val();
                    Text = Text.toLowerCase();
                    Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
                    $("#slug").val(Text);
                });
            </script>--}}

@endsection


            <

