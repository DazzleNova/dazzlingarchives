@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About the Dazzling Archives</h1>

    <p>My name is {{ $page->owner->name }}, and this is a personal space to archive all of my small things. 
    The things that will be archive here are my original art, written work that wasn't posted on my main website, and "edits" that I made thoughout the years.</p>

    <h2>My links</h2>

    <ul>
        <li><a href="https://dazzlinggleam.space/" target="_blank">My Website</a></li>
        <li><a href="https://misskey.io/@dazzle" target="_blank">My Misskey account</a></li>
    </ul>
@endsection
