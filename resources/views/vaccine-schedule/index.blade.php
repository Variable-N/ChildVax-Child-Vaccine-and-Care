@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Vaccine Schedule List</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>CHILD ID</th>
                                <th>CHILD NAME</th>
                                <th>VACCINE NAME</th>
                                <th>DUE DATE</th>
                                <th>VACCINE STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($data) &&  $data)
                            @foreach ($data as $child)
                            @foreach (App\Vaccine::all() as $vaccine)
                            <tr>
                                <td>{{$child->id}}</td>
                                <td>{{$child->name}}</td>
                                <td>{{$vaccine->name}}</td>
                                <td>{{$child->dob->addDays($vaccine->administer_day)->format("d/m/Y")}}</td>
                                @if (Auth::user()->level == 0)
                                <td>{{$child->hasGot($vaccine) ? 'Done' : 'Not Given'}}</td>
                                @else
                                <td>

                                    <form action="{{ url("vaccine-schedule") }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="vaccine_id" value="{{$vaccine->id}}" />
                                        <input type="hidden" name="child_id" value="{{$child->id}}" />
                                        <button type="submit" class="btn btn-info btn-sm btn-block">{{$child->hasGot($vaccine) ? 'Done' : 'Not Given'}}</button>
                                    </form>

                                    </td>
                                @endif
                            </tr>
                            @endforeach
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
