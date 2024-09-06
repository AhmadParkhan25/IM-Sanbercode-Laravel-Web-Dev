@extends('layout.master')

@section('judul')
    Halaman Edit Kategori
@endsection

@section('content')
<form action="/category/{{$category->id}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
      <label>Nama Kategory</label>
      <input type="text" class="form-control" name="name" value="{{$category->name}}">
    </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection