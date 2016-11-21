@if (session()->has('flash-message'))
    <div class="alert alert-success">
        <p>{{ session()->get('flash-message') }}</p>
    </div>
@endif