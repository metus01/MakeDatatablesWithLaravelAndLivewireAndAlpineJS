<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
    @dump($selection)
    <div class="container">
        <input class=" mt-4 mb-4 form-control" placeholder="Rechercher" type="text" wire:model.debounce.500ms='search'>
    </div>
    <div class=" mt-4 mb-4 container table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th wire:click="setOrderField('name')" class="text text-center">Name</th>
                    <th wire:click="setOrderField('title')" class="text text-center">Title</th>
                    <th wire:click="setOrderField('online')">Statut</th>
                    <th>Rôle</th>
                    <th class="text text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <input type="checkbox" name="" id=""
                            wire:model="selection"
                            value="{{ $user->id }}">
                        </td>
                        <td class="text text-center">{{ $user->name }}</td>
                        <td class="text text-center">{{ $user->title }}</td>
                        <td class="text text-center">{{ $user->online }}</td>
                        <td class="text text-center">{{ $user->role }}</td>
                        <td>
                            <button
                            wire:click="startEdit({{ $user->id }})" class="btn btn-primary">Editer</button>
                        </td>
                    </tr>
                    @if($editId == $user->id)
                    <livewire:user-form :user="$user" :key="$user->id"></livewire:user-form>
                    @endif
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>
