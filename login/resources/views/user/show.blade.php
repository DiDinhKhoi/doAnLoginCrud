@extends('dashboard')

@section('content')


<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header text-center">User Details</h3>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Sở Thích</th>
                                    <th>Avatar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{!!$user->sothich!!}</td>
                                    <td>
                                        <div class="avatar">
                                            <img src="{{ asset('/avatars/'. $user->avatar) }}" class="avatar-img" style=" width: 200px;
                                            height: 200px%;
                                            object-fit: cover;">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <button id="downloadCookie" class="btn btn-primary">Show</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



@endsection
