{{-- to say that it will be used in the layout --}}

{{-- do not add the semicolon --}}
@extends('layout')

{{-- wrapping this section and calling it 'content'.Its to be referenced in the layout.blade.php  --}}
@section('content')

    @include('partials._hero')
    @include('partials._search')


    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        {{-- Reasearch blade directives --}}

        {{-- @if (count($listings) == 0)
    <p>no listings found</p>
@endif --}}

        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                {{-- calls the component called listing-card and passes the listing variable gotten from web.php --}}
                <x-listing-card :listing="$listing"/>
            @endforeach
        @else
            <p>no listings found</p>
        @endunless

    </div>

@endsection
