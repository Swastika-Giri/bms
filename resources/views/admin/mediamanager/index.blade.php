@extends('layouts.admin')
@section('main-content')
    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <div class="w-full px-6 py-6 mx-auto">
            <!-- table 1 -->
            <div class="text-center">
                <a href="{{route('admin.mediamanager.create')}}" class="bg-red-500/30 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full position:right">
                    <i class="fa fa-plus"></i>
                    Upload new file
                </a>

            </div>
            <br>
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Image Details</h6
                        </div>



                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">

                                @if(session('success'))
                                    <p class="bg-red-500 text-cyan-500 font-bold rounded-t px-4 py-2" class="">{{session('success')}}</p>
                                @endif

                                @if(session('error'))
                                    <p class="bg-red-500 text-red-600 font-bold rounded-t px-4 py-2">{{session('error')}}</p>
                                @endif
                                <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                    <tr>
                                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">SN</th>

                                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Image</th>
                                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">File Type</th>

                                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">File Name</th>
                                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">File path</th>
                                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>


                                    </tr>
                                    </thead>
                                   <tbody>
                                   @foreach($data as $item)
                                       <tr>
                                           <td>{{$item->id}}</td>
                                           <td><img src="{{asset('images/'.$item->file_name)}}" width="30" height="30" class="img img_resposive"/> </td>
                                           <td>{{$item->file_type}}</td>
                                           <td>{{$item->file_name}}</td>

                                           <td>{{$item->file_path}}</td>
                                           <td>
                                           <form action ="{{route('admin.mediamanager.destroy',$item->id)}}" method="post">
                                               @csrf
                                               <input type="hidden" name="_method" value="delete">
                                               <button class="bg-blue-500 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                   Delete
                                               </button>
                                           </form>
                                           </td>
                                           @endforeach
                                       </tr>
                                   </tbody>
                                </div>
                        </div>
                                </table>
@endsection
