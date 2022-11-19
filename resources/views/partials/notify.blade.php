@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
@if (session('error'))
<p class="alert alert-danger">{{ session('error') }}</p>
@endif