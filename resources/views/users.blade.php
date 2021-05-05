<x-header title="Users"/>
@if($users)
<h3>Total Users: {{count($users)}}</h3>
@foreach($users as $user)
<p>{{$user}}</p>
@endforeach
@else
<p>Sorry no users</p>
@endif
<script>
    //the data can be loaded on scripts easily like this
    let data = @json($users);
    console.log(data);
    </script>
<x-footer/>
