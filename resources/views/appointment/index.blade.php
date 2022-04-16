@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Appointment List
                    <a href="/appointment/create" class="btn btn-sm btn-primary">ADD</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>PARENT</th>
                                <th>CHILD</th>
                                <th>DOCTOR</th>
                                <th>TIME</th>
                                <th>HOSPITAL</th>
                                <th>STATUS</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($data) &&  $data)
                            @foreach ($data as $item)
                            {{-- {{dd()}} --}}
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->child->name}}</td>
                                <td>{{$item->doctor->name}}</td>
                                <td>{{$item->time}}</td>
                                <td>{{$item->hospital->name}}</td>
                                @if (Auth::user()->level == 1)
                                <td><a href="/appointment/{{$item->id}}/edit">{{$item->status ? 'Confirmed' : 'Pending'}}</a></td>
                                @else
                                <td>{{$item->status ? 'Confirmed' : 'Pending'}}</td>
                                @endif
                                <td>
                                    <form id="logout-form" action="{{ url("appointment/{$item->id}") }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
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
