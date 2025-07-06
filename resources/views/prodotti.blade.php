<x-layout>
    <x-header>
        <h1 class="text-center">I NOSTRI PRODOTTI</h1>
    </x-header>
        <a href="{{ route('aggiungiProdotto') }}"class="btn btn-primary">Aggiungi Prodotto</a>
    @foreach ($prodotti as $prodotto )
        <div class="col-12 col-md-6">
            <x-prodottiCard :prodotto="$prodotto" />
        </div>
    @endforeach

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if( $errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>