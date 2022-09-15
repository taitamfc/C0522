@extends('admin.layouts.master')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" id="" value=" {{ old('name') }} ">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="">price</label>
    <input type="text" name="price" id="">
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="">description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <input type="submit" value="Them moi">
</form>
@endsection