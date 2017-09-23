@extends('layouts.app')
@section('content')
	<form action="{{route('articles.update',$article->id)}}" method="post">
		{{csrf_field()}}
		{{method_field('PATCH')}}
		<lable>Title</lable>
		<input type="text" name="title" style="width:100%;" value="{{ $article->title}}">
		<lable>Content</lable>
		<textarea name="content" rows="10" style="width:100%;">{{$article->content}} </textarea>
		<button type="submit">OK</button>
		</form>
		@endsection