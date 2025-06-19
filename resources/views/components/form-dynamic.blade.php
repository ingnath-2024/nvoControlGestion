@switch($tipo)
    @case(1)
        @include('forms.punto-federal')
        @break

    @case(2)
        @include('forms.publicacion-dof')
        @break

    @case(3)
        <p>prueba form</p>
        {{--@include('forms.comunicaciones')--}}
        @break

    @case(4)
        <p>holas</p>
        {{--@include('forms.punto-local-form')--}}
        @break

    @case(5)
        @include('forms.iniciativas_ley')
        @break

    @case(6)
        @include('forms.decreto')
        @break

    @case(7)
        @include('forms.convenios-tratados-inter')
        @break

    @case(8)
        @include('forms.salidas-presidente')
        @break

    @case(9)
        @include('forms.comparecencia')
        @break

    @case(10)
        @include('forms.nombramiento')
        @break

    @default
        <p class="section-paragraph__lg">Selecciona un tipo de documento válido.</p>
@endswitch

