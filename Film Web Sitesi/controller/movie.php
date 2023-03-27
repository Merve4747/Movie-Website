<?php

class movie extends Controller
{

    public function index()
    {
        $productModel=$this->model("users");
        $res=$productModel->getAllMovie();

        // $categoryModel=$this->model("users");
        // $res2=$categoryModel->getAllCategory();
        $this->view('public/home' , [
            "movies" => $res["result"],
            // "categories" => $res2["result"],
        
        ],
    
    );
    }
}