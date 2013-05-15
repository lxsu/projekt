<?php
/* -----------------------------------------------------------------------------
CCIndex.php

Beskrivning: CCIndex
<<<<<<< HEAD
Skapare: RaJ & Mos
=======
Skapare: RaJ
>>>>>>> 18f8162ca307fff2f09a7621429d7af5f4a70daa

Vettiga länkar:
http://php.net/manual/en/language.constants.predefined.php

================================================================================
------------------------------------------------------------------------------*/
<<<<<<< HEAD
class CCIndex extends CObject implements IController {

  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
  }
  

  /**
   * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {			
    $this->views->SetTitle('Index Controller');
    $this->views->AddInclude(__DIR__ . '/index.tpl.php', array('menu'=>$this->Menu()));
  }


  /**
   * A menu that shows all available controllers/methods
   */
  private function Menu() {	
    $items = array();
    foreach($this->config['controllers'] as $key => $val) {
      if($val['enabled']) {
        $rc = new ReflectionClass($val['class']);
        $items[] = $key;
        $methods = $rc->getMethods(ReflectionMethod::IS_PUBLIC);
        foreach($methods as $method) {
          if($method->name != '__construct' && $method->name != '__destruct' && $method->name != 'Index') {
            $items[] = "$key/" . mb_strtolower($method->name);
          }
        }
      }
    }
    return $items;
  }
  
} 
=======

class CCIndex implements IController {

    public function Index() {   
    global $ly;
         
       	$ly->data['title'] = "The Index Controller";
       }

    } 
>>>>>>> 18f8162ca307fff2f09a7621429d7af5f4a70daa
