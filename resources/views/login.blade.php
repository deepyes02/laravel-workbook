<x-header title="login"/>

@if (isset($request))
    {{ var_dump($request) }}
@else
    <p>Submit the form below</p>
@endif
<h3>User Login</h3>

<form method="POST" action="login">
    @csrf
    <input type="text" name="username" placeholder="Enter User Name" /><br>
    <span style="color:red">@error('username'){{ $message }}@enderror</span><br>
        <input type="password" name="password" placeholder="Type your password" /><br>
        <span style="color:red;">@error('password'){{ $message }}@enderror</span><br>
        <input type="submit" value="submit" />
</form>
<x-footer />
