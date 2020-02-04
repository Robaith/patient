@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 ">
            <img src="resized.png" height="100" width = "100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->name }}</h1>

                @can ('update', $user->profile)
                    <a href="/p/create">Add New File</a>
                @endcan

            </div>

            @can ('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Prescriptions</div>
                <div class="pr-5"><strong>10</strong> Reports</div>
                <div class="pr-5"><strong>5</strong> Following</div>
            </div>
            <div class="pt-4"></div>
            <div class="d-flex flex-wrap">
                <div class="pr-5"><strong>Age : </strong>{{ $user->profile->age }}</div>
                <div class="pr-5"><strong>Gender : </strong>{{ $user->profile->gender }}</div>
                <div class="pr-5"><strong>Blood : </strong>{{ $user->profile->blood }}</div>
                <div class="pr-5"><strong>Weight : </strong>{{ $user->profile->weight }}</div>
                <div class="pr-5"><strong>Occupation : </strong>{{ $user->profile->occupation }}</div>
            </div>
            <div><strong>Major Diseases : </strong>{{ $user->profile->major_diseases }}</div>
            <div><strong>Alergy : </strong>{{ $user->profile->alergy }}</div>
            <div class="d-flex flex-wrap">
                <div class="pr-5"><strong>Village : </strong>{{ $user->profile->village }}</div>
                <div class="pr-5"><strong>Upazilla : </strong>{{ $user->profile->upazilla }}</div>
                <div class="pr-5"><strong>District : </strong>{{ $user->profile->district }}</div>

            </div>
        </div>
    </div>
    <div class="row pt-5" >
        @foreach($user->posts as $post)
        <div class="col-4 pb-5">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>


</div>
@endsection



















