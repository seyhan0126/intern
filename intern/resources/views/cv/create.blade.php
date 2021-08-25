@extends('layouts.app')

@section('content')
    <div class="row py-4 justify-content-center">
        <h1 class="text-center">Create CV</h1>
    <form class="justify-content-center" action={{ route('cv.store') }} method="post" class="p-3" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6 offset-md-3">
                <label for="inputName">First Name</label>
                <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control" id="inputName" placeholder="First Name">
            </div>
            <div class="form-group col-md-6 offset-md-3">
                <label for="inputMiddleName">Middle Name</label>
                <input type="text" name="middle_name" value="{{old('middle_name')}}" class="form-control" id="inputMiddleName" placeholder="Middle Name">
            </div>
            <div class="form-group col-md-6 offset-md-3">
                <label for="inputLastName">Last Name</label>
                <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control" id="inputLastName" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group col-md-6 offset-md-3">
            <label for="datepicker">Date of Birth</label>
            <input type="text" class="form-control" id="datepicker" name="date_of_birth" value="{{old('date_of_birth')}}" placeholder="example 1980-04-01">
        </div>
        <div class="form-group col-md-6 offset-md-3">
            <label for="inputUniversity">Your University</label>
            <input type="text" name="university_name" value="{{old('university_name')}}" class="form-control" id="inputUniversity" placeholder="University">
        </div>
        <div class="form-group col-md-6 offset-md-3">
            <label for="inputGrade">Your Grade at the University</label>
            <input type="text" name="grade" value="{{old('grade')}}" class="form-control" id="inputGrade" placeholder="Grade">
        </div>
        <div class="form-group col-md-6 offset-md-3">
            <label for="technologies">Technologies</label>
            <select name="technologies[]" id="technologies" class="form-control"  multiple="multiple">
                <option value="php">PHP</option>
                <option value="java">JAVA</option>
                <option value="spring_boot">Spring Boot</option>
                <option value="nodejs">Node.js</option>
                <option value="javascript">JavaScript</option>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="angular">Angular</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary my-3 col-md-6 offset-md-3">Save CV</button>
    </form>
    </div>
@endsection
