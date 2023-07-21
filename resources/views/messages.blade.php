@extends('layouts.app')

@section('title-block')
    Messages
@endsection

@section('content')
    <h1>prochitannie dannie</h1>
    @foreach($data as $el)
    <div class="alert alert-info">
        <h3>{{ $el->name }}</h3>
        <p>{{ $el-> email }}</p>
        <p> <span>{{ $el-> created_at }}</span> </p>
        <a href="{{route('contact-data-one', $el->id) }}"> <button class="btn btn-warning">More</button></a>
    </div>
    @endforeach
@endsection
