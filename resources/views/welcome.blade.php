@extends('layouts.app')

@section('content')

    @includeIf('abouts.overview')

    @includeIf('services.overview')

    @includeIf('projects.overview')

    @includeIf('teams.overview')

    @includeIf('posts.overview')


@endsection
