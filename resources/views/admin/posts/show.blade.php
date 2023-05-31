@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Visualizzazione post</h1>
        <h6>Categoria: {{$post->category?->name}}</h6>

        <hr class="mb-4">
        <div class="py-3">

            <h2>
                {{$post->title}}
                
                <pre class="fs-5">
                    ({{$post->slug}})
                </pre>
            </h2>
            
            <hr>
            
            <p>
                {{$post->content}}
            </p>
        </div>

        <div class="d-flex justify-content-around">
            <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary">Modifica il post</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Elimina
            </button>
        </div>
            
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare il post "{{$post->title}}"
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina il post</button>
                </form>
                </div>
            </div>
            </div>
        </div>

        
    </div>
@endsection