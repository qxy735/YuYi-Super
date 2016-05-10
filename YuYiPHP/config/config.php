<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

return array(
    'timezone' => 'PRC',

    'url_mode' => URL_MODE_NORMAL,

    'url_module' => 'm',

    'url_action' => 'a',

    'log_write_start' => false,

    'aliases' => array(
        'Config' => 'System\Support\Facades\Config',
        'Log' => 'System\Support\Facades\Log',
        'Route' => 'System\Support\Facades\Route',
        'Controller' => 'System\Routing\Controller',
        'Redirect' => 'System\Support\Facades\Redirect'
    )
);