@extends('layouts.app')

@php
    /* @var \App\Models\Post $post */
@endphp

@section('content')
    <form action="{{ route('post.update', $post) }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="post-title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Заголовок
            </label>
            <input name="title" id="post-title" type="text"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   value="{{ $post->title }}">
        </div>
        <div class="mb-4">
            <label for="post-content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Контент
            </label>
            <textarea name="content" id="post-content" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Напишите что-нибудь...">{{ $post->content }}</textarea>
        </div>
        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Сохранить
        </button>
    </form>
    <a href="{{route('post.index', $post)}}" class="mt-8 inline-block font-medium text-blue-600 dark:text-blue-500 hover:underline">
        К списку постов
    </a>
@endsection
