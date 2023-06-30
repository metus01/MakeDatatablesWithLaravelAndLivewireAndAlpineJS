<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
    <div class="container">

        <input class=" mt-4 mb-4 form-control" placeholder="Rechercher" type="text" wire:model='search'>
    </div>
    <div class=" mt-4 mb-4 container table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text text-center">Name</th>
                    <th class="text text-center">Title</th>
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
</div>
