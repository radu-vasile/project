<?php

class CustomerController extends baseController
{
    public function index($data)
    {   
        $this->render('customer_index.html',$data);
    }
}
