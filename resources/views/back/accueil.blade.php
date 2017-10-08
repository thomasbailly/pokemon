@extends("back.backtemplate")
@section("content")
<p>BackOffice de notre site Apprends Ton Cours</p>
<ul>
    <li>
        <a href="https://adminlte.io/themes/AdminLTE/index.html" target="_blank">
            Documentation de AdminLte
        </a>
    </li>
    <li>
        Installation de la debug bar : <code>composer require barryvdh/laravel-debugbar --dev</code>
    </li>
    <li>
        Ajout du provider dans app/config : <code>Barryvdh\Debugbar\ServiceProvider::class</code>
    </li>    
 
</ul>
@stop