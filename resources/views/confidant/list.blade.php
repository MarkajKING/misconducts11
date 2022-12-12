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
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Specialization</th>
                                    <th>About</th>
                                    <th>Excerpt</th>
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
                                        <td>{{ $confidant->excerpt}}</td>
                                        <td><i class="glyphicon glyphicon-user" style="font-size:24px;color:green;"></i> <!-- inline css lookin ass -->
                                        </td>
                                        <td>
                                            <form class="" action="{{route('confidant.addConfidant')}}"
                                                  method="POST">
                                                @csrf
                                                <label for="{{$confidant->id}}" style="display: none"></label>
                                                @if(Auth::user()->confidant_id === $confidant->id)
                                                    <button
                                                        type="submit" id="{{$confidant->id}}"
                                                        name="gedoeRemove"
                                                        class="btn btn-danger btn-sm" value="{{$confidant->id}}">verwijder</button>
                                                @elseif(Auth::user()->confidant_id === null)
                                                    <button
                                                        type="submit" id="{{$confidant->id}}"
                                                        name="gedoeAdd"
                                                        class="btn btn-success btn-sm" value="{{$confidant->id}}">voeg toe</button>
                                                @endif

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
