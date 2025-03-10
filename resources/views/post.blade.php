<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post - {{$post->id}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center lg:justify-center min-h-screen flex-col">
        
        <nav class="bg-white border-gray-200 bg-white dark:bg-[#161615] w-full" >
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('homepage')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('storage/skinmc-avatar.png')}}" class="h-8" alt="Forum logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Dino-Forums</span>
            </a>
            @error('auth')
                <span class="self-center text-lg font-black  whitespace-nowrap dark:text-red-900">{{$message}}</span>
            @enderror
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10       justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2     focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default"        aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1        7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
              <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('posts.index') }}" class="flex gap-1 px-2 py-3 text-center bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-white rounded-xl hover:bg-[#F61500] dark:hover:bg-[#f6150071]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="26" class="text-center align-middle border-r mr-1 pr-1" fill="currentColor"><path d="M11,0 C12.6568542,0 14,1.34314575 14,3 L14,6 L17,6 C18.6568542,6 20,7.34314575 20,9 L20,17 C20,18.6568542 18.6568542,20 17,20 L9,20 C7.34314575,20 6,18.6568542 6,17 L6,14 L3,14 C1.34314575,14 0,12.6568542 0,11 L0,3 C0,1.34314575 1.34314575,0 3,0 L11,0 Z M17,8 L9,8 C8.48716416,8 8.06449284,8.38604019 8.00672773,8.88337887 L8,9 L8,17 C8,17.5128358 8.38604019,17.9355072 8.88337887,17.9932723 L9,18 L17,18 C17.5128358,18 17.9355072,17.6139598 17.9932723,17.1166211 L18,17 L18,9 C18,8.48716416 17.6139598,8.06449284 17.1166211,8.00672773 L17,8 Z M10,15 C10.5522847,15 11,15.4477153 11,16 C11,16.5522847 10.5522847,17 10,17 C9.44771525,17 9,16.5522847 9,16 C9,15.4477153 9.44771525,15 10,15 Z M16,15 C16.5522847,15 17,15.4477153 17,16 C17,16.5522847 16.5522847,17 16,17 C15.4477153,17 15,16.5522847 15,16 C15,15.4477153 15.4477153,15 16,15 Z M13,12 C13.5522847,12 14,12.4477153 14,13 C14,13.5522847 13.5522847,14 13,14 C12.4477153,14 12,13.5522847 12,13 C12,12.4477153 12.4477153,12 13,12 Z M11.1166211,2.00672773 L11,2 L3,2 C2.48716416,2 2.06449284,2.38604019 2.00672773,2.88337887 L2,3 L2,11 C2,11.5128358 2.38604019,11.9355072 2.88337887,11.9932723 L3,12 L6,12 L6,9 C6,7.34314575 7.34314575,6 9,6 L12,6 L12,3 C12,2.48716416 11.6139598,2.06449284 11.1166211,2.00672773 Z M10,9 C10.5522847,9 11,9.44771525 11,10 C11,10.5522847 10.5522847,11 10,11 C9.44771525,11 9,10.5522847 9,10 C9,9.44771525 9.44771525,9 10,9 Z M16,9 C16.5522847,9 17,9.44771525 17,10 C17,10.5522847 16.5522847,11 16,11 C15.4477153,11 15,10.5522847 15,10 C15,9.44771525 15.4477153,9 16,9 Z M4.51268827,8.9930011 C5.06497302,8.9930011 5.51268827,9.44071635 5.51268827,9.9930011 C5.51268827,10.5452858 5.06497302,10.9930011 4.51268827,10.9930011 C3.96040353,10.9930011 3.51268827,10.5452858 3.51268827,9.9930011 C3.51268827,9.44071635 3.96040353,8.9930011 4.51268827,8.9930011 Z M4.51268827,5.9930011 C5.06497302,5.9930011 5.51268827,6.44071635 5.51268827,6.9930011 C5.51268827,7.54528585 5.06497302,7.9930011 4.51268827,7.9930011 C3.96040353,7.9930011 3.51268827,7.54528585 3.51268827,6.9930011 C3.51268827,6.44071635 3.96040353,5.9930011 4.51268827,5.9930011 Z M4.51268827,2.9930011 C5.06497302,2.9930011 5.51268827,3.44071635 5.51268827,3.9930011 C5.51268827,4.54528585 5.06497302,4.9930011 4.51268827,4.9930011 C3.96040353,4.9930011 3.51268827,4.54528585 3.51268827,3.9930011 C3.51268827,3.44071635 3.96040353,2.9930011 4.51268827,2.9930011 Z M9.51268827,2.9930011 C10.064973,2.9930011 10.5126883,3.44071635 10.5126883,3.9930011 C10.5126883,4.54528585 10.064973,4.9930011 9.51268827,4.9930011 C8.96040353,4.9930011 8.51268827,4.54528585 8.51268827,3.9930011 C8.51268827,3.44071635 8.96040353,2.9930011 9.51268827,2.9930011 Z"></path></svg>
                        Random Post
                    </a>
                </li>
                <li>
                    <a href="{{route('homepage')}}" class="flex gap-1 align-middle px-2 py-3 text-center bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-white rounded-xl hover:bg-[#F61500] dark:hover:bg-[#f6150071]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -2 24 24" width="26" class="text-center align-middle border-r mr-1 pr-1" fill="currentColor"><path d="M3.534 10.07a1 1 0 1 1 .733 1.86A3.579 3.579 0 0 0 2 15.26V17a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.647a3.658 3.658 0 0 0-2.356-3.419 1 1 0 1 1 .712-1.868A5.658 5.658 0 0 1 14 15.353V17a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3v-1.74a5.579 5.579 0 0 1 3.534-5.19zM7 0a4 4 0 0 1 4 4v2a4 4 0 1 1-8 0V4a4 4 0 0 1 4-4zm0 2a2 2 0 0 0-2 2v2a2 2 0 1 0 4 0V4a2 2 0 0 0-2-2z"></path></svg>
                        My Profile
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0 h-full">
            <main class="flex gap-10 justify-between w-full px-20 py-10 flex-col lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none ">
                    <div class="flex flex-row justify-between">
                        <h1 class="flex text-xl font-bold">{{$post->user->name}} <p class="font-mono ml-2 text-lg text-gray-700 dark:text-gray-400">({{$post->user->email}})</p></h1>
                        <h1 class="text-xl font-bold">{{$post->created_at}}</h1>
                    </div>
                    <hr class="my-4">
                    <div class="flex flex-col gap-5 justify-start mb-10">
                        @if ($post->trashed())
                            <h1 class="flex font-bold text-2xl">This post has been deleted by the OP</h1>
                            <h1 class="flex font-light text-lg text-gray-700 dark:text-gray-400">Only comments will be visible...</h1>
                        @else
                            <h1 class="flex font-bold text-2xl">{{$post->title}}</h1>
                            <h1 class="flex font-light text-lg text-gray-700 dark:text-gray-400">{{$post->content}}</h1>
                        @endif
                    </div>
                    <div class="w-full flex items-center justify-center">
                        <button data-modal-target="create-comment-modal" data-modal-toggle="create-comment-modal" class="flex gap-1 px-5 py-3 text-center text-white bg-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:bg-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2.5 24 24" width="26" class="text-center align-middle border-r mr-1 pr-1" fill="currentColor"><path d="M3.656 17.979A1 1 0 0 1 2 17.243V15a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H8.003l-4.347 2.979zm.844-3.093a.536.536 0 0 0 .26-.069l2.355-1.638A1 1 0 0 1 7.686 13H12a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v5c0 .54.429.982 1 1 .41.016.707.083.844.226.128.134.135.36.156.79.003.063.003.177 0 .37a.5.5 0 0 0 .5.5z"></path><path d="M16 10.017a7.136 7.136 0 0 0 0 .369v-.37c.02-.43.028-.656.156-.79.137-.143.434-.21.844-.226.571-.018 1-.46 1-1V3a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5V2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2v2.243a1 1 0 0 1-1.656.736L16 13.743v-3.726z"></path></svg>
                            Comment
                        </button>

                        @if($post->user->is(Auth::user()))
                            <a href="{{route('posts.edit', $post)}}" class="ml-4 flex gap-1 px-5 py-3 text-center text-white bg-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:bg-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="26" class="text-center align-middle border-r mr-1 pr-1" fill="currentColor"><path d="M5.72 14.456l1.761-.508 10.603-10.73a.456.456 0 0 0-.003-.64l-.635-.642a.443.443 0 0 0-.632-.003L6.239 12.635l-.52 1.82zM18.703.664l.635.643c.876.887.884 2.318.016 3.196L8.428 15.561l-3.764 1.084a.901.901 0 0 1-1.11-.623.915.915 0 0 1-.002-.506l1.095-3.84L15.544.647a2.215 2.215 0 0 1 3.159.016zM7.184 1.817c.496 0 .898.407.898.909a.903.903 0 0 1-.898.909H3.592c-.992 0-1.796.814-1.796 1.817v10.906c0 1.004.804 1.818 1.796 1.818h10.776c.992 0 1.797-.814 1.797-1.818v-3.635c0-.502.402-.909.898-.909s.898.407.898.91v3.634c0 2.008-1.609 3.636-3.593 3.636H3.592C1.608 19.994 0 18.366 0 16.358V5.452c0-2.007 1.608-3.635 3.592-3.635h3.592z"></path></svg>
                                Edit
                            </a>

                            @if($post->trashed())
                                <form action="{{ route('posts.restore', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="ml-4 flex gap-1 px-5 py-3 text-center text-white bg-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:bg-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]"
                                        onclick="return confirm('Are you sure you want to restore this post?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -2 24 24" width="26" class="text-center align-middle border-r mr-1 pr-1" fill="currentColor"><path d="M5.308 7.612l1.352-.923a.981.981 0 0 1 1.372.27 1.008 1.008 0 0 1-.266 1.388l-3.277 2.237a.981.981 0 0 1-1.372-.27L.907 6.998a1.007 1.007 0 0 1 .266-1.389.981.981 0 0 1 1.372.27l.839 1.259C4.6 3.01 8.38 0 12.855 0c5.458 0 9.882 4.477 9.882 10s-4.424 10-9.882 10a.994.994 0 0 1-.988-1c0-.552.443-1 .988-1 4.366 0 7.906-3.582 7.906-8s-3.54-8-7.906-8C9.311 2 6.312 4.36 5.308 7.612z"></path></svg>
                                        Restore
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-4 flex gap-1 px-5 py-3 text-center text-white bg-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:bg-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]"
                                        onclick="return confirm('Are you sure you want to delete this post?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-3 -2 24 24" width="26" class="text-center align-middle border-r mr-1 pr-1" fill="currentColor">
                                            <path d="M6 2V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h4a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-.133l-.68 10.2a3 3 0 0 1-2.993 2.8H5.826a3 3 0 0 1-2.993-2.796L2.137 7H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h4zm10 2H2v1h14V4zM4.141 7l.687 10.068a1 1 0 0 0 .998.932h6.368a1 1 0 0 0 .998-.934L13.862 7h-9.72zM7 8a1 1 0 0 1 1 1v7a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v7a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            @endif
                        @endif
                    </div>
                    <div class="w-full flex flex-col items-start justify-start mt-10 border-t border-gray-400 pt-10">
                        <h1 class="flex font-bold text-2xl">Comments</h1>

                        @if(count($post->comment) == 0)
                            <h1 class="flex font-light text-lg text-gray-700 dark:text-gray-400">This post has no comments yet...</h1>
                        @else
                            <ul class="mt-4 grid grid-cols-2 gap-4">
                                @foreach ($post->comment as $c)
                                    <li class="border-b pb-1.5 border-gray-700 opacity-40 hover:opacity-100 transition-opacity">
                                        @if ($c->trashed())
                                            This comment has been removed by its author...
                                        @else
                                            {{$c->content}}
                                        @endif
                                        <div class="flex justify-between mt-2">
                                            <p>
                                                {{$c->user->name}}
                                            </p>

                                            @if($c->user->is(Auth::user()))
                                                @if($c->trashed())
                                                    <form action="{{ route('comments.restore', $c) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="px-1 py-1 text-center text-white border-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:border-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]"
                                                            onclick="return confirm('Are you sure you want to restore this comment?');">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -2 24 24" width="20" class="text-center align-middle" fill="currentColor"><path d="M5.308 7.612l1.352-.923a.981.981 0 0 1 1.372.27 1.008 1.008 0 0 1-.266 1.388l-3.277 2.237a.981.981 0 0 1-1.372-.27L.907 6.998a1.007 1.007 0 0 1 .266-1.389.981.981 0 0 1 1.372.27l.839 1.259C4.6 3.01 8.38 0 12.855 0c5.458 0 9.882 4.477 9.882 10s-4.424 10-9.882 10a.994.994 0 0 1-.988-1c0-.552.443-1 .988-1 4.366 0 7.906-3.582 7.906-8s-3.54-8-7.906-8C9.311 2 6.312 4.36 5.308 7.612z"></path></svg>
                                                        </button>
                                                    </form>
                                                @else
                                                    <button data-modal-target="edit-comment-modal-{{$c->id}}" data-modal-toggle="edit-comment-modal-{{$c->id}}" class="px-1 text-center text-white border-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:border-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="16" class="text-center align-middle" fill="currentColor"><path d="M5.72 14.456l1.761-.508 10.603-10.73a.456.456 0 0 0-.003-.64l-.635-.642a.443.443 0 0 0-.632-.003L6.239 12.635l-.52 1.82zM18.703.664l.635.643c.876.887.884 2.318.016 3.196L8.428 15.561l-3.764 1.084a.901.901 0 0 1-1.11-.623.915.915 0 0 1-.002-.506l1.095-3.84L15.544.647a2.215 2.215 0 0 1 3.159.016zM7.184 1.817c.496 0 .898.407.898.909a.903.903 0 0 1-.898.909H3.592c-.992 0-1.796.814-1.796 1.817v10.906c0 1.004.804 1.818 1.796 1.818h10.776c.992 0 1.797-.814 1.797-1.818v-3.635c0-.502.402-.909.898-.909s.898.407.898.91v3.634c0 2.008-1.609 3.636-3.593 3.636H3.592C1.608 19.994 0 18.366 0 16.358V5.452c0-2.007 1.608-3.635 3.592-3.635h3.592z"></path></svg>
                                                    </button>
                                                    <form action="{{ route('comments.destroy', $c) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="px-1 py-1 text-center text-white border-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:border-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]"
                                                            onclick="return confirm('Are you sure you want to delete this comment?');">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-3 -2 24 24" width="20" class="text-center align-middle" fill="currentColor">
                                                                <path d="M6 2V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h4a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-.133l-.68 10.2a3 3 0 0 1-2.993 2.8H5.826a3 3 0 0 1-2.993-2.796L2.137 7H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h4zm10 2H2v1h14V4zM4.141 7l.687 10.068a1 1 0 0 0 .998.932h6.368a1 1 0 0 0 .998-.934L13.862 7h-9.72zM7 8a1 1 0 0 1 1 1v7a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v7a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"></path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @endif
                                            @endif
                                            
                                            <p>
                                                {{$c->created_at}}
                                            </p>
                                        </div>
                                    </li>

                                    <!-- Edit Comment Modal -->
                                    <div id="edit-comment-modal-{{$c->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#161615]">
                                                <!-- Modal header -->
                                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                        Edit Comment
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="edit-comment-modal-{{$c->id}}">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form action="{{route('comments.store')}}" method="POST" class="p-4 md:p-5">
                                                    @csrf
                                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                                        <div class="col-span-2 sm:col-span-1 hidden">
                                                            <label for="post_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post</label>
                                                            <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                                                            <textarea id="content" name="content" rows="4" class="@error('content') dark:border-red-600 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#f52f03b0] focus:border-[#f52f03b0] dark:bg-[#1b1b18] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#f52f03b0] dark:focus:border-[#f52f03b0]" placeholder="Write product description here">{{old('content') != null ? old('content') : $c->content}}</textarea>
                                                            @error('content')
                                                                <p class="text-[#F61500] text-xs font-extralight mt-1">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="flex gap-1 px-5 py-3 text-center text-white bg-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:bg-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]">
                                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                                        Publish
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </main>
        </div>

    <!-- Create Comment Modal -->
    <div id="create-comment-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#161615]">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Comment
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="create-comment-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{route('comments.store')}}" method="POST" class="p-4 md:p-5">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2 sm:col-span-1 hidden">
                            <label for="post_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post</label>
                            <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                            <textarea id="content" name="content" rows="4" class="@error('content') dark:border-red-600 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#f52f03b0] focus:border-[#f52f03b0] dark:bg-[#1b1b18] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#f52f03b0] dark:focus:border-[#f52f03b0]" placeholder="Write product description here">{{old('content')}}</textarea>
                            @error('content')
                                <p class="text-[#F61500] text-xs font-extralight mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="flex gap-1 px-5 py-3 text-center text-white bg-[#f52f037c] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto dark:bg-[#f6150056] dark:hover:bg-[#f52f03b0] dark:focus:ring-[#F61500]">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Publish
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>