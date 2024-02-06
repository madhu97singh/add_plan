@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Eligibility Criteria') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('eligibility-criteria.update',$eligibility_criteria->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Eligibility Criteria Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $eligibility_criteria->name }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age_less_than" class="col-md-4 col-form-label text-md-right">{{ __('Age Less Than') }}</label>

                            <div class="col-md-6">
                                <input id="age_less_than" type="text" class="form-control @error('age_less_than') is-invalid @enderror" name="age_less_than" value="{{ $eligibility_criteria->age_less_than }}" autocomplete="age_less_than" autofocus>

                                @error('age_less_than')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age_greater_than" class="col-md-4 col-form-label text-md-right">{{ __('Age Greater Than') }}</label>

                            <div class="col-md-6">
                                <input id="age_greater_than" type="text" class="form-control @error('age_greater_than') is-invalid @enderror" name="age_greater_than" value="{{ $eligibility_criteria->age_greater_than }}" autocomplete="age_greater_than" autofocus>

                                @error('age_greater_than')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_login_days_ago" class="col-md-4 col-form-label text-md-right">{{ __('Last Login Days Ago') }}</label>

                            <div class="col-md-6">
                                <input id="last_login_days_ago" type="text" class="form-control @error('last_login_days_ago') is-invalid @enderror" name="last_login_days_ago" value="{{ $eligibility_criteria->last_login_days_ago }}" autocomplete="last_login_days_ago" autofocus>

                                @error('last_login_days_ago')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="income_less_than" class="col-md-4 col-form-label text-md-right">{{ __('Income Less Than') }}</label>

                            <div class="col-md-6">
                                <input id="income_less_than" type="text" class="form-control @error('income_less_than') is-invalid @enderror" name="income_less_than" value="{{ $eligibility_criteria->income_less_than }}" autocomplete="income_less_than" autofocus>

                                @error('income_less_than')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="income_greater_than" class="col-md-4 col-form-label text-md-right">{{ __('Income Greater Than') }}</label>

                            <div class="col-md-6">
                                <input id="income_greater_than" type="text" class="form-control @error('income_greater_than') is-invalid @enderror" name="income_greater_than" value="{{ $eligibility_criteria->income_greater_than }}" autocomplete="income_greater_than" autofocus>

                                @error('income_greater_than')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Eligibility Criteria') }}
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
