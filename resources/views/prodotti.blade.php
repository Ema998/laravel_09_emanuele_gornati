<x-layout>
    <x-header>
        <h1 class="text-center">I NOSTRI PRODOTTI</h1>
    </x-header>
    <button>
        <a href="{{ route('aggiungiProdotto') }}"class="btn btn-primary">Aggiungi Prodotto</a>
    </button>
    @foreach ($prodotti as $prodotto )
        <div class="col-12 col-md-6">
            <x-prodotti-card 
                :prodotto = "$prodotto">             
            </x-prodotti-card>  
        </div>
    @endforeach
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if( $errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>