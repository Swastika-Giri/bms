@extends('layouts.admin')
@section('main-content')
    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <div class="w-full px-6 py-6 mx-auto">
    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <div class="w-full px-6 py-6 mx-auto">
            <!-- table 1 -->
            <div class="text-center">
                <a href="{{route('admin.blog.create')}}" class="bg-red-500/30 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full position:right">
                    <i class="fa fa-plus"></i>
                    create new
                </a>

            </div>
            <br>
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Blog Details</h6
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

                                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Author</th>

                                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Feature Image</th>
                                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>


                                    </tr>
                                    </thead>
                                   <tbody>
                                   @foreach($data as $blog)
                                       <tr>
                                           <td>{{$blog->id}}</td>
                                           <td>{{$blog->title}}</td>
                                           <td>{{$blog->author}}</td>
                                           <td><img src="{{asset('images/'.$blog->feature_image)}}" width="30" height="30" class="img img_resposive"/> </td>

                                           <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                               @if($blog->status == 1  ? 'checked' :'')
                                                   <div class="flex items-center pl-12 mb-0.5 text-left min-h-6">
                                                       <input type="checkbox" {{ $blog->status == 1  ? 'checked' :'' }} data-id ="{{ $blog->id }}" class=" activestatus mt-0.5 rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-zinc-700/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" id="enable" />
                                                   </div>
                                               @else
                                                   <div class="flex items-center pl-12 mb-0.5 text-left min-h-6">
                                                       <input type="checkbox"  data-id ="{{ $blog->id }}" class=" activestatus mt-0.5 rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-zinc-700/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" id="disable" />
                                                   </div>
                                               @endif
                                           </td>

                                           <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                               <a href="{{route('admin.blog.edit',$blog->id)}}">
                                                   <button type="edit" class="bg-blue-500/13 hover:bg-white/10 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                       Edit
                                                   </button>
                                               </a>
                                           </td>
                                           <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                           <a href="{{route('admin.blog.show',$blog->id)}}">
                                               <button type="show" class="bg-orange-500/30 hover:bg-white/10 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                   View
                                               </button>
                                           </a>
                                           </td>
                                           <td>
                                               <form action ="{{route('admin.blog.destroy',$blog->id)}}" method="post" onSubmit="if(!confirm('Do you want o to delete the blog?')){return false;}"  >
                                                   @csrf
                                                   <input type="hidden" name="_method" value="delete">
                                                   <button class="bg-red-500/30 hover:bg-white/10 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                       Delete
                                                   </button>
                                               </form>
                                           </td>
                                       </tr>
                                   @endforeach
                                   </tbody>
                                </div>
                        </div>
                                </table>

                        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
                        <script type="text/javascript">
                        var status = '0';
                        $('.activestatus').on('change',function(){
                        $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });
                        var url = '{{route("admin.blog.active")}}';
                        if ($(this).is(':checked')) {
                        status = 1;
                        } else {
                        status = "0";
                        }
                        var blog_id=$(this).data('id');
                        $.ajax({
                        method:'POST',
                        url:url,
                        data:{
                        status:status,
                            blog_id:blog_id,
                        },
                        success:function (data){
                        if(data.success == true) {
                        alert(data.message);
                        location.reload();
                        } else {
                        alert(data.message);
                        }
                        }

                        })
                        });
                    </script>
                        <script>
                            function confirmAction() {
                                let confirmAction = confirm("Are you sure  you want to delete the blog");
                                if (confirmAction) {
                                    alert("blog successfully deleted");
                                } else {
                                    return false;
                                }
                            }
                        </script>
@endsection


