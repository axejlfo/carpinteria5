<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriasComponent extends Component
{

    public $categorias = [];
    public $nombre, $descripcion;
    public $edit = false;
    public $categoria_id;

    public function render()
    {
        $this->getCategorias();
        return view('livewire.categorias-component');
    }
    // listar categoria
    public function getCategorias()
    {
        $this->categorias = Categoria::all();
    }
    // guardar categoria
    public function guardarCategoria()
    {
        $this->validate([
            "nombre" => "required",
            "descripcion" => "required",
        ]);

        Categoria::create([
            "nombre_categoria" => $this->nombre,
            "descripcion_categoria" => $this->descripcion,
        ]);

        $this->reset();
    }

    public function update(){
        $this->validate([
            "nombre" => "required",
            "descripcion" => "required",
        ]);

        $product = Categoria::find($this->categoria_id);
        $product->update([
            'nombre_categoria' => $this->nombre,
            'descripcion_categoria' => $this->descripcion,
        ]);
        $this->reset();
    }

    public function edit($id){
        $this->categoria_id = $id;
        $this->edit = true;
        $product = Categoria::find($id);
        $this->nombre = $product->nombre_categoria;
        $this->descripcion = $product->descripcion_categoria;
    }

    public function destroy($id){
        Categoria::destroy($id);
    }
}
