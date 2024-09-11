@extends('layout.main')

@section('judul')
    Halaman Detail Kategori
@endsection

@section('content')
    <h1 class="text-primary">{{$category->name}}</h1>

    <h4>List Buku</h4>
    <div class="row">
    @forelse ($category->listBooks as $item)
    <div class="col-4">
        <div class="card">
            <img src="{{asset('uploads/'. $item->image)}}" class="card-img-top width:100%">
            <div class="card-body">
              <h2>{{$item->title}}</h2>
              <p class="card-text">{{ Str::limit($item->summary, 100)}}</p>
              <a href="/books/{{$item->id}}" class="btn btn-primary btn-block">Detail</a>
            </div>
          </div>
    </div>
    @empty
        <h5>Tidak ada buku di Kategori ini</h5>
    @endforelse
</div>
    <a href="/category" class="btn btn-secondary btn-sm">Kembali</a>
@endsection