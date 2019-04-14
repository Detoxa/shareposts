<?php
    class Pages extends Controller {
        public function __construct(){
           
        }

        public function index(){
            
            $data = [
                'title'         => 'SharePosts',
                'description'  => 'Simple social network build on the simple MVC framework - just for learning',
            ];
            
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title'         => 'About',
                'description'   => 'App to share posts whit other users',
            ];

            $this->view('pages/about' , $data);
        }
    }