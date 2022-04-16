@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Doctor List
                    <a href="/doctor/create" class="btn btn-sm btn-primary">ADD</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>NAME</th>
                                <th>QUALIFICATION</th>
                                <th>PHONE</th>
                                <th>EMAIL</th>
                                <th>HOSPITAL</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($data) &&  $data)
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->qualification}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->hospital->name}}</td>
                                <td>
                                    <form id="logout-form" action="{{ url("doctor/{$item->id}") }}" method="POST">
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
