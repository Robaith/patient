@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group row">
                    <label for="age" class="col-md-4 col-form-label">Age</label>


                    <input id="age"
                           type="text"
                           class="form-control @error('age') is-invalid @enderror"
                           name="age"
                           value="{{ old('age') ?? $user->profile->age }}"
                           required autocomplete="age" autofocus>

                    @error('age')
                    <span class="invalid-feedback" role="alert">age
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="gender" class="col-md-4 col-form-label">Gender</label>


                    <input id="gender"
                           type="text"
                           class="form-control @error('gender') is-invalid @enderror"
                           name="gender"
                           value="{{ old('gender') ?? $user->profile->gender }}"
                           required autocomplete="gender" autofocus>

                    @error('gender')
                    <span class="invalid-feedback" role="alert">gender
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="blood" class="col-md-4 col-form-label">Blood</label>


                    <input id="blood"
                           type="text"
                           class="form-control @error('blood') is-invalid @enderror"
                           name="blood"
                           value="{{ old('blood') ?? $user->profile->blood }}"
                           required autocomplete="blood" autofocus>

                    @error('blood')
                    <span class="invalid-feedback" role="alert">blood
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="weight" class="col-md-4 col-form-label">Weight</label>


                    <input id="weight"
                           type="text"
                           class="form-control @error('weight') is-invalid @enderror"
                           name="weight"
                           value="{{ old('weight') ?? $user->profile->weight }}"
                           required autocomplete="weight" autofocus>

                    @error('weight')
                    <span class="invalid-feedback" role="alert">weight
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="occupation" class="col-md-4 col-form-label">Occupation</label>


                    <input id="occupation"
                           type="text"
                           class="form-control @error('occupation') is-invalid @enderror"
                           name="occupation"
                           value="{{ old('occupation') ?? $user->profile->occupation }}"
                           required autocomplete="occupation" autofocus>

                    @error('occupation')
                    <span class="invalid-feedback" role="alert">occupation
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="major_diseases" class="col-md-4 col-form-label">Major Diseases</label>


                    <input id="major_diseases"
                           type="text"
                           class="form-control @error('major_diseases') is-invalid @enderror"
                           name="major_diseases"
                           value="{{ old('major_diseases') ?? $user->profile->major_diseases }}"
                           required autocomplete="major_diseases" autofocus>

                    @error('major_diseases')
                    <span class="invalid-feedback" role="alert">major_diseases
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="alergy" class="col-md-4 col-form-label">Alergy</label>


                    <input id="alergy"
                           type="text"
                           class="form-control @error('alergy') is-invalid @enderror"
                           name="alergy"
                           value="{{ old('alergy') ?? $user->profile->alergy }}"
                           required autocomplete="alergy" autofocus>

                    @error('alergy')
                    <span class="invalid-feedback" role="alert">alergy
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="village" class="col-md-4 col-form-label">Village</label>


                    <input id="village"
                           type="text"
                           class="form-control @error('village') is-invalid @enderror"
                           name="village"
                           value="{{ old('village') ?? $user->profile->village }}"
                           required autocomplete="village" autofocus>

                    @error('village')
                    <span class="invalid-feedback" role="alert">village
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="upazilla" class="col-md-4 col-form-label">Upazilla</label>


                    <input id="upazilla"
                           type="text"
                           class="form-control @error('upazilla') is-invalid @enderror"
                           name="upazilla"
                           value="{{ old('upazilla') ?? $user->profile->upazilla }}"
                           required autocomplete="upazilla" autofocus>

                    @error('upazilla')
                    <span class="invalid-feedback" role="alert">upazilla
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="district" class="col-md-4 col-form-label">District</label>


                    <input id="district"
                           type="text"
                           class="form-control @error('district') is-invalid @enderror"
                           name="district"
                           value="{{ old('district') ?? $user->profile->district }}"
                           required autocomplete="district" autofocus>

                    @error('district')
                    <span class="invalid-feedback" role="alert">district
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>

    </form>

</div>
@endsection



















