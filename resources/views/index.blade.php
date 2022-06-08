@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="list-group">
            @foreach($conferences as $conference)
                <div class="list-group-item list-group-item-action flex-column align-items-start active mb-2">
                    <div class="d-flex align-items-center w-100">
                        <a href="{{ '/conference?id='.$conference->id }}" class="d-flex align-items-center w-100 text-white">
                            <h5 class="mb-1 mr-3">{{ $conference->title }}</h5>
                            <small>{{ $conference->date }}</small>
                        </a>
                        <a href="{{ '/edit?id='.$conference->id }}" class="btn btn-secondary ml-auto">Edit</a>
                        <button type="button" data-conference="{{ $conference->id }}" class="delete-btn btn btn-danger ml-2">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
