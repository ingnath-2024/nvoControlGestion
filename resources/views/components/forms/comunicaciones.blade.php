<div class="form">
    <h4 class="form-title"><i class="fa fa-envelope-o"></i> Campos específicos para Comunicaciones</h4>
    <div class="form-content">
        <div class="form-group form-group__50">
            <label for="comunicacion_numero" class="form-label">Número de Comunicación</label>
            <input
                type="text"
                id="comunicacion_numero"
                name="comunicacion_numero"
                class="form-input"
                placeholder="Número de comunicación"
                value="{{ old('comunicacion_numero', $comunicacionNumero ?? '') }}"
            >
        </div>

        <div class="form-group form-group__50">
            <label for="comunicacion_fecha" class="form-label">Fecha de Publicación</label>
            <input
                type="date"
                id="comunicacion_fecha"
                name="comunicacion_fecha"
                class="form-input"
                value="{{ old('comunicacion_fecha', $comunicacionFecha ?? '') }}"
            >
        </div>
    </div>
</div>

