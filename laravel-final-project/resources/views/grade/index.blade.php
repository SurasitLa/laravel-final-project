@extends('grade\layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Student Grade</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/grade/create') }}" class="btn btn-success btn-sm" title="Add New Grade">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add Grade
                        </a>
                        <a href="{{ url('/student') }}" class="btn btn-success btn-sm" title="Student Details">
                            <i class="fa fa-plus" aria-hidden="true"></i> Student
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>English</th>
                                        <th>Math</th>
                                        <th>Thai</th>
                                        <th>Science</th>
                                        <th>Computer</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($grades as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->english }}</td>
                                        <td>{{ $item->math }}</td>
                                        <td>{{ $item->thai }}</td>
                                        <td>{{ $item->science }}</td>
                                        <td>{{ $item->computer }}</td>
                                        <td>
                                            <a href="{{ url('/grade/' . $item->id) }}" title="View Grade"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/grade/' . $item->id . '/edit') }}" title="Edit Grade"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/grade' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Grade" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection