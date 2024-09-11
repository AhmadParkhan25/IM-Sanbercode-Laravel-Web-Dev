@extends('layout.main')

@section('judul')
    Halaman Edit Buku
@endsection

@section('content')
<form action="/books/{{$books->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('Put')
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" class="form-control" value="{{$books->title }}" name="title">
      </div>

      <div class="form-group">
        <label>Summary</label>
        <textarea name="summary" class="form-control" cols="30" rows="10">{{$books->summary}}</textarea>
      </div>

      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
      </div>

      <div class="form-group">
        <label>Stock</label>
        <input type="number" class="form-control" name="stock" value="{{$books->stock}}">
      </div>

      <div class="form-group">
        <label>Kategory</label>
        <select name="category_id" class="form-control">
            <option value="">--Pilih Kategory--</option>
                
            @forelse ($categories as $item)
            @if ($item->id == $books->category_id)
            <option value="{{$item->id}}" selected>{{$item->name}}</option>
            @else
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endif
            @empty
                <option value="">Belum Kategori</option>
            @endforelse
        </select>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection