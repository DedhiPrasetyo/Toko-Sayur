@if (Auth::check())

    <h1>{{ Auth::user()->email }} Anda Berhasil Login</h1>
    
@endif
<h1>Bagian dashboard</h1>

<a href="{{ route('logout.perform') }}" class="text-red-500 hover:text-red-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout.perform') }}" method="POST" class="hidden">
    @csrf
</form>
