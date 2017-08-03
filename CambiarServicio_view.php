<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 07-08-2015
 * Time: 10:18
 */
cargarCSS();
cargarJS();
?>
<style>
    .input-group[class*=col-] {
        float: none;
        padding-right:;
        padding-left: 0;
    }
    .fechadiv{
        margin-left: 6% !important;
    }
</style>
<div class="col-sm-8">
    <div class="panel panel-info " style="margin-top: 15px;">
        <div class="panel-heading">
            <h3 class="panel-title">Cambio Unidad funcional
            </h3>
        </div>
        <div class="panel-body" style="text-align: center;">
            <div id="respuesta_validacion"></div>
            <form class="form-horizontal" id="cambioServicio">
                <table class="col-sm-12">
                    <tr>
                        <td>
                            <div class="form-group fechadiv">
                                <label class="control-label col-sm-5">
                                    <span class="text-danger">*</span> Fecha:
                                </label>

                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <input type="text" id="fecha" name="fecha" placeholder="Fecha" value="<?php echo date('d/m/Y'); ?>" autocomplete="on" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label class="control-label col-sm-5">
                                    <span class="text-danger">*</span> Hora:
                                </label>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <input type="text" id="hora" name="hora" placeholder="Hora" value="<?php echo date('H:i'); ?>" autocomplete="on" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label class="control-label col-sm-3">
                                    <span class="text-danger">*</span> Motivo:
                                </label>

                                <div class="col-sm-9 ">
                                    <select name="motivo" id="motivo" class="form-control">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach($arr_mcs as $motivoCSE){
                                            echo "<option value='$motivoCSE->ID'>$motivoCSE->DESCRIPCION</option>";
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label class="control-label col-sm-3">
                                    <span class="text-danger">*</span> Unidad funcional Destino:
                                </label>

                                <div class="col-sm-9 ">
                                    <select name="servicio" id="servicio" class="form-control">
                                        <option value="" selected>Seleccione...</option>
                                        <?php
                                        foreach($arr_ser as $servicio){
                                            $DesServicio = $obj_ser->find($servicio->TB_SERVICIO_POLI_CLINICO_ID);
                                            echo "<option value='$servicio->ID'>$DesServicio->DESCRIPCION</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label class="control-label col-sm-3">
                                    <span class="text-danger">*</span> Especialidad Destino:
                                </label>

                                <div class="col-sm-9 ">
                                    <select name="especialidad" id="especialidad" class="form-control">
                                    </select>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label class="control-label col-sm-3">
                                    <span class="text-danger">*</span> Tratante:
                                </label>

                                <div class="col-sm-9 ">
                                    <select name="profesional" id="profesional" class="form-control">
                                    </select>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label class="control-label col-sm-3">
                                    <span class="text-danger">*</span> Observación:
                                </label>

                                <div class="col-sm-9 ">
                                    <input type="text" id="observacion" name="observacion" placeholder="Observación" value="" autocomplete="off" class="form-control">

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="button" id="guardar" class="btn btn-primary" style="float: right;margin-top: 15px;">
                                <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
                            </button>
                        </td>
                    </tr>
                </table>
            </form>


        </div>

    </div>
</div>
&nbsp;
<div class="col-sm-4">
    <div class="">
        <div class="alert alert-info alert-dismissable">

            <!--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>-->
            <p style="text-align: justify;font-size: 15px;">
                Esta acción cambia la dependencia Clínica del Paciente Según su Patología, no representa un traslado de cama o sector</b>
            </p>
        </div>
    </div>
</div>