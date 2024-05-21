
@php
    $direction = isset($direction) ? $direction : '';
@endphp

<a @isset($redirect) href="{{ $redirect }}" @elseif(isset($name)) href="#{{ $name }}" @endisset>
    <button @isset($type) type="{{ $type }}" @else type="button" @endisset
        class="btn btn-sm border border-0 text-start w-100 icon-increase px-0">

        <div class="d-flex {{ $direction }} align-items-center column-gap-2">
            @isset($icon)
                <i class="{{ $icon }}"></i>
            @endisset

            @isset($name)
                <span>{{ $name }}</span>
            @endisset
        </div>
    </button>
</a>