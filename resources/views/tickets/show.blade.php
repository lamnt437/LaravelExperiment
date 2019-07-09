@extends('master')
@section('title', 'View ticket by Id')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Ticket</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $ticket-> id }}</td>
                        <td>{{ $ticket-> title }}</td>
                        <td>{{ $ticket-> content }}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection