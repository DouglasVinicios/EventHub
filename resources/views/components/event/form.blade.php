
@props(['event' => new \App\Models\Event()])

<div class="card event-form event-shadow">
    <form method="post" novalidate>
        @csrf
        <input type="hidden" name="id" value="{{ $event->id }}">
        <div class="pt-2 px-3">
            <div class="my-2">
                {{-- TITLE --}}
                <input type="text" name="title" class="form-control" maxlength="50" placeholder="Titulo" value="{{ $event->title }}" required>
                <div class="invalid-feedback">
                    Campo necessário.
                </div>
            </div>
            <div class="my-2">
                {{-- SUBTITLE --}}
                <input type="text" name="subtitle" class="form-control" maxlength="30" placeholder="Subtitulo" value="{{ $event->subtitle }}" required>
                <div class="invalid-feedback">
                    Campo necessário.
                </div>
            </div>
        </div>
        <div class="card-body overflow-auto">
            <div class="position-relative">
                {{-- DESCRIPTION --}}
                <textarea
                    name="description"
                    class="form-control"
                    cols="30"
                    rows="10"
                    maxlength="1000"
                    placeholder="Descrição do evento..."
                    required
                >{{ $event->description }}</textarea>
                <div class="invalid-feedback">
                    Campo é necessário.
                </div>
            </div>
        </div>
        <div class="card-body pt-1">
            <x-option type="submit" direction="flex-row-reverse" icon="fa-solid fa-pen fa-lg text-primary"/>
        </div>
    </form>
</div>