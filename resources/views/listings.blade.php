{{-- to say that it will be used in the layout --}}
@extends('layout'); 


{{-- wrapping this section and calling it 'content'.Its to be referenced in the layout.blade.php  --}}
@section('content') 

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

{{-- Reasearch blade directives --}}

{{-- @if (count($listings) == 0)
    <p>no listings found</p>
@endif --}}

@unless (count($listings) == 0)


    @forEach($listings as $listing)
        <h2><a href="/listing/{{$listing['id']}}">{{ $listing['title'] }}</a> </h2>
        <p>{{ $listing['description'] }}</p>
    @endforeach
    @else
    <p>no listings found</p>
@endunless



</div>


@endsection