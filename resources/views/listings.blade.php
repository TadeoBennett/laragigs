<h1>{{ $heading }}</h1>

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


