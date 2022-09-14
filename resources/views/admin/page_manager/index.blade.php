@extends('layouts.admin')
@section('main-content')
    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <div class="w-full px-6 py-6 mx-auto">
            <!-- table 1 -->
            <div class="text-center">
                <a href="{{route('admin.page_manager.create')}}" class="bg-red-500/30 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full position:right">
                    <i class="fa fa-plus"></i>
                    manage page
                </a>

            </div>
            <br>
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white"> Details</h6
                        </div>



                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">

                                @if(session('success'))
                                    <p class="">{{session('success')}}</p>
                                @endif

                                @if(session('error'))
                                    <p class="bg-red-500 text-red-600 font-bold rounded-t px-4 py-2">{{session('error')}}</p>
                                @endif
                                <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                    <tr>
                                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">SN</th>

                                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"> Name</th>
                                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Slug</th>
                                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Position</th>
                                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Require  Image</th>
                                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Page Content</th>
                                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">Redirect Url</th>
                                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">Enable or Desable</th>

                                    </tr>
                                    </thead>
                                      <tbody>
                                    @foreach($data as $pagemanager)
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{$pagemanager->id}}</td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">{{$pagemanager->menu_name}}</td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">{{$pagemanager->menu_slug}}</td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">{{$pagemanager->position}}</td>
                                            <td> {{$pagemanager->feature_image}}</td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">{{ $pagemanager->page_content}}</td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">{{ $pagemanager->redirect_url}}</td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @if($pagemanager->status == 1)
                                                <span class="text-success">Active</span>
                                                @else
                                                    <span class="bg-red-500 text-red-600 font-bold rounded-t px-4 py-2" >Deactive</span>
                                                @endif
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <a href="{{route('admin.page_manager.edit',$pagemanager->id)}}">
                                                <button type="edit" class="bg-blue-500/13 hover:bg-white/10 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                    Edit
                                                </button>
                                                </a>
                                            </td>
                                            <td>
                                                <form action ="{{route('admin.page_manager.destroy',$pagemanager->id)}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="bg-red-500/30 hover:bg-white/10 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                        Delete
                                                    </button>
                                                    <td id="enable">
                                                <div class="flex items-center pl-12 mb-0.5 text-left min-h-6">
                                                    <input type="checkbox" class="mt-0.5 rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-zinc-700/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"  />
                                                    <label class="ml-2 font-normal cursor-pointer select-none text-sm text-slate-700" for="enable"></label>
                                                </div>
                                            </td>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                                </div>
                        </div>
<script type="text/javascript">
    $(function(){
        $("#enable").click(function () {
            if ($(this).is(":checked")) {
                $("#enable").prop("disabled", "disabled");
            }
            else{
                $("#enable").removeProp("disabled");
            }
        });

    });

</script>
@endsection
