<?php

namespace App\Http\Livewire;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class PedidoComponent extends Component
{

    public $precio = 0, $cantidad = 0, $select = '', $total = 0;
    public $productosSelected = [];
    public $productos;
    public Producto $producto;
    public $confirmingVentaCreating = false;

    public function updatedselect($id) {
        $this->producto = $this->getOneProduct($id);
        $this->cantidad = 1;
        $this->precio = $this->producto->precio_producto;
    }

    public function getOneProduct($id)
    {
        return Producto::find($id);
    }

    public function addProductToProductosSelected()
    {
        $this->producto->cantidad_producto = $this->cantidad;
        $this->producto->precio_producto = $this->precio;
        $this->total = $this->total + ($this->producto->cantidad_producto * $this->producto->precio_producto);
        array_push($this->productosSelected, $this->producto);
    }

    public function guardar()
    {   
     
     
        $pedido = new Pedido();
        $pedido->empleado_id = Auth::id();
        $pedido->total_pedido = $this->total;
        $pedido->fecha_pedido = Date::now();
        $pedido->save();

        $pedidoProductos = [];
        foreach ($this->productosSelected as $produc)
        {
            $pedidoProductos = $pedidoProductos + [
                $produc['id'] => [
                    'cantidad_actual' => $produc['cantidad_producto'],
                    'precio_actual' => $produc['precio_producto'],
                ],
            ];
        }
        
        $pedido->productos()->attach($pedidoProductos);
        return view('livewire.producto-component');
     
    }

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.pedido-component');
    }
}
