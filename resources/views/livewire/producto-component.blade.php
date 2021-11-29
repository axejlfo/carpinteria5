<div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Estado</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($productos as $producto )
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre_producto }}</td>
                    <td>{{ $producto->descripcion_producto }}</td>
                    <td>{{ $producto->estado_producto }}</td>
                    <td>{{ $producto->precio_producto }}</td>
                    <td>{{ $producto->cantidad_producto }}</td>
                    <td>
                        <button wire:click="edit({{$producto->id}})" class="btn btn-info">Editar</button>
                        <button wire:click="destroy({{$producto->id}})" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>     
            @endforeach
        </tbody>
    </table>

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Nombre del producto</label>
                    <input type="text" class="form-control" wire:model="nombre">
                    @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="">Descripcion del producto</label>
                    <input type="text" class="form-control" wire:model="descripcion">
                    @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="">Precio del producto</label>
                    <input type="text" class="form-control" wire:model="precio">
                    @error('precio') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="">Cantidad del producto</label>
                    <input type="text" class="form-control" wire:model="descuento">
                    @error('descuento') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="">Categoria del producto</label>
                    <select class="custom-select" wire:model="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nombre_categoria }}</option>                        
                        @endforeach
                    </select>
                    @error('descuento') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                @if ($this->edit)
                    <button class="btn btn-warning" wire:click="update">Actulizar producto</button>            
                @else
                    <button class="btn btn-primary" wire:click="guardarProducto">Guardar producto</button>            
                @endif
            </div>
        </div>

</div>
