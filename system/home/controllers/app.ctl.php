<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: app.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */
class Ctl_App extends Ctl {
    
    
    public function index(){
        
         $this->system->config->get('mobile');
         $this->tmpl = 'app.html';
    }
    
   
}