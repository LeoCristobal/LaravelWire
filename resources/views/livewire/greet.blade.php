<div>
    <h1>Hello, {{ $name }}</h1>

    <div>
        <form wire:submit="changeName(document.getElementById('newName').value)">
            <input id="newName" type="text" wire:model="newName">
            <button wire:click=""> Greet</button>
        </form>
    </div>
</div>
</div>
