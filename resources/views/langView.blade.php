<div>
    Hello your language is  {{ app()->getLocale() }}
    <br/>
    Avec session : your language is : {{session('langueDetected')}}
</div>
@if(session('langueDetected')=='fr')
<nav>
    <a href="">Bonjour :</a>
    <a href=""> {{session('langueDetected')=='fr'? "Ajouter":"Add"}}</a>
    <a href="">Afficher</a>
</nav>
@endif

@if(session('langueDetected')=='en')
<nav>
    <a href="">Hello :</a>
    <a href="">ADD</a>
    <a href="">Show</a>
</nav>
@endif