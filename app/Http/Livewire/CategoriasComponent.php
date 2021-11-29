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

        $category = Categoria::find($this->categoria_id);
        $category->update([
            'nombre_categoria' => $this->nombre,
            'descripcion_categoria' => $this->descripcion,
        ]);
        $this->reset();
    }

    public function edit($id){
        $this->categoria_id = $id;
        $this->edit = true;
        $category = Categoria::find($id);
        $this->nombre = $category->nombre_categoria;
        $this->descripcion = $category->descripcion_categoria;
    }

    public function destroy($id){
        Categoria::destroy($id);
    }
}
