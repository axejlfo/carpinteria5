<div>
    <div class="row justify-content-center p-5">
        <div class="col-4">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="border border-dark shadow rounded p-3">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" wire:model="nombre">
                </div>
                <div class="form-group">
                    <label for="">Asunto</label>
                    <input type="text" class="form-control" wire:model="asunto">
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" class="form-control" wire:model="descripcion">
                </div>
                <div class="form-group">
                    <label for="">Correo electronico</label>
                    <input type="text" class="form-control" wire:model="correo">
                </div>
                <br>
                <button wire:click="sendMessage" class="btn btn-primary btn-block">Enviar</button>
            </div>
        </div>
    </div>
</div>
