@extends('layouts.app')

@section('content')

@if (session()->has('message'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">alert!</strong>
        <span class="block sm:inline">{{ session()->get('message') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
@endif


    <div class="container m-auto text-center pt-15 pb-5">
        <h3 class="text-2xl font-bold">{{ $post -> title }}</h3>
    </div>
    <div class="text-center text-sm">
        BY: <span>{{ $post -> user -> name }}</span>
        : <span>{{  date('d-m-y', strtotime($post -> updated_at)) }}</span>
    </div>

    <div class="mx-auto py-15 px-5">
        <div class="max-w-3xl m-auto sm:max-w-sm">
            <img class="m-auto max-w-3xl sm:max-w-sm" src='../images/{{$post->img_path}}' alt="">
        </div>
        <div class="container text-center m-auto mt-10 max-w-4xl leading-7">
            {{ $post -> discription }}
        </div>
        @if (Auth::user() && Auth::user()->id == $post->user_id)
        <div class="mx-auto mt-10 max-w-3xl">
            <a
                class="bg-green-400 text-gray-50 py-2 px-5 rounded-lg shadow-lg hover:shadow-none transition duration-500"
                href="{{ $post -> slug }}/edit">
                edit
            </a>
            <form
            action="/blog/{{ $post -> slug}}"
            method="post"
            class="inline-block ml-2"
            >
            @csrf
            @method('delete')
                <button
                class="bg-red-700 text-gray-50 py-2 px-5 rounded-lg shadow-lg hover:shadow-none transition duration-500 place-self-start"
                href="{{ $post -> slug }}/edit"
                value="delete">
                    delete
                </button>
            </form>
        </div>
        @endif
    </div>




@endsection
