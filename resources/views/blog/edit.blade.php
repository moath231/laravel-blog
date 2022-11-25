@extends('layouts.app')

@section('content')

    <div class="container m-auto text-center pt-15 pb-5">
        <h1 class="font-bold text-6xl">edit the blog</h1>
    </div>

    <div class="container m-auto pt-15 pb-5">
        <form
        action="/blog/{{ $post -> slug}}"
        method="POST"
        enctype="multipart/form-data"
        >
        @csrf
        @method('PUT')
            <input
            type="text"
            name="title"
            placeholder="title"
            class="w-full h-20 text-4xl rounded-lg shadow-lg border-b p-15 mb-5"
            value="{{ $post -> title}}"
            >

            <textarea
            name="discrption"
            placeholder="title"
            class="w-full h-60 text-l rounded-lg shadow-lg border-b py-10 px-10 mb-5"
            contenteditable="false"
            >
            {{ $post -> discription}}
            </textarea>

            <input
            class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            id="multiple_files"
            type="file"
            name="imag"
            multiple>

            <input
            class="bg-green-500 hover:bg-green-200 px-5 py-2 mt-3 rounded-lg shadow-lg"
            type="submit"
            value="submit">

        </form>
    </div>


@endsection
