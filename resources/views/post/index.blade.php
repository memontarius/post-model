@extends('layouts.app')

@section('content')
    <table class="w-full">
        <thead>
        <tr>
            <th class="text-left">Заголовок</th>
            <th class="text-left">Содержимое</th>
            <th class="text-left w-m">Автор</th>
        </tr>
        </thead>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($post['content'], 50) }}</td>
                <td>{{ $post->user->name }}</td>
                <td>
                    <a href="{{ route('post.edit', $post )}}"
                       class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        Редактировать
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
