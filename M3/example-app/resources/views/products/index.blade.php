@extends('admin.layouts.master')
@section('content')
{{ $user_name }}

{{ $name ?? 'Default' }}
<?php
   echo isset($name) ? $name : 'Default';
?>
@if (Session::has('error'))
      <p class="text-danger">
         <i class="fa fa-check" aria-hidden="true"></i>
         {{ Session::get('error') }}
      </p>
@endif
@if (Session::has('success'))
      <p class="text-success">
         <i class="fa fa-check" aria-hidden="true"></i>
         {{ Session::get('success') }}
      </p>
@endif


    @foreach( $items as $item )
       {{ $item['username'] }}<br>
    @endforeach

@endsection


