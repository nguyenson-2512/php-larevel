<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
    @foreach ($users as $user)
        {{ $user->name }}
        <hr />
        {{ $user->email }}
        <hr />
        {{ $user->id }}
    @endforeach
</div>

{{ $users->links() }}