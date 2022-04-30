@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Vaccine Add</div>

                <div class="card-body">
                    <form method="POST" action="{{ url("vaccine") }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="name" value="{{ old('name') }}" required autofocus class="form-control" >
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Administration day from birth') }}</label>
                            <div class="col-md-6">
                                <input type="number" name="administer_dat" value="{{ old('administer_dat') }}" required class="form-control" >
                                @if ($errors->has('administer_dat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('administer_dat') }}</strong>
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
