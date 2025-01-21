@if (Auth::check())
<script>
    alert(`Selamat Datang ${Auth::user()->name}`);
</script>
@endif
