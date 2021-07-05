@extends('layouts.windmill')
@section('contenido')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Inicio
</h2>
<div class="grid gap-6 mb-8 md:grid-cols-1">
    <img src="{{ asset('img/redbull_bg.jpg') }}" class="object-contain md:object-scale-down">
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <h4 class="mb-4 font-bold text-gray-600 dark:text-gray-300">
        ¿Qu&eacute; es la FIA?
      </h4>
      <p class="text-gray-600 dark:text-gray-400">
        La Federación Internacional del Automóvil conocida también como FIA (en francés, Fédération Internationale de l'Automobile), es una organización sin ánimo de lucro con sede en la Plaza de la Concordia de París, Francia, y que incluye 268 organizaciones automovilísticas de 143 países. Fundada en 1904, es mundialmente conocida por regular las competiciones de automovilismo más importantes del mundo, pero su ámbito de aplicación incluye todos los aspectos del automóvil, las carreteras, la movilidad, el medio ambiente o seguridad vial.
      </p>
    </div>
    <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
      <h4 class="mb-4 font-semibold">
        Historia
      </h4>
      <p>
        <ul>
            <li>La Association Internationale des Automobile Clubs Reconnus (AIACR) fue fundada en París el 20 de junio de 1904.<br></li>

            <li>En 1922, la FIA delegó la organización de carreras de automóviles a la Commission Sportive Internationale (CSI), un comité autónomo que más tarde se convirtió en la Fédération Internationale du Sport Automobile (FISA).<br></li>

            <li>En 1950, organizaron el primer campeonato mundial automovilístico, actualmente conocido como la Fórmula 1.<br></li>

            <li>En 1973, la FIA extendió su alcance para incluir carreras de rally; el Rally de Montecarlo fue el primer evento de ese tipo organizado por la FIA.<br></li>

            <li>Una reestructuración de la FIA en 1993 dio lugar a la desaparición de la FISA, poniendo las carreras de coches bajo la administración directa de la FIA.<br></li>

            <li>En 2011 la FIA fue reconocida por el Comité Olímpico Internacional por un período provisional de dos años e invitó a la misma que presentara una comisión de atletas para que esta fuese permanente.<br></li>

            <li>En 2017 creó su Salón de la Fama.</li>
        </ul>
      </p>
    </div>
</div>
<div class="grid gap-6 mb-8 md:grid-cols-2">
    <div><img src="{{ asset('img/mclaren_bg.jpg') }}" class="object-contain"></div>
    <div><img src="{{ asset('img/mercedes_bg.jpg') }}" class="object-contain"></div>
</div>
	
@endsection