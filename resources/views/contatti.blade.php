<x-layout>
    <header>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form method="POST" action="{{ route('invio_email') }}" class="d-flex flex-column mt-5">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white ">Nome</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white">Email</label>
                <input type="email" name="email" class="form-control " id="exampleInputPassword1">
            </div>
            <div class="mb-3 ">
                <label for="testo" class="form-label text-white">Scrivi il messaggio</label>
                <textarea name="descrizione" id="testo" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </header>
</x-layout>
