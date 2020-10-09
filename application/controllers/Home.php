<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $data;
    
    public function index()
    {   
        $this->data['folders'] = array();
        $map = directory_map('./images/');
        
        foreach(array_keys($map) as $file)
        {
            if(is_array($map[$file]))
            {
                array_push($this->data['folders'], substr($file,0,strlen($file)-1));
            }
        }
        
        $this->load->view('home',$this->data);
    } 
}
?>