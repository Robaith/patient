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
                <a href="#">Add New File</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>5</strong> Prescriptions</div>
                <div class="pr-5"><strong>10</strong> Reports</div>
                <div class="pr-5"><strong>5</strong> Following</div>
            </div>
            <div class="pt-4"></div>
            <div class="d-flex flex-wrap">
                <div class="pr-5"><strong>Age :</strong>{{ $user->profile->age }}</div>
                <div class="pr-5"><strong>Gender :</strong>{{ $user->profile->gender }}</div>
                <div class="pr-5"><strong>Blood :</strong>{{ $user->profile->blood }}</div>
                <div class="pr-5"><strong>Weight :</strong>{{ $user->profile->weight }}</div>
                <div class="pr-5"><strong>Occupation :</strong>{{ $user->profile->occupation }}</div>
            </div>
            <div><strong>Major Diseases :</strong>{{ $user->profile->major_diseases }}</div>
            <div><strong>Alergy :</strong>{{ $user->profile->alergy }}</div>
            <div class="d-flex flex-wrap">
                <div class="pr-5"><strong>Village :</strong>{{ $user->profile->village }}</div>
                <div class="pr-5"><strong>Upazilla :</strong>{{ $user->profile->upazilla }}</div>
                <div class="pr-5"><strong>District :</strong>{{ $user->profile->district }}</div>

            </div>
        </div>
    </div>
    <div class="row pt-5" >
        <div class="col-4">
            <img src="frontEnd1.jpg" height="200" width = "200" class="w-100">
        </div>
        <div class="col-4">
            <img src="frontEnd2.png" height="200" width = "200" class="w-100">
        </div>
        <div class="col-4">
            <img src="frontEnd3.jpg" height="200" width = "200" class="w-100">
        </div>
    </div>
</div>
@endsection



















