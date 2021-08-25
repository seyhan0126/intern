@extends('layouts.app')

@section('content')

    <table class="table p-0">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First name</th>
            <th scope="col">Middle name</th>
            <th scope="col">Last name</th>
            <th scope="col">Date of birth</th>
            <th scope="col">University name</th>
            <th scope="col">Grade</th>
            <th scope="col">Technologies</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cv as $cv)
        <tr>
            <th scope="row">{{$cv->id}}</th>
            <td>{{$cv->first_name}}</td>
            <td>{{$cv->middle_name}}</td>
            <td>{{$cv->last_name}}</td>
            <td>{{$cv->date_of_birth}}</td>
            <td>{{$cv->university_name}}</td>
            <td>{{$cv->grade}}</td>
            <td>{{$cv->technologies}}</td>
            <td class="mx-0">
                <a class="btn btn-success m-1 p-1 mx-0" href="{{route('cv.show',$cv->id)}}" role="button">show CV</a>
            </td>
            <td class="mx-0">
                <a class="btn btn-warning m-1 p-1 mx-0" href="{{route('cv.edit',$cv->id)}}" role="button">edit</a>
            </td>
            <td class="mx-0">
                <form class="" action="{{route('cv.delete', $cv->id)}}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger p-1 m-1 mx-0" type="submit">remove</button>
                </form>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
