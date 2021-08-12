@extends('layouts.plantilla')

@section('content')
    <h1>CONTACTANOS</h1>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="validationTooltip01" value="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="validationTooltip02" value="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltipUsername" class="form-label">Correo</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                </div>
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="validationTooltip03" required>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltip05" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="validationTooltip05" required>
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar Formulario</button>
        </div>
    </form>
@endsection
