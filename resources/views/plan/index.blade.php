@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('plan.create') }}" class="btn btn-info mb-3"><span class="fa fa-plus"></span> Add Plan</a>
        <table class="table" border="1">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Plan Name</th>
                    <th>Price</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plans as $plan)
                <tr>
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->name}}</td>
                    <td>{{$plan->price}}</td>
                    <td>
                        <a href="{{ route('plan.view', $plan->id) }}" class="btn btn-info"><span class="fa fa-eye"></span> View</a>
                        <a href="/plan/{{ $plan->id }}/edit" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a>
                        
                        <form action="{{ route('plan.delete', $plan->id) }}" enctype="multipart/form-data" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <input type="submit" name="" class="btn btn-danger" style="color: #fff" onclick="return confirm('Are you sure you want to delete this plan');" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
