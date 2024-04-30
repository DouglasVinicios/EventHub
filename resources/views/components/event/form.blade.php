<div class="card event-shadow">
    <div class="pt-2 px-3">
        <div class="my-2">
            {{-- TITLE --}}
            <input type="text" id="title" name="title" class="form-control" maxlength="50" placeholder="Titulo">
        </div>
        <div class="my-2">
            {{-- SUBTITLE --}}
            <input type="text" id="subtitle" name="subtitle" class="form-control" maxlength="30" placeholder="Subtitulo">
        </div>
    </div>
    <div class="card-body overflow-auto">
        <div class="form-floating">
            {{-- DESCRIPTION --}}
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" cols="30" rows="10" maxlength="1000" placeholder="Descrição do evento..."></textarea>
        </div>
    </div>
    <div class="card-body d-flex flex-row-reverse">
        <a href="#" class="btn btn-sm btn-primary">Adicionar</a>
    </div>
</div>