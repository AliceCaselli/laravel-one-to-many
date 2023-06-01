@extends('layouts.admin')

@section('content')

    <div class="container py-3">

        <h1>Tutti i post di categoria {{$category->name}}</h1>

        @if (count($category-posts) > 0)
            
            <table class="table table-striped mb-5">
                <thead>
                    <th>
                        Titolo
                    </th>
                    <th>
                        Slug
                    </th>
                    <th>
                        Categoria
                    </th>
                    <th>

                    </th>
                </thead>
                <tbody>
                    @foreach ($category->posts as $post)
                        <tr>
                            <td>
                                {{$post->title}}
                            </td>
                            <td>
                                {{$post->slug}}
                            </td>
                            <td>
                                {{$post->category?->name}}
                            </td>
                            <td>
                                <a href="{{route('admin.posts.show', $post)}}">Apri</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
        <em>Nessun post di questa categoria</em>
        @endif

    </div>
@endsection