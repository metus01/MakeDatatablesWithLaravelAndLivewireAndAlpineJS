<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="{{ asset('css/pulse.css') }}">
    @livewireStyles
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
        </div>
      </nav>
      <div class="container">
        <input  class=" mt-4 mb-4 form-control" placeholder="Rechercher" type="text">
      </div>
        <div class=" mt-4 mb-4 container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Statut</th>
                        <th>Rôle</th>
                        <th class="text text-end">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="text text-center">{{ $user->name }}</td>
                        <td class="text text-center">{{ $user->title }}</td>
                        <td class="text text-center">{{ $user->online }}</td>
                        <td class="text text-center">{{ $user->role }}</td>
                        <td>
                            <button class="btn btn-primary">Editer</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @livewireScripts
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
