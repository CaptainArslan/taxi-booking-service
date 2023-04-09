<?php

/**
 * Function to get Logo
 *
 * @return void
 */
function getLogo($param = 'dark')
{
    //param = dark or light
    if ($param == 'dark') {
        return asset('assets/img/logo-dark.png');
    } else {
        return asset('assets/img/logo-light.png');
    }
    // return asset('assets/img/logo-dark.png');
}

