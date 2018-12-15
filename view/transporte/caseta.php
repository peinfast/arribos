<h1 class="page-header">
</h1>
<h2>Caseta Entrada</h2>
<ol class="breadcrumb">
  <li><a href="?c=Transporte">Folio</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Folio : 'Actualizacion Entrada'; ?></li>
</ol>

<form id="frm-transporte" action="?c=Transporte&a=GActua" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Folio</label>
      <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" required class="form-control" placeholder="Folio" />
  </div>

  <div class="form-group">
      <label>Estatus</label>
      <select name="Estatus2" class="form-control">
          <option value="En patio">En patio</option>
          <option value="Incidencia">Incidencia</option>
      </select>
  </div>

    <input type="hidden" name="Usuario2" value="Salvador de la Cruz" class="form-control">

    <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="Observaciones2" value="<?php echo $alm->Observaciones2; ?>" required class="form-control" placeholder="Observaciones" />
    </div>

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
