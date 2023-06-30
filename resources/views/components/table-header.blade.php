<th wire:click="setOrderField({{ $name }})">
    {{ $label }}
    @if ($visible)
        @if ($direction === 'ASC')
        <ion-icon name="arrow-dropdown"></ion-icon>
        @else
        <ion-icon name="arrow-dropup"></ion-icon>
        @endif
    @endif
</th>
