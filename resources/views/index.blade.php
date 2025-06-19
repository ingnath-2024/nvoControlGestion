@extends('layouts.layoutMain')

@section('title')
    Pagina Principal
@endsection

@section('content')
    <section class="section">
        <h1 class="section-title">
            <i class="icon icon-book"></i> Control de Gestión
            Documental
        </h1>
        <p class="section-paragraph section-paragraph__lg">
        Sistema para el registro y seguimiento de documentos
        oficiales
        </p>

        <form class="form">
            <h3 class="form-title">Nuevo Documento</h4>
            <div class="form-content">
                <!-- Fila 1: Folio y Número Oficio Congreso -->
                <div class="form-group form-group__50">
                    <label class="form-label" for="folio">Folio</label>
                    <input class="form-input" type="text" id="folio" value="560"  />
                </div>

                <div class="form-group form-group__50">
                    <label class="form-label" for="Num_Oficio_Congreso">Número Oficio Congreso</label>
                    <input class="form-input" type="text" id="Num_Oficio_Congreso" value="" />
                </div>

                <!-- Fila 2: Congreso de Origen -->
                <div class="form-group">
                    <label class="form-label" for="Origen">Congreso de Origen</label>
                    <input class="form-input" type="text" id="Origen" value="" />
                </div>

                <!-- Fila 3: Tipo de Documento y Fecha de Ingreso -->
                <div class="form-group form-group__50">
                    <label class="form-label" for="Asunto">Tipo de Documento</label>
                    <select id="Asunto" class="form-input" onchange="showAdditionalFields(this.value)">
                        <option value="">Seleccione un documento</option>
                        <option value="1">Puntos de acuerdo Locales</option>
                        <option value="2">Puntos de acuerdo Federal</option>
                        <option value="3">Decretos</option>
                        <option value="4">Acuses</option>
                        <option value="5">Nombramientos y Ratificaciones</option>
                        <option value="6">Publicaciones DOF</option>
                        <option value="7">Comparecencias</option>
                        <option value="8">Comunicaciones (art. 27)</option>
                        <option value="9">Iniciativas de Ley</option>
                        <option value="10">Salidas del Presidente</option>
                        <option value="11">Convenios y Tratados Internacionales</option>
                        <option value="12">Salidas de Tropas</option>
                        <option value="13">Respuestas por la libre</option>
                    </select>
                </div>

                <div class="form-group form-group__50">
                    <label class="form-label" for="Fecha_Ingreso">Fecha de Ingreso</label>
                    <input type="date" class="form-input" id="Fecha_Ingreso" />
                </div>

                <!-- Fila 4: Asunto -->
                <div class="form-group">
                    <label class="form-label" for="ASUNTO_Principal">Asunto</label>
                    <textarea class="form-input form-input__textarea" id="ASUNTO_Principal" rows="3" placeholder="Acuerdo legislativo 043..."></textarea>
                </div>

                <!-- Campos dinámicos -->
                <div id="dynamicFieldsContainer" class="dynamic-fields hidden">
                    <!-- Puntos de acuerdo Locales (tipo 1) -->
                    <div id="dynamic-form-1" class="dynamic-form hidden">
                        @include('components.forms.punto-local-form')
                    </div>

                    <!-- Puntos de acuerdo Federal (tipo 2) -->
                    <div id="dynamic-form-2" class="dynamic-form hidden">
                        @include('components.forms.punto-federal')
                    </div>

                    <!-- Decretos (tipo 3) -->
                    <div id="dynamic-form-3" class="dynamic-form hidden">
                        @include('components.forms.decreto')
                    </div>

                    <!-- Acuses (tipo 4) - Si tienes un componente específico -->
                    <div id="dynamic-form-4" class="dynamic-form hidden">
                        <div class="form-group">
                            <label class="form-label">Detalles del Acuse</label>
                            <input type="text" class="form-input" placeholder="Número de acuse">
                        </div>
                    </div>

                    <!-- Nombramientos y Ratificaciones (tipo 5) -->
                    <div id="dynamic-form-5" class="dynamic-form hidden">
                        @include('components.forms.nombramiento')
                    </div>

                    <!-- Publicaciones DOF (tipo 6) -->
                    <div id="dynamic-form-6" class="dynamic-form hidden">
                        @include('components.forms.publicacion-dof')
                    </div>

                    <!-- Comparecencias (tipo 7) -->
                    <div id="dynamic-form-7" class="dynamic-form hidden">
                        @include('components.forms.comparecencia')
                    </div>

                    <!-- Comunicaciones (art. 27) (tipo 8) -->
                    <div id="dynamic-form-8" class="dynamic-form hidden">
                        @include('components.forms.comunicaciones')
                    </div>

                    <!-- Iniciativas de Ley (tipo 9) -->
                    <div id="dynamic-form-9" class="dynamic-form hidden">
                        @include('components.forms.iniciativas_ley')
                    </div>

                    <!-- Salidas del Presidente (tipo 10) -->
                    <div id="dynamic-form-10" class="dynamic-form hidden">
                        @include('components.forms.salidas-presidente')
                    </div>

                    <!-- Convenios y Tratados Internacionales (tipo 11) -->
                    <div id="dynamic-form-11" class="dynamic-form hidden">
                        @include('components.forms.convenios-tratados-inter')
                    </div>

                    <!-- Salidas de Tropas (tipo 12) - Si tienes un componente específico -->
                    <div id="dynamic-form-12" class="dynamic-form hidden">
                        <div class="form-group">
                            <label class="form-label">Detalles de Salida de Tropas</label>
                            <input type="text" class="form-input" placeholder="Destino de las tropas">
                        </div>
                    </div>

                    <!-- Respuestas por la libre (tipo 13) - Si tienes un componente específico -->
                    <div id="dynamic-form-13" class="dynamic-form hidden">
                        <div class="form-group">
                            <label class="form-label">Detalles de Respuesta</label>
                            <textarea class="form-input form-input__textarea" placeholder="Texto de la respuesta"></textarea>
                        </div>
                    </div>
                </div>               <!-- Botones -->
                <div class="form-group form-group__right" style="text-align: right; margin-top: var(--size-2xl);">
                    <button type="reset" class="btn btn-default">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Documento</button>
                </div>
            </div>
        </form>
    </section>

<script>
function showAdditionalFields(tipo) {
    const container = document.getElementById("dynamicFieldsContainer");

    // Si no hay tipo seleccionado, oculta el contenedor
    if (!tipo) {
        container.classList.add('hidden');
        container.classList.remove('visible');
        return;
    }

    // Oculta todos los formularios primero
    document.querySelectorAll('.dynamic-form').forEach(el => {
        el.classList.add('hidden');
    });

    // Muestra el contenedor
    container.classList.remove('hidden');
    container.classList.add('visible');

    // Muestra el formulario específico
    const selectedForm = document.getElementById(`dynamic-form-${tipo}`);
    if (selectedForm) {
        selectedForm.classList.remove('hidden');
    } else {
        console.warn(`Formulario no encontrado para tipo ${tipo}`);
    }
}
</script>
@endsection
