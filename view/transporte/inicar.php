<h1 class="page-header">
</h1>
<h2>Inicio de Carga/Descarga</h2>


<form id="frm-transporte" action="?c=Transporte&a=GCarga" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Folio</label>
      <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" required class="form-control" placeholder="Folio" />
  </div>

  <div class="form-group">
      <label>Estatus</label>
      <input type="text" name="Estatus3" value="En proceso de Carga/Descarga" readonly="readonly" required class="form-control" />
  </div>

  <div class="form-group">
      <label>Transporte</label>
      <input type="text" name="Transporte" value="<?php echo $alm->Transporte; ?>" required class="form-control" placeholder="Nombre del Transporte" />
  </div>

  <div class="form-group">
      <label>Operador</label>
      <input type="text" name="Operador" value="<?php echo $alm->Operador; ?>" required class="form-control" placeholder="Nombre del operador" />
  </div>
  <div class="form-group">
      <label>Cortina</label>
      <select name="Cortina" class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
      </select>
  </div>
    <input type="hidden" name="Usuario3" value="<?php
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
   ?>" class="form-control">

    <label>Observaciones</label>
    <br/ >
    <textarea name="Observaciones3" rows="15" cols="100" placeholder="Observaciones"></textarea>

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
