<div class="container">
    <div class="view">
    <?php
         $edit = base_url()."assets/edit.png";
         $delete = base_url()."assets/delete.png"; 
         $baseDelete = base_url()."Remove/delete";
         $baseUpdate = base_url()."UpdateC/";
        foreach($cites as $cite){
          $citesTemplate = "
          <div class='card-cite'>
                <div class='row'>
                    <div class='col-lg-6 col-sm-6'>
                        <h4>$cite->motive</h4>
                        <span><strong>Fecha: </strong></span><span> $cite->datecite</span><br>
                        <span><strong>Nombre: </strong></span> <span> $cite->firstname $cite->lastname</span><br>
                        <span><strong>Identificación: </strong></span><span> $cite->ident</span><br>
                        <span><strong>Ciudad: </strong></span><span> $cite->city</span><br>
                        <span><strong>Dirección: </strong></span><span> $cite->direction</span><br>
                        <span><strong>Fecha Nacimiento: </strong></span><span> $cite->datenac</span><br>
                        <span><strong>Celular: </strong></span><span> $cite->phone</span>
                    </div>
                    <div class='col-lg-6 col-sm-6'>
                    <a href='$baseUpdate?id=$cite->id'><img  id='edit' class='btn-img' src='$edit' alt=''></a>
                    <a href='$baseDelete?id=$cite->id'><img  id='delete' class='btn-img' src='$delete' alt=''></a>
                    </div>
                </div>
          </div>";
          echo $citesTemplate;
        }
      ?>
    </div>
</div>