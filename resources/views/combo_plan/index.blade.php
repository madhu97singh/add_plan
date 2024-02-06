
@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('combo-plan.create') }}" class="btn btn-info"><span class="fa fa-eye"></span>Add Combo Plan</a>
        <table class="table" border="1">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Combo Plan Name</th>
                    <th>Price</th>
                    <th>Plans Name</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comboPlans as $comboPlan)
                <tr>
                    <td>{{$comboPlan->id}}</td>
                    <td>{{$comboPlan->name}}</td>
                    <td>{{$comboPlan->price}}</td>
                    <td>@foreach(explode(',', $comboPlan->plan_ids) as $planId)
                        @php
                            $plan = App\Models\Plan::find($planId);
                        @endphp

                        @if ($plan)
                            {{ $plan->name }}
                        @else
                            
                        @endif
                    @endforeach</td>
                    <td>
                        <a href="{{ route('combo-plan.view', $comboPlan->id) }}" class="btn btn-info"><span class="fa fa-eye"></span> View</a>
                        <a href="/combo-plan/{{ $comboPlan->id }}/edit" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a>
                        
                        <form action="{{ route('combo-plan.delete', $comboPlan->id) }}" enctype="multipart/form-data" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <input type="submit" name="" class="btn btn-danger" style="color: #fff" onclick="return confirm('Are you sure you want to delete this combo plan');" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
