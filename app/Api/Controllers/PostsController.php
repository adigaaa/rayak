<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Api\Controllers;

use App\Api\BaseController;
/**
 * Description of PostsController
 *
 * @author ABAZA
 */
class PostsController extends BaseController 
{
    //put your code here
    public function index()
    {
        return $this->response->error('This is an error.123', 404);
    }
}
