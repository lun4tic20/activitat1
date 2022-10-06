<?php

    //render template dashboard
    require 'src/render.php';
    $title="Dashboard";

    echo render('dashboard',['title'=>$title]);