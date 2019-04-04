<?php
class baseController{
        public function render($template, $data){
              $twig = new ViewClass();
            //  $view->render($data);
                $twig->render($template, $data);
        }     
}