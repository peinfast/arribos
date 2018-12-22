<h1 class="page-header"></h1>

<table id="tablas">
    <thead>
        <tr>
            <th style="width:180px;">Folio</th>
            <th style="width:180px;">Cliente</th>
            <th style="width:180px;">Marca</th>
            <th style="width:180px;">Destino</th>
            <th style="width:180px;">Servicio</th>
            <th style="width:180px;">FH Carga</th>
            <th style="width:180px;">Estatus</th>
            <th style="width:80px;">Editar</th>
            <th style="width:80px;">Eliminar</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($this->model->azulPro() as $r): ?>
          <tr style="background-color: blue;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Area; ?></td>
              <td><?php echo $r->Cliente; ?></td>
              <td><?php echo $r->Marca; ?></td>
              <td><?php echo $r->Destino; ?></td>
              <td><?php echo $r->Servicio; ?></td>
              <td><?php echo $r->FH_Carga; ?></td>
              <td><?php echo $r->EstatusProducto; ?></td>
              <td><?php
              if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus;
              }
              elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus2;
              }
              elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus3;
              }
              elseif ($r->Estatus5==null) {
                  echo $r->Estatus4;
              }
              else{
                  echo $r->Estatus5;
              }
               ?></td>
          </tr>
      <?php endforeach; ?>
      <?php foreach($this->model->rojoPro() as $r): ?>
          <tr style="background-color: tomato;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Cliente; ?></td>
              <td><?php echo $r->Marca; ?></td>
              <td><?php echo $r->Destino; ?></td>
              <td><?php echo $r->Servicio; ?></td>
              <td><?php echo $r->FH_Carga; ?></td>
              <td><?php
              if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus;
              }
              elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus2;
              }
              elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus3;
              }
              elseif ($r->Estatus5==null) {
                  echo $r->Estatus4;
              }
              else{
                  echo $r->Estatus5;
              }
               ?></td>
               <td style="background-color: white;">
                    <a href="?c=Transporte&a=Editarpro&id=<?php echo $r->id; ?>"><img src="assets/img/editar.png" width="50"></a>
               </td>
               <td style="background-color: white;">
                  <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>"><img src="assets/img/eliminar.png" width="50"></a>
               </td>
          </tr>
      <?php endforeach; ?>
      <?php foreach($this->model->amarilloPro() as $r): ?>
          <tr style="background-color: yellow;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Cliente; ?></td>
              <td><?php echo $r->Marca; ?></td>
              <td><?php echo $r->Destino; ?></td>
              <td><?php echo $r->Servicio; ?></td>
              <td><?php echo $r->FH_Carga; ?></td>
              <td><?php
              if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus;
              }
              elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus2;
              }
              elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus3;
              }
              elseif ($r->Estatus5==null) {
                  echo $r->Estatus4;
              }
              else{
                  echo $r->Estatus5;
              }
               ?></td>
               <td style="background-color: white;">
                    <a href="?c=Transporte&a=Editarpro&id=<?php echo $r->id; ?>"><img src="assets/img/editar.png" width="50"></a>
               </td>
               <td style="background-color: white;">
                  <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>"><img src="assets/img/eliminar.png" width="50"></a>
               </td>
          </tr>
      <?php endforeach; ?>
      <?php foreach($this->model->verdePro() as $r): ?>
          <tr style="background-color: green;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Cliente; ?></td>
              <td><?php echo $r->Marca; ?></td>
              <td><?php echo $r->Destino; ?></td>
              <td><?php echo $r->Servicio; ?></td>
              <td><?php echo $r->FH_Carga; ?></td>
              <td><?php
              if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus;
              }
              elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus2;
              }
              elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus3;
              }
              elseif ($r->Estatus5==null) {
                  echo $r->Estatus4;
              }
              else{
                  echo $r->Estatus5;
              }
               ?></td>
               <td style="background-color: white;">
                    <a href="?c=Transporte&a=Editarpro&id=<?php echo $r->id; ?>"><img src="assets/img/editar.png" width="50"></a>
               </td>
               <td style="background-color: white;">
                  <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>"><img src="assets/img/eliminar.png" width="50"></a>
               </td>
          </tr>
      <?php endforeach; ?>
    </tbody>
</table>
