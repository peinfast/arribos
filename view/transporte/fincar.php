<h1 class="page-header">
</h1>
<h2>Carga/Descarga Concluida</h2>
<ol class="breadcrumb">
  <li><a href="?c=Transporte">Folio</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Folio : 'Actualizacion Carga/Descarga Concluida'; ?></li>
</ol>

<form id="frm-transporte" action="?c=Transporte&a=GCargaout" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Folio</label>
      <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" required class="form-control" placeholder="Folio" />
  </div>

  <div class="form-group">
      <label>Estatus</label>
      <select name="Estatus4" class="form-control">
          <option value="Carga/Descarga Concluida">Carga/Descarga Concluida</option>
          <option value="Incidencia">Incidencia</option>
      </select>
  </div>

  <div class="form-group">
      <label>Estatus del Producto</label>
      <select name="EstatusProducto" class="form-control">
          <option value="Validado">Validado</option>
          <option value="No validado">No validado</option>
      </select>
  </div>

    <input type="hidden" name="Usuario4" value="<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cargamentos';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }
    $query = $db->query("SELECT nombre FROM usuarios WHERE usuario='$user'");
    $row = mysqli_fetch_array($query);
    $nombre=$row['nombre'];
    echo $nombre;
    ?>"  class="form-control">

    <label>Observaciones</label>
    <br/ >
    <textarea name="Observaciones4" rows="15" cols="100" placeholder="Observaciones"></textarea>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-transporte").submit(function(){
            return $(this).validate();
        });
    })
</script>
