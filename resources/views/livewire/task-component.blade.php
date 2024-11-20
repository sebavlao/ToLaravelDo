<form wire:submit.prevent="createTask" class="bg-slate-50">
    <ul>
        <li>
            <label for="title">Title</label>
            <input wire:model="title" type="text">
        </li>
        <li>
            <label for="description">Description</label>
            <input wire:model="description" id="description" type="textarea">
        </li>
        <li>
            <label for="icon">Icon</label>
            @foreach ($iconOptions as $iconOption)
                <button
                    class="p-4 bg-gray-200 rounded-xl hover:bg-yellow-500 transition-colors"
                    type="button" 
                    wire:click="triggerIcon($event.target.value)" 
                    value={{ $iconOption[0] }}>
                    {{ $iconOption[1] }}
                </button>
            @endforeach
        </li>
        <li>
            <label for="status">Statuss</label>
            <select wire:model="status" id="status">
                <option value="In_Progress">progress</option>
                <option value="Wont_do">Wont'do</option>
                <option value="Completed">Completed</option>
            </select>
        </li>
        <li>
            <button>Enviar</button>
        </li>

        <h2>El icono elegido es: {{ $icon }}</h2>
    </ul>
</form>
