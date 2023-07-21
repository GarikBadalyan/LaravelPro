@extends('layouts.app')

@section('title-block'){{ $data->subject }}@endsection

@section('content')
    <h1>{{ $data->name  }}</h1>

    <div class="alert alert-info">
        <h3>{{ $data->subject }}</h3>
        <p>{{ $data-> messages }}</p>
        <p>{{ $data-> email }}</p>
        <p> <span>{{ $data-> created_at }}</span> </p>
        <a href="{{route('contact-update', $data->id) }}"> <button class="btn btn-primary">Update</button></a>
    </div>

@endsection
