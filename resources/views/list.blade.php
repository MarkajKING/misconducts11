@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>CONFIDANTS</h2>
                    <div class="card-body">
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Specialization</th>
                                    <th>Availability</th>
                                </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="https://media-exp1.licdn.com/dms/image/D4E03AQFajLztb5d2tA/profile-displayphoto-shrink_800_800/0/1664554842119?e=1674086400&v=beta&t=tFuStHrnYHPY_ukQU2VuB-BI6aNix47HKOUksrE1AoE" width="150" height="150" title="Logo of a company" alt="Logo of a company" /></td>
                                            <td>Sasha Salmon</td>
                                            <td>20</td>
                                            <td>Bullying</td>
                                            <td><i class="glyphicon glyphicon-user" style="font-size:24px;color:red;"></i></td>
                                            <td>
                                                <a href="" title="View Artwork">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                           aria-hidden="true"></i> Select
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
