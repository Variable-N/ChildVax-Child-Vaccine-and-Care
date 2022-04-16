@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Appointment Add</div>

                <div class="card-body">
                    <form method="POST" action="{{ url("appointment") }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Child') }}</label>
                            <div class="col-md-6">
                                <select name="child_id" class="form-control">
                                    @foreach (Auth::user()->children()->get() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('child_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('child_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Doctor') }}</label>
                            <div class="col-md-6">
                                <select name="doctor_id" class="form-control">
                                    @foreach (App\Doctor::get() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('doctor_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('doctor_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Time') }}</label>
                            <div class="col-md-6">
                                <input type="datetime-local" name="time" value="{{ old('time') }}" required autofocus class="form-control" >
                                @if ($errors->has('time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
