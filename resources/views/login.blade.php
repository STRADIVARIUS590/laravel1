<h1>login<h1>

    <h1>
        @if(Auth::user())
            {{Auth::user()->name}}
        @endif
    </h1>
<form action="{{url('login')}}" method="POST">
    @csrf
    <input type="text" name="email">

    <input type="text" name="password">

    <input type="submit" name="" id="">
</form>