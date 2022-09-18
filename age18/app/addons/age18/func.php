<?php
use Tygh\Tygh;

function fn_age18_dispatch_assign_template() {

if (empty(Tygh::$app['session']['age_check'])) {
    Tygh::$app['view']->assign('show_window', 'accept');
} 
elseif (!empty(Tygh::$app['session']['age_check']) && Tygh::$app['session']['age_check']<18) {
        
    Tygh::$app['view']->assign('show_window', 'false');
    return array (CONTROLLER_STATUS_REDIRECT, '');
} else {
    Tygh::$app['view']->assign('show_window', 'good');  
}
}
