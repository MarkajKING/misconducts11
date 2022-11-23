@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>CONFIDANTS</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Specialization</th>
                                    <th>Availability</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($confidants as $confidant)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $confidant->name }}</td>
                                            <td>{{ $confidant->age }}</td>
                                            <td>{{ $confidant->gender }}</td>
                                            <td>{{ $confidant->speciality}}</td>
                                            <td>{{ $confidant->about}}</td>
                                            <td><i class="glyphicon glyphicon-user" style="font-size:24px;color:green;"></i>
                                            </td>
                                            <td>
                                                <a href="" title="View Confidant">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                           aria-hidden="true"></i> Select
                                                    </button>
                                                </a>
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
