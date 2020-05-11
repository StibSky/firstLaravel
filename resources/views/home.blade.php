@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at atque, aut consectetur consequatur distinctio dolore dolorem eius enim ex exercitationem expedita explicabo facilis incidunt ipsa ipsum itaque nobis perspiciatis placeat, porro praesentium quae quam repellat similique temporibus ut vitae, voluptatem. Beatae est harum, nemo non nostrum odit repellendus rerum?</p>
@endsection

@section('sidebar')
    @parent
    <p>this is appended to the sidebar</p>
@endsection
