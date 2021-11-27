<div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Estado</td>
                <td>Descripcion</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($categorias as $categoria )
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nombre_categoria }}</td>
                    <td>{{ $categoria->estado_categoria }}</td>
                    <td>{{ $categoria->descripcion_categoria }}</td>
                    <td>
                        <button wire:click="edit({{$categoria->id}})" class="btn btn-info">Editar</button>
                        <button wire:click="destroy({{$categoria->id}})" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>     
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Nombre de la categoria</label>
                <input type="text" class="form-control" wire:model="nombre">
                @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="">Descripcion de la categoria</label>
                <input type="text" class="form-control" wire:model="descripcion">
                @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            @if ($this->edit)
                <button class="btn btn-warning" wire:click="update">Actulizar categoria</button>            
            @else
                <button class="btn btn-primary" wire:click="guardarCategoria">Guardar categoria</button>            
            @endif
        </div>
    </div>

</div>
