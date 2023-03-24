@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')


<div class="customer">
    <div class="lg:grid gap-4 space-y-6 md:space-y-0 mx-4">
    @unless(count($listings) == 0)


    @foreach($listings as $listing)
    <x-listing-card :listing='$listing'/>
    @endforeach

    @else
    <p>No listings found</p>

    @endunless
    </div>
</div>

@endsection
