@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">ID</th>
                                        <th scope="col" class="text-center">Username</th>
                                        <th scope="col" class="text-center">Email</th>
                                        <th scope="col" class="text-center">Age</th>
                                        <th scope="col" class="text-center">Phone Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ Auth::user()->id }}</td>
                                        <td class="text-center">{{ Auth::user()->name }}</td>
                                        <td class="text-center">{{ Auth::user()->email }}</td>
                                        <td class="text-center">{{ Auth::user()->age }}</td>
                                        <td class="text-center">{{ Auth::user()->phone_number }}</td>
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
