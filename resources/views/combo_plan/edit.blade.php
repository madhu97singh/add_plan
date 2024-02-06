@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Combo Plan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('combo-plan.update',$comboPlan->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Combo Plan Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $comboPlan->name }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Combo Plan Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $comboPlan->price }}" autocomplete="price" autofocus>

                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="plan_ids[]" class="col-md-4 col-form-label text-md-right">{{ __('Select Plans:') }}</label>

                            <div class="col-md-6">
                                <select name="plan_ids[]" multiple required>
                                    @foreach($allPlans as $comboPlan)
                                        <option value="{{ $comboPlan->id }}" {{ in_array($comboPlan->id, explode(',', $comboPlan->plan_ids)) ? 'selected' : '' }}>
                                            {{ $comboPlan->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <p>You can select multiple plans</p>
                                @error('plan_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Combo Plan') }}
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
