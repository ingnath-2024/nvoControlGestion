<div class="form-section form-section__punto-federal">
    <h4 class="form-title"><i class="fa fa-file-text-o"></i> Campos específicos para Puntos de Acuerdo Federal</h4>

    <div class="form-content">
        <div class="form-group form-group__33">
            <label for="punto_numero" class="form-label">Número de Punto</label>
            <input type="text" id="punto_numero" class="form-input" placeholder="Número del punto de acuerdo">
        </div>

        <div class="form-group form-group__33">
            <label for="punto_fecha" class="form-label">Fecha de Ingreso</label>
            <input type="date" id="punto_fecha" class="form-input">
        </div>

        <div class="form-group form-group__33">
            <label for="punto_fecha_aprobacion" class="form-label">Fecha de Aprobación</label>
            <input type="date" id="punto_fecha_aprobacion" class="form-input">
        </div>

        <div class="form-group form-group__50">
            <label for="comision_congreso" class="form-label">Congreso que envía</label>
            <select id="comision_congreso" class="form-input">
                <option value="0">Seleccione un congreso</option>
                <option value="1">Aguascalientes</option>
                <option value="2">Sonora</option>
                <option value="3">Zacatecas</option>
            </select>
        </div>

        <div class="form-group form-group__50">
            <label for="comision_tipo" class="form-label">Comisión</label>
            <select id="comision_tipo" class="form-input">
                <option value="0">Seleccione una comisión</option>
                <option value="1">Senado</option>
                <option value="2">Diputado</option>
                <option value="3">Permanente</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Punto_Acuerdo" class="form-label">Contenido del Punto de Acuerdo</label>
            <textarea id="Punto_Acuerdo" rows="4" class="form-input" placeholder="Descripción del punto de acuerdo..."></textarea>
        </div>

        <div class="form-group form-group__33">
            <label for="Turnado" class="form-label">No. Oficio Turnado</label>
            <input type="text" id="Turnado" class="form-input" placeholder="Número Oficio Turnado">
        </div>

        <div class="form-group form-group__33">
            <label for="decreto_dof" class="form-label">Liga de Documento</label>
            <input type="text" id="decreto_dof" class="form-input" placeholder="//10.2.22.153/doc/2023/01/02/001.pdf">
        </div>

        <div class="form-group form-group__33">
            <label for="fecha_turnado" class="form-label">Fecha de Turnado</label>
            <input type="date" id="fecha_turnado" class="form-input">
        </div>

        <div class="form-group form-group__50">
            <label for="turnado_a" class="form-label">Turnado a:</label>
            <select id="turnado_a" class="form-input">
                <option value="0">Selecciona turnado</option>
                <option value="1">Senado</option>
                <option value="2">Diputado</option>
                <option value="3">Permanente</option>
                <option value="4">Aguascalientes</option>
                <option value="5">Sonora</option>
                <option value="6">Zacatecas</option>
            </select>
        </div>

        <div class="form-group form-group__50">
            <label for="fecha_rsp_apf" class="form-label">Respuesta APF</label>
            <input type="date" id="fecha_rsp_apf" class="form-input">
        </div>

        <div class="form-group">
            <label for="dependencia_respuesta" class="form-label">Dependencia Respuesta:</label>
            <select id="dependencia_respuesta" class="form-input">
                <option value="0">Selecciona Dependencia</option>
                <option value="1">Senado</option>
                <option value="2">Diputado</option>
                <option value="3">Permanente</option>
                <option value="4">Aguascalientes</option>
                <option value="5">Sonora</option>
                <option value="6">Zacatecas</option>
            </select>
        </div>
    </div>
</div>

