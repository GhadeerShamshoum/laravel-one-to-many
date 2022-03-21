@extends('layouts.admin')

@section('content')
<h1 class="text-center">title:{{$post->title}}</h1>
<h5 class="mt-3 mb-3">content:{{$post->content}}</h5>
<h5 class="mt-3 mb-3">Slug:{{$post->slug}}</h5>
@if($post->image)
    <img src="{{ asset("storage/{$post->image}")}}" alt="{{$post->title}}">
@endif


<a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-primary">back</button></a>
    

 
@endsection