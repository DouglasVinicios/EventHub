@php
    $attributes = $attributes->merge([
        'class' => $attributes->prepends('card event-shadow')
    ])
@endphp

<div {{ $attributes }}>
    <div class="card-header">
        <h5 class="card-title">Evento interessante</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Descrição do evento</h6>
    </div>
    <div class="card-body overflow-auto">
        <p class="card-text fst-italic opacity-75">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <div class="card-body d-flex flex-row-reverse">
        <a href="#" class="btn btn-sm btn-success">Saiba mais</a>
    </div>
</div>