<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller {
    
    public function get_key()
        {
            $key = $this->request->param('key');

            if ($key != '737'){
                $response = Response::factory()->status(404);
                echo $response;
                exit("error key!");
            } 
        }
    
    public function action_index()
	{
            $this->get_key();
            
            $a = ORM::factory('Klass')->find_all();
            
            $a_arr = $a->as_array();
            $toarray = function($obj){return $obj->as_array();};
            $a_arr = array_map($toarray, $a->as_array());

            $this->response->body(json_encode($a_arr));
            $this->response->headers('content-type', 'json');
	}
        
    public function action_get()
	{
            $this->get_key();
        
            $id = $this->request->param('id');
            
            if (isset($id) && $id > 0){
                $a = ORM::factory('Klass', $id);

                $a_arr = $a->as_array();

                $this->response->body(json_encode($a_arr));
                $this->response->headers('content-type', 'json');
            }
	}
        
        public function action_active()
        {
            $this->get_key();
            
            $id = $this->request->param('id');
            if (isset($id) && $id > 0){
               $a = ORM::factory('Klass', $id)->as_array();
               
               if ($a['active'] != 1) {
                   ORM::factory('Klass', $id)->set('active', '1')->save();
                   $result = ["id" => $id,"result" => "active"];
                  
               } else {
                   ORM::factory('Klass', $id)->set('active', '0')->save();
                   $result = ["id" => $id,"result" => "deactive"];
               }

                $this->response->body(json_encode($result));
                $this->response->headers('content-type', 'json');
            }
        }
    
}
