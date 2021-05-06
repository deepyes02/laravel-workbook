<x-header title="People"/>

@if(null !== $people)
<h2>Listing {{count($people)}} people from database</h2>
<ol>
@foreach($people as $person)
<li>Name: {{$person->name}}, Age: {{$person->age}}, Email: {{$person->email}}</li>
@endforeach
</ol>
@endif
<x-footer/>
