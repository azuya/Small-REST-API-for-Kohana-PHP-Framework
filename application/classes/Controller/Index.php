<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {
    
    public $template = 'v_index';
    
    public function before() 
        {
            parent::before();
            $this->template->title = "Kohana REST API";
            
            $this->template->menu = '
                    <div class="nav">
                        <ul>
                            <li><a href="/">Main page</a></li>
                            <li><a href="/api/737/">All items</a></li>
                            <li><a href="/api/737/get/2">Get one item - id2</a></li>
                            <li><a href="/api/737/active/3">Change status "active/deactive" - id3</a></li>
                        </ul>
                    </div>';
        }

    public function action_index()
	{
            $this->template->content = '
                    <div class="content">

                            <p>Main Page - content:</p>
                            
                            <p>Api access-key is static now - 737.</p>
                            <p>Data in JSON format.</p>
                            <p>All items of Database - url - /api/&#60;key&#62;/<br>
                            Get one item - url - /api/&#60;key&#62;/get/&#60;id&#62;<br>
                            Change status "active/deactive" - url - /api/&#60;key&#62;/active/&#60;id&#62;
                            </p>
                            

                    </div>
                
                ';
	}
        

}
