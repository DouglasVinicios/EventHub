@props([
    'events',
    'size' => 'col-sm-12',
    'direction' => '',
])

<div @class(['row gy-3',  $direction])>

    @for ($i = 0; $i < count($events); $i++)
        <div @class([$size])>
            <x-event class="event-small" :event="$events[$i]"/>
        </div>
    @endfor
</div>
