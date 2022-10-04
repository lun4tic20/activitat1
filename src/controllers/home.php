<?php

    //render template home
    require 'src/render.php';
    $title="Superman";
    $alumnes=[
        'Perico Palotes',
        'Aitor Tilla Frias',
        'Elva Ginaso',
        'Aitor Mentas Fuertes'
    ];
    echo render('home',['title'=>$title,
                        'alumnes'=>$alumnes]);