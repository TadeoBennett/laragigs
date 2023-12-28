{{-- to say that it will be used in the layout --}}
@extends('layout'); 


{{-- wrapping this section and calling it 'content'.Its to be referenced in the layout.blade.php  --}}
@section('content') 

<h2>{{ $listing['title'] }}</h2>
<p>{{ $listing['description'] }}</p>


@endsection


