<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://picsum.photos/200/300" alt="Copertina di "{{ $nome }}">
  <div class="card-body">
    <h5 class="card-title">{{$prodotto['nome']}}</h5>
    <h3 class="card-title">{{$prodotto['prezzo']}}</h3>
    <p class="card-text">{{$prodotto['descrizione']}}</p>
    <a href="#" class="btn btn-primary">Scopri di più</a>
  </div>
</div>