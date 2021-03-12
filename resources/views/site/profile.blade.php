@php
   //dd($user);
@endphp
<form method="post" action="{{ route('logout') }}">
<button type="submit">Logout</button>
</form>
<a href="{{ route('logout') }}">Logout</a>