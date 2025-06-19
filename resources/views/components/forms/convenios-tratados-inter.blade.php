<div class="form">
    <h4 class="form-title"><i class="fa fa-handshake-o"></i> Campos específicos para Convenios y Tratados</h4>
    <div class="form-content">
        <div class="form-group form-group__50">
            <label for="convenio_nombre" class="form-label">Nombre del Convenio</label>
            <input
                type="text"
                id="convenio_nombre"
                name="convenio_nombre"
                class="form-input"
                placeholder="Nombre completo del convenio"
                value="{{ old('convenio_nombre', $convenioNombre ?? '') }}"
            >
        </div>

        <div class="form-group form-group__50">
            <label for="convenio_pais" class="form-label">País</label>
            <input
                type="text"
                id="convenio_pais"
                name="convenio_pais"
                class="form-input"
                placeholder="País con el que se firma"
                value="{{ old('convenio_pais', $convenioPais ?? '') }}"
            >
        </div>
    </div>

    <div class="form-content">
        <div class="form-group form-group__50">
            <label for="convenio_fecha" class="form-label">Fecha de Firma</label>
            <input
                type="date"
                id="convenio_fecha"
                name="convenio_fecha"
                class="form-input"
                value="{{ old('convenio_fecha', $convenioFecha ?? '') }}"
            >
        </div>

        <div class="form-group form-group__50">
            <label for="convenio_aprobacion" class="form-label">Aprobación del Senado</label>
            <select
                id="convenio_aprobacion"
                name="convenio_aprobacion"
                class="form-input"
            >
                <option value="pendiente" {{ (old('convenio_aprobacion', $convenioAprobacion ?? '') == 'pendiente') ? 'selected' : '' }}>Pendiente</option>
                <option value="aprobado" {{ (old('convenio_aprobacion', $convenioAprobacion ?? '') == 'aprobado') ? 'selected' : '' }}>Aprobado</option>
                <option value="rechazado" {{ (old('convenio_aprobacion', $convenioAprobacion ?? '') == 'rechazado') ? 'selected' : '' }}>Rechazado</option>
            </select>
        </div>
    </div>
</div>

