<h1>Register</h1>
<form action="{{ route('register') }}" method="post">
 
    @csrf
 
    <input type="text" name="name" value="{{ old('name') }}">
 
    <input type="email" name="email" value="{{ old('email') }}">
 
    <input type="password" name="password" value="">
 
    <input type="password" name="password_confirmation" value="">
 
    <button>Register</button>
 
</form>