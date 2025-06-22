<x-layout>
    <x-header>
        <h1 class="text-center">AGGIUGNI UN PRODOTTO</h1>
    </x-header>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('aggiungiProdottoSubmit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeProdotto">Nome prodotto</label>
                        <input type="text" name="nomeProdotto" value="{{ old('nomeProdotto') }}" class="form-control" id="nomeProdotto">
                    </div>
                    <div class="mb-3">
                        <label for="prezzoProdotto">Prezzo</label>
                        <input type="text" name="prezzo" value="{{ old('prezzo') }}" class="form-control" id="prezzoProdotto">
                    </div>
                    <div class="mb-3">
                        <label for="descrizioneProdotto">Descrizione</label>
                        <textarea class="form-control" name="descrizione" id="descrizioneProdotto" rows="3">{{ old('descrizione') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imgProdotto">Inserisci un'immagine</label>
                        <input type="file" name="img" class="form-control" id="imgProdotto">
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
