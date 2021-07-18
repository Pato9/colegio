<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="src\css\admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
<div class="container">
<div class="titulo">
    <h2 style="text-align : center;">Administrador</h2>
</div>
<form method="post"  id="inicio" action="./src/php/admin-sesion.php">
  <div class="mb-3">
    <label for="rut" class="form-label">Rut</label>
    <input type="text" class="form-control" name="rut" id="rut">
  </div>
  <div class="mb-3">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input id="contrasena" type="password" name="contrasena" class="form-control">
  </div>
  <div class="error">
      <p id="error">mensaje</p>
  </div>
  <button type="submit"  id="btn-inicio">Ingresar</button>
</form>
</div>


<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>

  
$(function(){
  $("#btn-inicio").on('click',(e)=>{
    e.preventDefault();

    var rut = $('#rut').val();
    var pw = $('#contrasena').val();

    $.ajax({
      type : "post",
      url : 'src/php/admin-sesion.php',
      data : "rut="+$('#rut').val()+"&contrasena="+$('#contrasena').val(),
      success : function(res){
        if(res>0){
          console.log('funciono');
        }else{
          console.log('no funciono');
          let mensaje = "usuario incorrecto";
          $('#error').css("visibility","visible");
          $('#error').css("color","red");
          $('#error').html(mensaje).show(300).delay(3000).hide(300);

        }
    },
    error : function(data){
      console.log(data);
    }

  });

});

});


</script>
</body>
</html>