<?php

namespace App\Http\Livewire;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormComponent extends Component
{
    public $nombre = '';
    public $asunto = '';
    public $descripcion = '';
    public $correo = '';

    public function render()
    {
        return view('livewire.form-component');
    }

    public function sendMessage()
    {
        $message = [
            'nombre' => $this->nombre,
            'asunto' => $this->asunto,
            'descripcion' => $this->descripcion,
            'correo' => $this->correo,
        ];
        Mail::to('denmodiga12@gmail.com')->send(new ContactanosMailable($message));

        $this->reset();

        session()->flash('message', 'Correo enviado exitosamente.');

        return redirect()->to('/contact');
    
    }
}
