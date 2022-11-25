@extends('layouts.app')

@section('content')

@if (session()->has('message'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">alert!</strong>
        <span class="block sm:inline">{{ session()->get('message') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
@endif

{{-- {{ $posts }} --}}


    <div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">All Posts</h1>
    </div>

    @if (Auth::check())
        <div class="sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/create">add new blog</a>
        </div>
    @endif

    @foreach ($posts as $po)
        <div class="sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <div class="">
                <img class=" h-22" src='images/{{$po->img_path}}' alt="">
            </div>

            <div>
                <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{ $po -> title }}</h2>
                <span class="text-gray-500 italic">
                BY: <span>{{ $po -> user -> name }}</span>
                ON: <span>{{  date('d-m-y', strtotime($po -> updated_at)) }}</span>
                <p class="text-l text-gray-700 py-8 leading-6">
                    {{ $po -> discription }}
                </p>
                <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/{{ $po -> slug }}">read more</a>
                </span>
            </div>
        </div>
    @endforeach



@endsection
