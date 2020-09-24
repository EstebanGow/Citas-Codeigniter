<div class="container">
    <div class="data">
            <form id="newData" method="POST" action="<?php echo base_url();?>UpdateC/update">
        <div class="row">
        <div class="form-group col-lg-6">
            <input id="i" name="id" value="<?= $cites[0]->id ?>"></input>
            <label for="firstname">Nombres</label>
            <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp"
            minlength="3" value="<?= $cites[0]->firstname ?>" required>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group col-lg-6">
            <label for="lastname">Apellidos</label>
            <input type="text" name="lastname" class="form-control" id="lastname" 
            minlength="3" value="<?= $cites[0]->lastname ?>" required>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-lg-6">
            <label for="ident">Numero de Identificación</label>
            <input name="ident" id="ident" class="form-control"  minlength="5"
            value="<?= $cites[0]->ident ?>" required>
        </div>
        <div class="form-inline col-lg-6">
            <label for="datenac">Fecha de Nacimiento</label>
            <input type="text" name="datenac" class="form-control" id="datenac"
            value="<?= $cites[0]->datenac ?>" required>
            <div class="input-group-addon">
                 <i class="fa fa-calendar" id="icono"></i>
            </div>
        </div>
        
        </div>
        <div class="row">
        <div class="form-group col-lg-6">
            <label for="city">Ciudad de residencia</label>
            <input type="text" name="city" class="form-control" id="city" value="<?= $cites[0]->city ?>" required>
        </div>
        <div class="form-group col-lg-6">
            <label for="direction">Barrio de residencia</label>
            <input type="text" name="direction" class="form-control" id="direction"
            value="<?= $cites[0]->direction ?>" required>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-lg-6">
            <label for="phone">Numero de celular</label>
            <input  name="phone" id="phone" class="form-control" minlength="10"
            value="<?= $cites[0]->phone ?>" required>
        </div>
        <div class="form-inline col-lg-6">
            <label for="datecite">Fecha de la Cita</label>
            <input type="text" name="datecite" class="form-control" id="datecite"
            minlength="3"  value="<?= $cites[0]->datecite ?>" required>
            <div class="input-group-addon">
                 <i class="fa fa-calendar" id="icono2"></i>
            </div>
        </div>
       
        </div>
      
        <div class="form-group">
      <label for="motive">Tipo de cita</label>
      <select name="motive" id="motive" class="form-control" required>
        <option selected value="">Selecciona una opción...</option>
        <option value="Cita prioritaria">Cita prioritaria</option>
        <option value="Cita médico general">Cita médico general</option>
        <option value="Cita postquirurjíca">Cita postquirurjíca</option>
        <option value="Cita ginecología">Cita ginecología</option>
        <option value="Cita prediatríca">Cita prediatríca</option>
        <option value="Cita para tercera edad">Cita para tercera edad</option>
        <option value="Cita particular medico general">Cita particular medico general</option>
        <option value="Cita optometría">Cita optometría</option>
      </select>
    </div>
        <button id="btnsubmit" type="submit" class="btn btn-primary">Actualizar Cita</button>
        </form>
    </div>
</div>

