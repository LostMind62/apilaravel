<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Principal</title>
</head>
<body>


  @if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif


  <h2>No ingreses letras</h2>
<form method="POST" action="{{route('opera')}}">
 
 @csrf
  
<div class="form-group">
    <label for="exampleInputEmail1">Operacion Anidada</label>
    <input type="text" class="form-control" id="operacion" name="operacion" placeholder="Operacion" required>
    <small id="emailHelp" class="form-text text-muted">Usa la api</small>
  </div>
  

  <label>seleccione salida</label>
    <select name="salida">
      <option value="json">json</option>
      <option value="html" >html</option>
    </select>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</body>
</html>