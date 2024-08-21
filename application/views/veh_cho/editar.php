<script>
    $("#asignacion").addClass("active");
</script>
<br><?php
    date_default_timezone_set('America/Guayaquil');

    ?>
<div class="container">
    <div class="row">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Editar Asignacion de chofer-vehiculo</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="<?php echo site_url("/veh_cho_controller/Actualizar") ?>" method="post" enctype="multipart/form-data" id="frm">
                <input hidden value="<?php echo $veh_cho_editar->id_veh_cho ?>" type="text" class="form-control" name="id_veh_cho" id="id_veh_cho" aria-describedby="helpId" placeholder="" />

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                                <input value="<?php echo $veh_cho_editar->fecha_inicio ?>" type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" aria-describedby="helpId" placeholder="" />
                                <p style="color: red;"><?php echo form_error('fecha_inicio') ?></p>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="fecha_fin" class="form-label">Fecha Fin</label>
                                <input value="<?php echo $veh_cho_editar->fecha_fin ?>" type="date" class="form-control" name="fecha_fin" id="fecha_fin" aria-describedby="helpId" placeholder="" />
                                <p style="color: red;"><?php echo form_error('fecha_fin') ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="fk_vc_veh" class="form-label">Vehiculos/Socio</label>
                                <select class="form-select form-select" name="fk_vc_veh" id="fk_vc_veh">
                                    <option value="<?php echo $veh_cho_editar->fk_vc_veh ?>"  selected><?php echo $veh_cho_editar->placa_veh   ?></option>
                                    <?php foreach ($dueño as $registro) { ?>
                                        <option value="<?php echo $registro->id_veh ?>">Placa:
                                            <?php echo $registro->placa_veh . " " ?>Propietario:
                                            <?php echo $registro->nombres . " " . $registro->apellidos ?></option>
                                    <?php } ?>
                                </select>
                                <p style="color: red;"><?php echo form_error('fk_vc_veh') ?></p>

                            </div>

                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="fk_vc_cho" class="form-label">Chofer</label>
                                <select class="form-select form-select" name="fk_vc_cho" id="fk_vc_cho">
                                    <option value="<?php echo $veh_cho_editar->fk_vc_cho ?>" selected><?php echo $veh_cho_editar->nombres_cho . " " . $veh_cho_editar->apellidos_cho?></option>
                                    <?php foreach ($chofer as $registro) { ?>
                                        <option value="<?php echo $registro->id_cho ?>">
                                            <?php echo $registro->nombres_cho . " " . $registro->apellidos_cho ?></option>
                                    <?php } ?>
                                </select>
                                <p style="color: red;"><?php echo form_error('fk_vc_cho') ?></p>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="estatus_veh_cho" class="form-label">Estado</label>
                                <select class="form-select form-select" name="estatus_veh_cho" id="estatus_veh_cho">
                                    <option value="<?php echo $veh_cho_editar->estatus_veh_cho ?>" selected><?php echo $veh_cho_editar->estatus_veh_cho ?></option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="INACTIVO">INACTIVO</option>
                                </select>
                                <p style="color: red;"><?php echo form_error('estatus_veh_cho') ?></p>

                            </div>

                        </div>
                    </div>

                    <center>
                        <br>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                        <a name="" id="" class="btn btn-danger" href="<?php echo site_url("/veh_cho_controller/index") ?>" role="button">Cancelar</a>


                    </center>
            </div>

            </form>

        </div>

    </div>
</div>

<script type="text/javascript">
  
    $('#fk_vc_veh').select2();
    $('#fk_vc_cho').select2();
   
</script>
