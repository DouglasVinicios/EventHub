@php
    $attributes = $attributes->merge([
        'class' => $attributes->prepends('card shadow')
    ])
@endphp

@props(['event'])

<div {{ $attributes }}>
    <div class="card-header">
        <h5 class="card-title">{{ $event->title }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $event->subtitle }}</h6>
    </div>
    <div class="card-body overflow-auto">
        <p class="card-text fst-italic opacity-75">{{ $event->description }}</p>
    </div>
    <div class="d-flex flex-row-reverse p-2">
        <a href="/events/{{ $event->id }}" class="btn btn-sm btn-outline-success">Saiba mais</a>
    </div>
</div>