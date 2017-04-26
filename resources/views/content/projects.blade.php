@extends('main')

@section('content')
    <div>Projects </div>
    <table class="table">
        <thead>
        <tr>
            <th>Projects name</th>
            <th>Clients</th>
            <th>Staff</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
            <td>
            {{$project['name']}}
            </td>
                <td>
            {{$project['clients_data']['name']}}
                </td>
                <td>
            {{sizeof($project['projects_types_persons_connections'])}}
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection
@section('title', trans('app.projects'))