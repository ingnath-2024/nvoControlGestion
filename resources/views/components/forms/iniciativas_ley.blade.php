<div class="form">
    <h4 class="form-title"><i class="fa fa-balance-scale"></i> Campos específicos para Iniciativas de Ley</h4>
    <div class="form-content">
        <div class="form-group form-group__50">
            <label for="iniciativa_numero" class="form-label">Número de Iniciativa</label>
            <input
                type="text"
                id="iniciativa_numero"
                name="iniciativa_numero"
                class="form-input"
                placeholder="Número de iniciativa"
                value="{{ old('iniciativa_numero', $iniciativaNumero ?? '') }}"
            >
        </div>

        <div class="form-group form-group__50">
            <label for="iniciativa_tipo" class="form-label">Tipo de Iniciativa</label>
            <select
                id="iniciativa_tipo"
                name="iniciativa_tipo"
                class="form-input"
            >
                <option value="">Seleccione tipo</option>
                <option value="reforma" {{ (old('iniciativa_tipo', $iniciativaTipo ?? '') == 'reforma') ? 'selected' : '' }}>Reforma</option>
                <option value="adicion" {{ (old('iniciativa_tipo', $iniciativaTipo ?? '') == 'adicion') ? 'selected' : '' }}>Adición</option>
                <option value="derogacion" {{ (old('iniciativa_tipo', $iniciativaTipo ?? '') == 'derogacion') ? 'selected' : '' }}>Derogación</option>
                <option value="nueva" {{ (old('iniciativa_tipo', $iniciativaTipo ?? '') == 'nueva') ? 'selected' : '' }}>Nueva Ley</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="iniciativa_ley" class="form-label">Ley que modifica</label>
        <input
            type="text"
            id="iniciativa_ley"
            name="iniciativa_ley"
            class="form-input"
            placeholder="Nombre de la ley"
            value="{{ old('iniciativa_ley', $iniciativaLey ?? '') }}"
        >
    </div>
</div>

