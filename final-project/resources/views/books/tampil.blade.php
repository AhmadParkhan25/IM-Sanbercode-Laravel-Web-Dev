@extends('layout.main')

@section('judul')
    Halaman tampil buku
@endsection

@section('content')
    <a href="/books/create" class="btn btn-primary mb-5">Tambah buku</a>

    <div class="row">
        @forelse ($books as $item)
        <div class="col-4">
            <div class="card">
                <img src="{{asset('uploads/'. $item->image)}}" class="card-img-top" height="300px">
                <div class="card-body">
                  <h2>{{$item->title}}</h2>
                  <span class="badge badge-success">{{$item->category->name}}</span>
                  <p class="card-text">{{ Str::limit($item->summary, 100)}}</p>
                  <a href="/books/{{$item->id}}" class="btn btn-primary btn-block">Detail</a>
                  <div class="row mt-2">
                    <div class="col">
                        <a href="/books/{{$item->id}}/edit" class="btn btn-warning btn-block">Edit</a>
                    </div>
                    <div class="col">
                        <form action="/books/{{$item->id}}" method="POST">
                        @csrf
                        @method('Delete')
                        <input type="submit" value="Delete" class="btn btn-danger btn-block">
                        </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        @empty
            <h5>belum ada buku</h5>
        @endforelse


        
    </div>


@endsection