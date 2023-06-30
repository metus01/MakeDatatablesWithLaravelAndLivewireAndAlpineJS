<td colspan="6">
    <form  wire:submit.prevent="save" action="" method="post">
        <div wire:loading>Chargement...</div>
        <div class="mb-3">
            <label for="form-label">Name</label>
            <input type="text" name="" id="" wire:model.defer="user.name" class="form-control">
            @error('user.name')
            <div class="is-invalid">
                <div class="text text-danger"> {{ $message }}</div>
            </div>
            @enderror
        </div>
        <button class="btn btn-success"  wire:loading.attr='disabled'>Sauvegarder</button>
    </form>
</td>
