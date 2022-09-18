<?php

if ($mode === 'age18' ){
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
   
   if (!empty($_REQUEST['age_check'])) {

    $age = date($_REQUEST['age_check']);      

        $dateComps = date_parse($age);
        $year = $dateComps['year'];
        $month = $dateComps['month'];        

        $_year = date('Y', TIME);
        $_month = date('m-d', TIME);

        $age = $_year - $year;       

        if ($month > $_month) {
            $age--;
        }
        
        Tygh::$app['session']['age_check'] = $age ;
       
        if ($age<18) {
        
        Tygh::$app['view']->assign('show_window', 'false');

        } else {
        Tygh::$app['view']->assign('show_window', 'good');
        }
       
        if (!empty($_REQUEST['redirect_url'])) {
        return array (CONTROLLER_STATUS_OK, $_REQUEST['redirect_url']);
        }
    
    return array (CONTROLLER_STATUS_REDIRECT, $url);
    }
   }   
}


