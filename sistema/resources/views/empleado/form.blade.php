Formulario que tendrá los datos en común con create y edit

<h1>{{ $modo }} empleado</h1>

<div class="form-group">

    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">

</div>
    
<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno">

</div>

<div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno">

<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">
    
</div>

<div class="form-group">
    <label for="Foto"></label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid"  src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="50" height="50">
    @endif
    <input type="file" name="Foto" class="form-control" value="" id="Foto">

</div>
<br>
    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">

    <a class="btn btn-primary" href="{{ url('empleado/') }}">Regesar</a>


    <br>