<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

Route::filter('auth', function () {
    Redirect::to('?m=index&a=index');
});