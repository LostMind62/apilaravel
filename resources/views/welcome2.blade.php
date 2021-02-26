<!DOCTYPE html>
<html>
<head>
	<title>Explicacion</title>
</head>
<body>
	<script type="text/javascript">
function downloadTextFile(text, name) {
	
  const a = document.createElement('a');
  const type = name.split(".").pop();
  a.href = URL.createObjectURL( new Blob([text], { type:`text/${type === "txt" ? "plain" : type}` }) );
  a.download = name;
  a.click();
}

function buton(myObj) {
	const json={operacion:myObj[0],resultado:myObj[1]};
			downloadTextFile(JSON.stringify(json), 'myObj.json');	
}
	</script>


<h2>Esta es la formula ingresada</h2>
<h2><?=$op;  ?>   </h2>
<br>
<h2>Esta es el resultado obtenido</h2>
<h2><?=$value; ?>   </h2>
<br>
<!-- <button onclick="buton(['hola','popo',])">presiona basura </button> -->

<input type="button" value="Descargar json" onClick="return buton(['<?=$op ?>','<?=$value ?>'])">
</body>
</html>

















