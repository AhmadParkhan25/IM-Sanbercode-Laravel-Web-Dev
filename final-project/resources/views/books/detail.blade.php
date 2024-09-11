@extends('layout.main')

@section('judul')
    Ini halaman detail
@endsection

@section('content')

<img src="{{asset('uploads/'. $books->image)}}" width="100%" height="200px" class="img-fluid" alt="">
<h1 class="text-primary">{{$books->title}}</h1>
<p>{{$books->summary}}</p>
<p>Stock: {{$books->stock}}</p>

<hr>

<h4 class="text-info">Peminjaman</h4>

@forelse ($books->listBarrows as $item)
<div class="card mt-5">
    <div class="card-header">
      {{$item->createdBy->name}}
    </div>
    <div class="card-body">
      <p class="card-text">{{$item->tanggal_peminjaman}}</p>
      <p class="card-text">{{$item->tanggal_pengembalian}}</p>
    </div>
  </div>
@empty
    <h4>Tidak ada Peminjaman</h4>
@endforelse

<hr>

@auth
<form action="/barrow/{{$books->id}}" method="post">
    @csrf
    <div class="form-group">
        <input type="date" class="form-control" name="tanggal_peminjaman">
        <input type="date" class="form-control" name="tanggal_pengembalian">
    </div>

    <input type="submit" value="kirim" class="btn btn-primary btn-sm btn-block">

</form>

    
@endauth


<a href="/books" class="btn btn-secondary btn-sm">Kembali</a>
@endsection