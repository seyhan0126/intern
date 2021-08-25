@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="row">
                <p class="p-2">
                   First name: {{$cv->first_name}}
                </p>
            </div>
            <div class="row">
                <p class="p-2">
                    Middle name:  {{$cv->middle_name}}
                </p>
            </div>
            <div class="row">
                <p class="p-2">
                    Last name:   {{$cv->last_name}}
                </p>
            </div>
            <div class="row">
                <p class="p-2">
                    Date of Birth:  {{$cv->date_of_birth}}
                </p>
            </div>
            <div class="row">
                <p class="p-2">
                    University:  {{$cv->university_name}}
                </p>
            </div>
            <div class="row">
                <p class="p-2">
                   Grade: {{$cv->grade}}
                </p>
            </div>
            <div class="row">
                <p class="p-2">
                  Technologies:  {{$cv->technologies}}
                </p>
            </div>
        </div>
    </div>
@endsection
