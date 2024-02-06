@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('eligibility-criteria.create') }}" class="btn btn-info"><span class="fa fa-eye"></span>Add Eligibility Criteria</a>
        <table class="table" border="1">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Eligibility Criteria Name</th>
                    <th>Age Less Than</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eligibility_criterias as $eligibility_criteria)
                <tr>
                    <td>{{$eligibility_criteria->id}}</td>
                    <td>{{$eligibility_criteria->name}}</td>
                    <td>{{$eligibility_criteria->age_less_than}}</td>
                    <td>
                        <a href="{{ route('eligibility-criteria.view', $eligibility_criteria->id) }}" class="btn btn-info"><span class="fa fa-eye"></span> View</a>
                        <a href="/eligibility-criteria/{{ $eligibility_criteria->id }}/edit" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a>
                        
                        <form action="{{ route('eligibility-criteria.delete', $eligibility_criteria->id) }}" enctype="multipart/form-data" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <input type="submit" name="" class="btn btn-danger" style="color: #fff" onclick="return confirm('Are you sure you want to delete this Eligibility Criteria');" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
