 @extends('main')

 @section('content')
    <div>Total records: {{$totalCount}}</div>
    <div>Clients with project: </div>
    <ul>
     @foreach($clients as $client)
        <li>{{$client['name']}}</li>
        <ul>
           @foreach($client['projectsData'] as $project)
            <li>{{$project['name']}}</li>
            @endforeach
        </ul>
     @endforeach
    </ul>

 @endsection

 @section('title', trans('app.clients'))