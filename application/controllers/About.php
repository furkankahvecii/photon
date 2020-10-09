<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{
    private $path = "images";

    public function index()
    {   
        $this->data['folders'] = array();
        $map = directory_map('./'.$this->path.'/');
        foreach(array_keys($map) as $folder)
        {
            if(is_array($map[$folder]))
            {
                array_push($this->data['folders'], substr($folder,0,strlen($folder)-1)); // Foldername/ to Foldername
            }
        }
        $this->load->view('about', $this->data);
    } 
}
?>