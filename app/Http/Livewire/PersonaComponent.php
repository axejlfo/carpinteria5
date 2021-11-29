<?php

namespace App\Http\Livewire;

use App\Models\Persona;
use Livewire\Component;

class PersonaComponent extends Component
{

    public $personas = [];
    public $nombre, $apellidopaterno, $apellidomaterno, $direccion, $telefono;
    public $edit = false;
    public $persona_id;

    public function render()
    {
        $this->getPersonas();
        return view('livewire.persona-component');
    }
    // listar persona
    public function getPersonas()
    {
        $this->personas = Persona::all();
    }
    // guardar persona
    public function guardarPersona()
    {
        $this->validate([
            "nombre" => "required",
            "apellidopaterno" => "required",
            "apellidomaterno" => "required",
            "direccion" => "required",
            "telefono" => "required",
        ]);

        Persona::create([
            "nombre_persona" => $this->nombre,
            "apellido_paterno" => $this->apellidopaterno,
            "apellido_materno" => $this->apellidomaterno,
            "direccion_persona" => $this->direccion,
            "telefono_persona" => $this->telefono,
        ]);

        $this->reset();
    }

    public function update(){
        $this->validate([
            "nombre" => "required",
            "apellidopaterno" => "required",
            "apellidomaterno" => "required",
            "direccion" => "required",
            "telefono" => "required",
        ]);

        $persona = Persona::find($this->persona_id);
        $persona->update([
            "nombre_persona" => $this->nombre,
            "apellido_paterno" => $this->apellidopaterno,
            "apellido_materno" => $this->apellidomaterno,
            "direccion_persona" => $this->direccion,
            "telefono_persona" => $this->telefono,
        ]);
        $this->reset();
    }

    public function edit($id){
        $this->persona_id = $id;
        $this->edit = true;
        $persona = Persona::find($id);
        $this->nombre = $persona->nombre_persona;
        $this->apellidopaterno = $persona->apellido_paterno;
        $this->apellidomaterno = $persona->apellido_materno;
        $this->direccion = $persona->direccion_persona;
        $this->telefono = $persona->telefono_persona;
    }

    public function destroy($id){
        Persona::destroy($id);
    }
}
