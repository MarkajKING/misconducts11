@extends('layouts.app')
@section('content')
    <main>

        <!--MDB Tables-->
        <div class="container mt-4">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">

                            <form action="{{route('admin.search')}}" method="post">
                                @csrf
                                <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Search within
                                    Users</h2>
                                <div class="input-group md-form form-sm form-2 pl-0">
                                    <input class="form-control my-0 py-1 pl-3 purple-border" type="search"
                                           placeholder="Search for name or e-mail..." aria-label="Search" name="search">
                                    <span class="input-group-addon waves-effect purple lighten-2"
                                          id="basic-addon1"><a><i
                                                class="fa fa-search white-text" aria-hidden="true"></i></a></span>
                                </div>
                            </form>


                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-striped">
                        <!--Table head-->
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Confidant</th>
                        </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                        <!--loop through users and make button to give someone confidant rights-->
                        @foreach($users as $user)
                            @if($user != Auth::user())
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>

                                    <form action="{{ route('admin.confidantchecker', $user->id)}}" method="post"
                                          style="margin-left: 10px">
                                        @method('PATCH')
                                        @csrf
                                        @if($user->is_confidant)
                                            <td>
                                                <button class="btn btn-success" type="submit">Remove
                                                    Confidant Rights
                                                </button>
                                            </td>
                                        @else
                                            <td>
                                                <button class="btn btn-warning" type="submit">Add Confidant
                                                    Rights
                                                </button>
                                            </td>
                                        @endif
                                    </form>
                                </tr>
                            @endif

                        @endforeach


                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>

    </main>
@endsection
