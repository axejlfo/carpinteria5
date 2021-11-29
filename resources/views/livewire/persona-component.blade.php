<div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>ApellidoPaterno</td>
                <td>ApellidoMaterno</td>
                <td>Direccion</td>
                <td>Telefono</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($personas as $persona )
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->nombre_persona }}</td>
                    <td>{{ $persona->apellido_paterno }}</td>
                    <td>{{ $persona->apellido_materno }}</td>
                    <td>{{ $persona->direccion_persona }}</td>
                    <td>{{ $persona->telefono_persona }}</td>
                    <td>
                        <button wire:click="edit({{$persona->id}})" class="btn btn-info">Editar</button>
                        <button wire:click="destroy({{$persona->id}})" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>     
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Nombre de la persona</label>
                <input type="text" class="form-control" wire:model="nombre">
                @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="">Apellido Paterno</label>
                <input type="text" class="form-control" wire:model="apellidopaterno">
                @error('apellidopaterno') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="">Apellido Materno</label>
                <input type="text" class="form-control" wire:model="apellidomaterno">
                @error('apellidomaterno') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="">Direccion de la persona</label>
                <input type="text" class="form-control" wire:model="direccion">
                @error('direccion') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="">Telefono de la persona</label>
                <input type="text" class="form-control" wire:model="telefono">
                @error('telefono') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            @if ($this->edit)
                <button class="btn btn-warning" wire:click="update">Actulizar persona</button>            
            @else
                <button class="btn btn-primary" wire:click="guardarPersona">Guardar persona</button>            
            @endif
        </div>
    </div>

</div>
