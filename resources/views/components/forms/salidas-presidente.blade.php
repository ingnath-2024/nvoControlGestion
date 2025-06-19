<div class="form">
    <h4 class="form-title"><i class="fa fa-plane"></i> Campos específicos para Salidas del Presidente</h4>
    <div class="form-content">
        <div class="form-group form-group__50">
            <label for="salida_numero" class="form-label">Número de Salida</label>
            <input
                type="text"
                id="salida_numero"
                name="salida_numero"
                class="form-input"
                placeholder="Número de salida"
                value="{{ old('salida_numero', $salidaNumero ?? '') }}"
            >
        </div>

        <div class="form-group form-group__50">
            <label for="salida_fecha" class="form-label">Fecha de Publicación</label>
            <input
                type="date"
                id="salida_fecha"
                name="salida_fecha"
                class="form-input"
                value="{{ old('salida_fecha', $salidaFecha ?? '') }}"
            >
        </div>
    </div>

    <div class="form-group">
        <label for="salida_liga" class="form-label">Liga de Documento</label>
        <div class="form-group__right">
            <input
                type="text"
                id="salida_liga"
                name="salida_liga"
                class="form-input"
                placeholder="//10.2.22.153/doc/2023/01/02/001.pdf"
                value="{{ old('salida_liga', $salidaLiga ?? '') }}"
            >
            <button type="button" class="btn btn-default">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</div>

