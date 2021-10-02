@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            This page can only be seen by users who are signed in. Guests trying to go to this page are redirected to the login page.
            If you are able to see this, you signed in successfully!
        </div>

    </div>
@endsection