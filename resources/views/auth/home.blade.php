<div>
    <h1>Welcome Home {{$user->name}}</h1>
</div>
<form action="{{ route('logout') }}" method="post">
 
    @csrf
 
    <button>Logout</button>
 
</form>