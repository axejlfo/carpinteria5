<div>
    <div>
        <select wire:model="select">
            <option value="" disabled>Elige un producto...</option>
            @foreach ($productos as $producto)
                <option value="{{ $producto->id }}">
                    {{ $producto->nombre_producto }}
                </option>
            @endforeach
        </select>
        <span class="ml-4 mr-2">Precio</span>
        <input type="number" disabled value="{{ $precio }}">
        <span class="ml-4 mr-2">Cantidad</span>
        <input type="number" wire:model="cantidad" min="1"/>
        <button class="ml-4 btn btn-outline-info" wire:click="addProductToProductosSelected">Añadir</button>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->productosSelected as $producto)
                <tr>
                    <td>{{ $producto['id'] }}</td>
                    <td>{{ $producto['nombre_producto'] }}</td>
                    <td>{{ $producto['precio_producto'] }}</td>
                    <td>{{ $producto['cantidad_producto'] }}</td>
                    <td>{{ $producto['precio_producto'] * $producto['cantidad_producto'] }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="1"></td>
                <td></td>
                <td></td>
                <th>Total: </th>
                <th>{{ $total }}</th>
            </tr>
        </tfoot>
    </table>
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" wire:click="guardar">Guardar venta</button>
        <button class="btn btn-danger ml-4">Cancelar venta</button>
    </div>
</div>
