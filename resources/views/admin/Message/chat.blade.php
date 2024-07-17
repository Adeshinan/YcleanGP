@extends('layouts.admin')
<base href="{{asset('Admin')}}">
@section('contenu')
<script src="/livewire/livewire.js"></script>
    
@livewire('chat-component',['user_id' => $id])



@endsection