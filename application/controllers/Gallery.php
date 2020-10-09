<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    private $data;
    private $path = "images";

    public function index()
    {   
        $this->data['image_paths'] = array();
        $this->data['folders'] = array();
       
        // Sub-folders contained within the directory will be mapped as well. 
        $map = directory_map('./'.$this->path.'/');

        foreach(array_keys($map) as $folder)
        {
            if(is_array($map[$folder]))
            {
                array_push($this->data['folders'], substr($folder,0,strlen($folder)-1)); // Foldername/ to Foldername
            }
        }

        $folder_name = $this->uri->segment(2);

        if(isset($folder_name) && $folder_name != NULL && in_array($folder_name, $this->data['folders']))
        {    
            $this->getImages($folder_name);

            $this->data['gallery_name'] = $folder_name;
            $this->load->view('gallery',$this->data);
        }
        else{
            $this->data['error'] = "Please do not try different file names.";
            $this->load->view('gallery',$this->data);
        }    
    } 
    
    private function getImages($folder_name)
    {
        // hidden files will not be included
        $map = directory_map('./'.$this->path.'/'.$folder_name, FALSE, TRUE);

        foreach(array_keys($map) as $file)
        {
            if(!is_array($map[$file]))
            {
                if($this->isImage($map[$file]))
                    array_push($this->data['image_paths'], base_url().$this->path."/".$folder_name."/".$map[$file]);
            }
            else{
                $this->getImages($folder_name."/".$file);
            }
        }
    
        return;
    }

    // Method that checks whether the file is a picture
    private  function isImage($file) 
    {
        return preg_match("#\.(jpg|jpeg|gif|png|tif|tiff|eps|raw|cr2|nef|orf|sr2)$# i", $file);
    }
}
?>