<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoComponent extends Component
{

    public $productos = [];
    public $nombre, $descripcion, $precio, $descuento;
    public $edit = false;
    public $producto_id;
    public $category_id;
    public $categories = [];

    public function render()
    {
        $this->getCategories();
        $this->getProductos();
        return view('livewire.producto-component');
    }
    // listar productos
    public function getProductos()
    {
        $this->productos = Producto::all();
    }

    // lista categorias
    public function getCategories()
    {
        $this->categories = Categoria::all();
    }

    // guardar producto
    public function guardarProducto()
    {
        $this->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "precio" => "required",
            "descuento" => "required",
        ]);

        Producto::create([
            "nombre_producto" => $this->nombre,
            "descripcion_producto" => $this->descripcion,
            "precio_producto" => $this->precio,
            "cantidad_producto" => $this->descuento,
            'categoria_id' => $this->category_id
        ]);

        $this->reset();
    }

    public function update(){
        $this->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "precio" => "required",
            "descuento" => "required",
        ]);

        $product = Producto::find($this->producto_id);
        $product->update([
            'nombre_producto' => $this->nombre,
            'descripcion_producto' => $this->descripcion,
            'precio_producto' => $this->precio,
            'cantidad_producto' => $this->descuento,
        ]);
        $this->reset();
    }

    public function edit($id){
        $this->producto_id = $id;
        $this->edit = true;
        $product = Producto::find($id);
        $this->nombre = $product->nombre_producto;
        $this->descripcion = $product->descripcion_producto;
        $this->precio = $product->precio_producto;
        $this->descuento = $product->descuento_producto;
    }

    public function destroy($id){
        Producto::destroy($id);
    }
}
