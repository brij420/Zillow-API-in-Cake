<?php
class  HelloworldController extends AppController {
   var $uses = null;
 
   public function hello_world() {
       $this->set('v', "hello world....");
    }
}
 
?>