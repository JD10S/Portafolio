{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', $title ?? 'Jeffer Doria - Fullstack Developer')

@section('content')
    @include('partials.header')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.projects')
    @include('partials.experience')
    @include('partials.contact')
    @include('partials.footer')
@endsection