import axios from 'axios';

class Event {

    static _sending = false;
    static _original;

    static setSeding()
    {
        this._sending = !this._sending;
    }

    static loading(form)
    {
        this._original = form.querySelector('button[type="submit"] *').innerHTML;
        form.querySelector('button[type="submit"] *').innerHTML = `
            <div class="spinner-grow spinner-grow-sm text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        `;
    }

    static complete(form)
    {
        form.querySelector('button[type="submit"] *').innerHTML = this._original;
    }

    static async awaitForResponse(form, closure)
    {
        try {
            if(typeof closure !== "function") throw new Error(`Não é uma função válida ${closure}`);
            if(this._sending) return;

            this.setSeding();
            this.loading(form);
            await closure().then((res) => {
                console.log(res.data);
            })
            .catch((error) => {
                console.error('Erro ao criar o evento: ', error);
            })
            .finally(() => {
                this.setSeding();
                this.complete(form);
            });
        } catch (error) {
            console.error(error);
        }
    }

    static getData(form)
    {
        const _token = form.querySelector('input[name="_token"]').value;
        const id = form.querySelector('input[name="id"]').value;
        const title = form.querySelector('input[name="title"]').value;
        const subtitle = form.querySelector('input[name="subtitle"]').value;
        const description = form.querySelector('textarea[name="description"]').value;

        return {
            id, _token, title, subtitle, description 
        }
    }

    static save(form)
    {
        const data = this.getData(form);
        const url = data.id === null ? '/events' : '/events/' + data.id;
        const method = data.id === null ? 'post' : 'put';
        const callback = () => axios.request({ url, method, data });

        this.awaitForResponse(form, callback);
    }
}

(() => {
    const form = document.querySelector('.event-form form');
    if(form === null) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        e.stopPropagation();
        form.classList.add('was-validated');
        if (form.checkValidity()) Event.save(form);
    }, false);
    console.info('Formulario de evento habilitado');

})();

export default Event;