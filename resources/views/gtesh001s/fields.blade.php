<!-- Nombre Responsable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_responsable', __('models/gtesh001s.fields.nombre_responsable').':') !!}
    {!! Form::text('nombre_responsable', $gtesh001->nombre_responsable, ['class' => 'form-control', "disabled" => "disabled"]) !!}
</div>

<!-- Fono Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fono_contacto', __('models/gtesh001s.fields.fono_contacto').':') !!}
    {!! Form::text('fono_contacto', null, ['class' => 'form-control', "disabled" => "disabled"]) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', __('models/gtesh001s.fields.fecha').':') !!}
    {!! Form::text('fecha', $gtesh001->fecha_format, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Patente Camion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patente_camion', __('models/gtesh001s.fields.patente_camion').':') !!}
    {!! Form::select('patente_camion', $vehiculoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Patente Estanque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patente_estanque', __('models/gtesh001s.fields.patente_estanque').':') !!}
    {!! Form::select('patente_estanque', $vehiculoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Odometro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('odometro', __('models/gtesh001s.fields.odometro').':') !!}
    {!! Form::text('odometro', null, ['class' => 'form-control']) !!}
</div>

<div class="col-12 bg-secondary mb-4 mt-5">
    <h4><b>INFORMACIÓN, PROCEDIMIENTOS Y DOCUMENTACION</b></h4>
</div>

<!-- Revision Tecnica Tracto Field -->
<div class="form-group col-sm-6">
    <div class="row">
        <div class="col">
            1. {!! Form::label('revision_tecnica_tracto', __('models/gtesh001s.fields.revision_tecnica_tracto').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('revision_tecnica_tracto', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('revision_tecnica_tracto', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fecha Revision Tecnica Tracto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_revision_tecnica_tracto', __('models/gtesh001s.fields.fecha_revision_tecnica_tracto').':') !!}
    {!! Form::text('fecha_revision_tecnica_tracto', null, ['class' => 'form-control','id'=>'fecha_revision_tecnica_tracto']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_revision_tecnica_tracto').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Revision Tecnica Estanque Field -->
<div class="form-group col-sm-6">
    <div class="row">
        <div class="col">
            2. {!! Form::label('revision_tecnica_estanque', __('models/gtesh001s.fields.revision_tecnica_estanque').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('revision_tecnica_estanque', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('revision_tecnica_estanque', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fecha Revision Tecnica Estanque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_revision_tecnica_estanque', __('models/gtesh001s.fields.fecha_revision_tecnica_estanque').':') !!}
    {!! Form::text('fecha_revision_tecnica_estanque', null, ['class' => 'form-control','id'=>'fecha_revision_tecnica_estanque']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_revision_tecnica_estanque').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Poliza Seguro Tracto Field -->
<div class="form-group col-sm-6">
    <div class="row">
        <div class="col">
            3. {!! Form::label('poliza_seguro_tracto', __('models/gtesh001s.fields.poliza_seguro_tracto').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('poliza_seguro_tracto', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('poliza_seguro_tracto', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fecha Poliza Seguro Tracto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_poliza_seguro_tracto', __('models/gtesh001s.fields.fecha_poliza_seguro_tracto').':') !!}
    {!! Form::text('fecha_poliza_seguro_tracto', null, ['class' => 'form-control','id'=>'fecha_poliza_seguro_tracto']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_poliza_seguro_tracto').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Poliza Seguro Estanque Field -->
<div class="form-group col-sm-6">
    <div class="row">
        <div class="col">
            4. {!! Form::label('poliza_seguro_estanque', __('models/gtesh001s.fields.poliza_seguro_estanque').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('poliza_seguro_estanque', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('poliza_seguro_estanque', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fecha Poliza Seguro Estanque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_poliza_seguro_estanque', __('models/gtesh001s.fields.fecha_poliza_seguro_estanque').':') !!}
    {!! Form::text('fecha_poliza_seguro_estanque', null, ['class' => 'form-control','id'=>'fecha_poliza_seguro_estanque']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_poliza_seguro_estanque').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Permiso Circulacion Tracto Field -->
<div class="form-group col-sm-6">
    <div class="row">
        <div class="col">
            5. {!! Form::label('permiso_circulacion_tracto', __('models/gtesh001s.fields.permiso_circulacion_tracto').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('permiso_circulacion_tracto', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('permiso_circulacion_tracto', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fecha Permiso Circulacion Tracto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_permiso_circulacion_tracto', __('models/gtesh001s.fields.fecha_permiso_circulacion_tracto').':') !!}
    {!! Form::text('fecha_permiso_circulacion_tracto', null, ['class' => 'form-control','id'=>'fecha_permiso_circulacion_tracto']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_permiso_circulacion_tracto').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Permiso Circulacion Estanque Field -->
<div class="form-group col-sm-6">
    <div class="row">
        <div class="col">
            6. {!! Form::label('permiso_circulacion_estanque', __('models/gtesh001s.fields.permiso_circulacion_estanque').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('permiso_circulacion_estanque', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('permiso_circulacion_estanque', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>


</div>

<!-- Fecha Permiso Circulacion Estanque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_permiso_circulacion_estanque', __('models/gtesh001s.fields.fecha_permiso_circulacion_estanque').':') !!}
    {!! Form::text('fecha_permiso_circulacion_estanque', null, ['class' => 'form-control','id'=>'fecha_permiso_circulacion_estanque']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_permiso_circulacion_estanque').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Procedimientos Trabajo Seguro Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            7. {!! Form::label('procedimientos_trabajo_seguro', __('models/gtesh001s.fields.procedimientos_trabajo_seguro').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('procedimientos_trabajo_seguro', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('procedimientos_trabajo_seguro', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Lista Asistencia Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            8. {!! Form::label('lista_asistencia', __('models/gtesh001s.fields.lista_asistencia').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('lista_asistencia', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('lista_asistencia', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Ast Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            9. {!! Form::label('ast', __('models/gtesh001s.fields.ast').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('ast', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('ast', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Certificado Minsal Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            10. {!! Form::label('certificado_minsal', __('models/gtesh001s.fields.certificado_minsal').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('certificado_minsal', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('certificado_minsal', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Check List Camion Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            11. {!! Form::label('check_list_camion', __('models/gtesh001s.fields.check_list_camion').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('check_list_camion', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('check_list_camion', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>


</div>

<!-- Guias De Despacho Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            12. {!! Form::label('guias_de_despacho', __('models/gtesh001s.fields.guias_de_despacho').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('guias_de_despacho', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('guias_de_despacho', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Logo De Empresa Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            13. {!! Form::label('logo_de_empresa', __('models/gtesh001s.fields.logo_de_empresa').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('logo_de_empresa', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('logo_de_empresa', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Sticker Ultima Mantencion Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            14. {!! Form::label('sticker_ultima_mantencion', __('models/gtesh001s.fields.sticker_ultima_mantencion').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('sticker_ultima_mantencion', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('sticker_ultima_mantencion', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Lic Del Conductor Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            15. {!! Form::label('lic_del_conductor', __('models/gtesh001s.fields.lic_del_conductor').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('lic_del_conductor', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('lic_del_conductor', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Credencial Auxiliar Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            16. {!! Form::label('credencial_auxiliar', __('models/gtesh001s.fields.credencial_auxiliar').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('credencial_auxiliar', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('credencial_auxiliar', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Credencial Conductor Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            17. {!! Form::label('credencial_conductor', __('models/gtesh001s.fields.credencial_conductor').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('credencial_conductor', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('credencial_conductor', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Licencia Interna Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            18. {!! Form::label('licencia_interna', __('models/gtesh001s.fields.licencia_interna').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('licencia_interna', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('licencia_interna', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<div class="col-12 bg-secondary mb-4 mt-5">
    <h4><b>ELEMENTOS DE SEGURIDAD DEL EQUIPO</b></h4>
</div>

<!-- Seis Conos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            1. {!! Form::label('seis_conos', __('models/gtesh001s.fields.seis_conos').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('seis_conos', "1", null) !!} Si
            </label>
            <label class="radio-inline">
                {!! Form::radio('seis_conos', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>

</div>

<!-- Cuatro Cunas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            2. {!! Form::label('cuatro_cunas', __('models/gtesh001s.fields.cuatro_cunas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('cuatro_cunas', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('cuatro_cunas', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Dos Extintor Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            3. {!! Form::label('dos_extintor', __('models/gtesh001s.fields.dos_extintor').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('dos_extintor', "1", null) !!} Si
            </label>
            <label class="radio-inline">
                {!! Form::radio('dos_extintor', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Gata Hidraulica Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            4. {!! Form::label('gata_hidraulica', __('models/gtesh001s.fields.gata_hidraulica').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('gata_hidraulica', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('gata_hidraulica', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Llave De Rueda Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            5. {!! Form::label('llave_de_rueda', __('models/gtesh001s.fields.llave_de_rueda').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('llave_de_rueda', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('llave_de_rueda', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Triangulos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            6. {!! Form::label('triangulos', __('models/gtesh001s.fields.triangulos').':') !!}
        </div>
        <div class="col">
                    <label class="radio-inline">
                {!! Form::radio('triangulos', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('triangulos', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Sanitizador Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            7. {!! Form::label('sanitizador', __('models/gtesh001s.fields.sanitizador').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('sanitizador', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('sanitizador', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Radio Transmisora Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            8. {!! Form::label('radio_transmisora', __('models/gtesh001s.fields.radio_transmisora').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('radio_transmisora', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('radio_transmisora', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Caja De Herramientas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            9. {!! Form::label('caja_de_herramientas', __('models/gtesh001s.fields.caja_de_herramientas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('caja_de_herramientas', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('caja_de_herramientas', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Kit De Invierno Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            10. {!! Form::label('kit_de_invierno', __('models/gtesh001s.fields.kit_de_invierno').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('kit_de_invierno', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('kit_de_invierno', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Botiquin Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            11. {!! Form::label('botiquin', __('models/gtesh001s.fields.botiquin').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('botiquin', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('botiquin', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Parabrisas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            12. {!! Form::label('parabrisas', __('models/gtesh001s.fields.parabrisas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('parabrisas', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('parabrisas', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Senor Somnolencia Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            13. {!! Form::label('senor_somnolencia', __('models/gtesh001s.fields.senor_somnolencia').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('senor_somnolencia', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('senor_somnolencia', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Ventanas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            14. {!! Form::label('ventanas', __('models/gtesh001s.fields.ventanas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('ventanas', "1", null) !!} Si
            </label>
            <label class="radio-inline">
                {!! Form::radio('ventanas', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Cinturon Seguridad Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            15. {!! Form::label('cinturon_seguridad', __('models/gtesh001s.fields.cinturon_seguridad').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('cinturon_seguridad', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('cinturon_seguridad', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Tercer Ojo Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            16. {!! Form::label('tercer_ojo', __('models/gtesh001s.fields.tercer_ojo').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('tercer_ojo', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('tercer_ojo', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Parachoque Delantero Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            17. {!! Form::label('parachoque_delantero', __('models/gtesh001s.fields.parachoque_delantero').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('parachoque_delantero', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('parachoque_delantero', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Parachoque Trasero Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            18. {!! Form::label('parachoque_trasero', __('models/gtesh001s.fields.parachoque_trasero').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('parachoque_trasero', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('parachoque_trasero', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Pertiga Y Baliza Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            19. {!! Form::label('pertiga_y_baliza', __('models/gtesh001s.fields.pertiga_y_baliza').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('pertiga_y_baliza', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('pertiga_y_baliza', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Retrovisores Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            20. {!! Form::label('retrovisores', __('models/gtesh001s.fields.retrovisores').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('retrovisores', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('retrovisores', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Checkpoint De Rueda Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            21. {!! Form::label('checkpoint_de_rueda', __('models/gtesh001s.fields.checkpoint_de_rueda').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('checkpoint_de_rueda', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('checkpoint_de_rueda', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Kit Covid Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            22. {!! Form::label('kit_covid', __('models/gtesh001s.fields.kit_covid').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('kit_covid', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('kit_covid', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', __('models/gtesh001s.fields.observaciones').':') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>


<div class="col-12 bg-secondary mb-4 mt-5">
    <h4><b>INSPECCIÓN DE TRACTOCAMIÓN</b></h4>
</div>

<!-- Luces Altas Bajas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            1. {!! Form::label('luces_altas_bajas', __('models/gtesh001s.fields.luces_altas_bajas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luces_altas_bajas', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('luces_altas_bajas', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Luces Intermitentes Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            2. {!! Form::label('luces_intermitentes', __('models/gtesh001s.fields.luces_intermitentes').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luces_intermitentes', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('luces_intermitentes', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Luces De Estacionamiento Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            3. {!! Form::label('luces_de_estacionamiento', __('models/gtesh001s.fields.luces_de_estacionamiento').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luces_de_estacionamiento', "1", null) !!} Si
            </label>
            <label class="radio-inline">
                {!! Form::radio('luces_de_estacionamiento', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Luz Y Alarma De Retroceso Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            4. {!! Form::label('luz_y_alarma_de_retroceso', __('models/gtesh001s.fields.luz_y_alarma_de_retroceso').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luz_y_alarma_de_retroceso', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('luz_y_alarma_de_retroceso', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Luz De Freno Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            5. {!! Form::label('luz_de_freno', __('models/gtesh001s.fields.luz_de_freno').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luz_de_freno', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('luz_de_freno', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Sistema De Frenos Tracto Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            6. {!! Form::label('sistema_de_frenos_tracto', __('models/gtesh001s.fields.sistema_de_frenos_tracto').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('sistema_de_frenos_tracto', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('sistema_de_frenos_tracto', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fugas De Aceite Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            7. {!! Form::label('fugas_de_aceite', __('models/gtesh001s.fields.fugas_de_aceite').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('fugas_de_aceite', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('fugas_de_aceite', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fugas De Refrigerante Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            8. {!! Form::label('fugas_de_refrigerante', __('models/gtesh001s.fields.fugas_de_refrigerante').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('fugas_de_refrigerante', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('fugas_de_refrigerante', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fugas De Aire Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            9. {!! Form::label('fugas_de_aire', __('models/gtesh001s.fields.fugas_de_aire').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('fugas_de_aire', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('fugas_de_aire', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Sistema De Direccion Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            10. {!! Form::label('sistema_de_direccion', __('models/gtesh001s.fields.sistema_de_direccion').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('sistema_de_direccion', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('sistema_de_direccion', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Tablero De Instrumentos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            11. {!! Form::label('tablero_de_instrumentos', __('models/gtesh001s.fields.tablero_de_instrumentos').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('tablero_de_instrumentos', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('tablero_de_instrumentos', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>


</div>

<!-- Tapas De Petroleo Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            12. {!! Form::label('tapas_de_petroleo', __('models/gtesh001s.fields.tapas_de_petroleo').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('tapas_de_petroleo', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('tapas_de_petroleo', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Guarda Fangos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            13. {!! Form::label('guarda_fangos', __('models/gtesh001s.fields.guarda_fangos').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('guarda_fangos', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('guarda_fangos', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Pisaderas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            14. {!! Form::label('pisaderas', __('models/gtesh001s.fields.pisaderas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('pisaderas', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('pisaderas', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Plumillas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            15. {!! Form::label('plumillas', __('models/gtesh001s.fields.plumillas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('plumillas', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('plumillas', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Neumaticos Malos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            16. {!! Form::label('neumaticos_malos', __('models/gtesh001s.fields.neumaticos_malos').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('neumaticos_malos', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('neumaticos_malos', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<div class="col-12">
    <!-- Neumatico Malo 01 Field -->
    <div class="d-inline-block mx-5">
        {!! Form::label('neumatico_malo_01', __('models/gtesh001s.fields.neumatico_malo_01').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_01', 0) !!}
            {!! Form::checkbox('neumatico_malo_01', '1', null, ['id' => 'neumatico_malo_01_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_01 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
        <div class="border-bottom position-absolute" style="width: 100px; transform: translate(15px, -25px);"></div>
    </div>
    <!-- Neumatico Malo 02 Field -->
    <div class="d-inline-block mx-5">
        {!! Form::label('neumatico_malo_02', __('models/gtesh001s.fields.neumatico_malo_02').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_02', 0) !!}
            {!! Form::checkbox('neumatico_malo_02', '1', null, ['id' => 'neumatico_malo_02_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_02 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>
</div>



<div class="col-12">
    <!-- Neumatico Malo 03 Field -->
    <div class="d-inline-block ml-5">
        {!! Form::label('neumatico_malo_03', __('models/gtesh001s.fields.neumatico_malo_03').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_03', 0) !!}
            {!! Form::checkbox('neumatico_malo_03', '1', null, ['id' => 'neumatico_malo_03_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_03 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 04 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_04', __('models/gtesh001s.fields.neumatico_malo_04').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_04', 0) !!}
            {!! Form::checkbox('neumatico_malo_04', '1', null, ['id' => 'neumatico_malo_04_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_04 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
        <div class="border-bottom position-absolute" style="width: 60px; transform: translate(15px, -25px);"></div>
    </div>


    <!-- Neumatico Malo 05 Field -->
    <div class="d-inline-block ml-2">
        {!! Form::label('neumatico_malo_05', __('models/gtesh001s.fields.neumatico_malo_05').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_05', 0) !!}
            {!! Form::checkbox('neumatico_malo_05', '1', null, ['id' => 'neumatico_malo_05_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_05 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 06 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_06', __('models/gtesh001s.fields.neumatico_malo_06').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_06', 0) !!}
            {!! Form::checkbox('neumatico_malo_06', '1', null, ['id' => 'neumatico_malo_06_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_06 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>
</div>

<div class="col-12">
    <!-- Neumatico Malo 07 Field -->
    <div class="d-inline-block ml-5">
        {!! Form::label('neumatico_malo_07', __('models/gtesh001s.fields.neumatico_malo_07').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_07', 0) !!}
            {!! Form::checkbox('neumatico_malo_07', '1', null, ['id' => 'neumatico_malo_07_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_07 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 08 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_08', __('models/gtesh001s.fields.neumatico_malo_08').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_08', 0) !!}
            {!! Form::checkbox('neumatico_malo_08', '1', null, ['id' => 'neumatico_malo_08_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_08 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
        <div class="border-bottom position-absolute" style="width: 60px; transform: translate(15px, -25px);"></div>
    </div>


    <!-- Neumatico Malo 09 Field -->
    <div class="d-inline-block ml-2">
        {!! Form::label('neumatico_malo_09', __('models/gtesh001s.fields.neumatico_malo_09').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_09', 0) !!}
            {!! Form::checkbox('neumatico_malo_09', '1', null, ['id' => 'neumatico_malo_09_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_09 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 10 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_10', __('models/gtesh001s.fields.neumatico_malo_10').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_10', 0) !!}
            {!! Form::checkbox('neumatico_malo_10', '1', null, ['id' => 'neumatico_malo_10_checkbox', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_10 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>
</div>


<!-- Estado De Tubo Escape Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            17. {!! Form::label('estado_de_tubo_escape', __('models/gtesh001s.fields.estado_de_tubo_escape').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('estado_de_tubo_escape', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('estado_de_tubo_escape', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>

</div>

<!-- Ac Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            18. {!! Form::label('ac', __('models/gtesh001s.fields.ac').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('ac', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('ac', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Baterias Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            19. {!! Form::label('baterias', __('models/gtesh001s.fields.baterias').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('baterias', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('baterias', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Reflectantes Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            20. {!! Form::label('reflectantes', __('models/gtesh001s.fields.reflectantes').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('reflectantes', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('reflectantes', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>


</div>

<!-- Logos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            21. {!! Form::label('logos', __('models/gtesh001s.fields.logos').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('logos', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('logos', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<div class="col-12 bg-secondary mb-4 mt-5">
    <h4><b>INSPECCIÓN DE TANQUE ALJIBE</b></h4>
</div>


<!-- Luces Intermitentes 2 Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            1. {!! Form::label('luces_intermitentes_2', __('models/gtesh001s.fields.luces_intermitentes_2').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luces_intermitentes_2', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('luces_intermitentes_2', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Luces De Estacionamiento 2 Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            2. {!! Form::label('luces_de_estacionamiento_2', __('models/gtesh001s.fields.luces_de_estacionamiento_2').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luces_de_estacionamiento_2', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('luces_de_estacionamiento_2', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Luz Y Alarma De Retroceso 2 Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            3. {!! Form::label('luz_y_alarma_de_retroceso_2', __('models/gtesh001s.fields.luz_y_alarma_de_retroceso_2').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luz_y_alarma_de_retroceso_2', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('luz_y_alarma_de_retroceso_2', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Luz De Freno 2 Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            4. {!! Form::label('luz_de_freno_2', __('models/gtesh001s.fields.luz_de_freno_2').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('luz_de_freno_2', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('luz_de_freno_2', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Parachoques Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            5. {!! Form::label('parachoques', __('models/gtesh001s.fields.parachoques').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('parachoques', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('parachoques', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Barra Lateral Anticiclista Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            6. {!! Form::label('barra_lateral_anticiclista', __('models/gtesh001s.fields.barra_lateral_anticiclista').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('barra_lateral_anticiclista', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('barra_lateral_anticiclista', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Llave De Descarga Cuatro Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            7. {!! Form::label('llave_de_descarga_cuatro', __('models/gtesh001s.fields.llave_de_descarga_cuatro').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('llave_de_descarga_cuatro', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('llave_de_descarga_cuatro', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Estado Escotillas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            8. {!! Form::label('estado_escotillas', __('models/gtesh001s.fields.estado_escotillas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('estado_escotillas', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('estado_escotillas', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Estado Pasamanos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            9. {!! Form::label('estado_pasamanos', __('models/gtesh001s.fields.estado_pasamanos').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('estado_pasamanos', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('estado_pasamanos', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Estado De Ballestas Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            10. {!! Form::label('estado_de_ballestas', __('models/gtesh001s.fields.estado_de_ballestas').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('estado_de_ballestas', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('estado_de_ballestas', "0", null) !!} No
            </label>
        </div>
    </div>



</div>

<!-- Estado Escaleras Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            11. {!! Form::label('estado_escaleras', __('models/gtesh001s.fields.estado_escaleras').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('estado_escaleras', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('estado_escaleras', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Sistema De Frenos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            12. {!! Form::label('sistema_de_frenos', __('models/gtesh001s.fields.sistema_de_frenos').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('sistema_de_frenos', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('sistema_de_frenos', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Fugas De Aire Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            13. {!! Form::label('fugas_de_aire', __('models/gtesh001s.fields.fugas_de_aire').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('fugas_de_aire', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('fugas_de_aire', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>

</div>

<!-- Reflectantes 2 Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            14. {!! Form::label('reflectantes_2', __('models/gtesh001s.fields.reflectantes_2').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('reflectantes_2', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('reflectantes_2', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>

</div>

<!-- Neumaticos Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            15. {!! Form::label('neumaticos', __('models/gtesh001s.fields.neumaticos').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('neumaticos', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('neumaticos', "0", null) !!} No
            </label>
        </div>
    </div>

    <br>


</div>

<div class="col-12">
    <!-- Neumatico Malo 001 Field -->
    <div class="d-inline-block ml-5">
        {!! Form::label('neumatico_malo_001', __('models/gtesh001s.fields.neumatico_malo_001').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_001', 0) !!}
            {!! Form::checkbox('neumatico_malo_001', '1', null, ['id' => 'neumatico_malo_00_checkbox1', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_001 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 002 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_002', __('models/gtesh001s.fields.neumatico_malo_002').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_002', 0) !!}
            {!! Form::checkbox('neumatico_malo_002', '1', null, ['id' => 'neumatico_malo_00_checkbox2', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_002 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
        <div class="border-bottom position-absolute" style="width: 60px; transform: translate(15px, -25px);"></div>
    </div>


    <!-- Neumatico Malo 003 Field -->
    <div class="d-inline-block ml-2">
        {!! Form::label('neumatico_malo_003', __('models/gtesh001s.fields.neumatico_malo_003').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_003', 0) !!}
            {!! Form::checkbox('neumatico_malo_003', '1', null, ['id' => 'neumatico_malo_00_checkbox3', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_003 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 004 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_004', __('models/gtesh001s.fields.neumatico_malo_004').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_004', 0) !!}
            {!! Form::checkbox('neumatico_malo_004', '1', null, ['id' => 'neumatico_malo_00_checkbox4', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_004 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>
</div>

<div class="col-12">
    <!-- Neumatico Malo 005 Field -->
    <div class="d-inline-block ml-5">
        {!! Form::label('neumatico_malo_005', __('models/gtesh001s.fields.neumatico_malo_005').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_005', 0) !!}
            {!! Form::checkbox('neumatico_malo_005', '1', null, ['id' => 'neumatico_malo_00_checkbox5', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_005 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 006 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_006', __('models/gtesh001s.fields.neumatico_malo_006').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_006', 0) !!}
            {!! Form::checkbox('neumatico_malo_006', '1', null, ['id' => 'neumatico_malo_00_checkbox6', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_006 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
        <div class="border-bottom position-absolute" style="width: 60px; transform: translate(15px, -25px);"></div>
    </div>


    <!-- Neumatico Malo 007 Field -->
    <div class="d-inline-block ml-2">
        {!! Form::label('neumatico_malo_007', __('models/gtesh001s.fields.neumatico_malo_007').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_007', 0) !!}
            {!! Form::checkbox('neumatico_malo_007', '1', null, ['id' => 'neumatico_malo_00_checkbox7', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_007 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 008 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_008', __('models/gtesh001s.fields.neumatico_malo_008').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_008', 0) !!}
            {!! Form::checkbox('neumatico_malo_008', '1', null, ['id' => 'neumatico_malo_00_checkbox8', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_008 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>
</div>

<div class="col-12">
    <!-- Neumatico Malo 009 Field -->
    <div class="d-inline-block ml-5">
        {!! Form::label('neumatico_malo_009', __('models/gtesh001s.fields.neumatico_malo_009').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_009', 0) !!}
            {!! Form::checkbox('neumatico_malo_009', '1', null, ['id' => 'neumatico_malo_00_checkbox9', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_009 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 010 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_010', __('models/gtesh001s.fields.neumatico_malo_010').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_010', 0) !!}
            {!! Form::checkbox('neumatico_malo_010', '1', null, ['id' => 'neumatico_malo_01_checkbox0', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_010 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
        <div class="border-bottom position-absolute" style="width: 60px; transform: translate(15px, -25px);"></div>
    </div>


    <!-- Neumatico Malo 011 Field -->
    <div class="d-inline-block ml-2">
        {!! Form::label('neumatico_malo_011', __('models/gtesh001s.fields.neumatico_malo_011').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_011', 0) !!}
            {!! Form::checkbox('neumatico_malo_011', '1', null, ['id' => 'neumatico_malo_01_checkbox1', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_011 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>


    <!-- Neumatico Malo 012 Field -->
    <div class="d-inline-block mr-5">
        {!! Form::label('neumatico_malo_012', __('models/gtesh001s.fields.neumatico_malo_012').':', ['class' => 'd-none']) !!}
        <label class="checkbox-inline">
            {!! Form::hidden('neumatico_malo_012', 0) !!}
            {!! Form::checkbox('neumatico_malo_012', '1', null, ['id' => 'neumatico_malo_01_checkbox2', 'class' => 'd-none']) !!}
        </label>
        <div class="border {{ ($gtesh001->neumatico_malo_012 == true ? 'bg-primary' : '') }}" style="width:15px; height: 50px;" onclick="checkToggle(this)"></div>
    </div>
</div>


<!-- Dos Neumaticos De Repuesto Field -->
<div class="form-group col-sm-12">
    <div class="row">
        <div class="col">
            16. {!! Form::label('dos_neumaticos_de_repuesto', __('models/gtesh001s.fields.dos_neumaticos_de_repuesto').':') !!}
        </div>
        <div class="col">
            <label class="radio-inline">
                {!! Form::radio('dos_neumaticos_de_repuesto', "1", null) !!} Si
            </label>

            <label class="radio-inline">
                {!! Form::radio('dos_neumaticos_de_repuesto', "0", null) !!} No
            </label>
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('turnoChofers.edit', [$programacion->turnoChofer->id]) }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>


<script>
    function checkToggle(element) {
        console.log(element);
        let checkbox = element.previousElementSibling.childNodes[3]
        console.log(checkbox);
        checkbox.checked = !checkbox.checked;
        if(checkbox.checked ) {
            element.classList.add('bg-primary')
        } else {
            element.classList.remove('bg-primary')
        }
    }
</script>
