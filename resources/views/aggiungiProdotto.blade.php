<x-layout>
    <x-header>
        <h1 class="text-center">AGGIUGNI UN PRODOTTO</h1>
    </x-header>
    <div class="col-12 col-md-6">
        <form>
        <div class="form-group" action="{{ route('aggiungiProdotto') }}" method="POST">
            @csrf
            <label for="nomeProdotto">Nome prodotto</label>
            <input type="text" class="form-control" id="nomeProdotto">
        </div>
        <div class="form-group">
            <label for="prezzoProdotto">Prezzo</label>
            <input type="text" class="form-control" id="prezzoProdotto">
        </div>
        <div class="form-group">
            <label for="descrizioneProdotto">Descrizione</label>
            <textarea class="form-control" id="descrizioneProdotto" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
</x-layout>
