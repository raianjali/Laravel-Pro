@extends('layouts.app')

@section('content')
 @foreach ($messages as $message)
  <ul class="list-group p-2">
    <li class="list-group-item"><b>Name:</b> {{ $message->name }}</li>
    <li class="list-group-item"><b>Email:</b> {{ $message->email }}</li>
    <li class="list-group-item"><b>Subject:</b> {{ $message->subject }}</li>
    <li class="list-group-item"><b>Message:</b> {{ $message->message }}</li>
  </ul>
 @endforeach
@endsection
