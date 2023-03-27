<?php

class uyeler extends Controller
{

    public function index()
    {

        $users = $this->model('users');
        $result = $users->getAll();

    $this->view('uyeler', [
            'users' => $result['result'],
            'data' => "buradayım"
        ]);
    }

    public function post()
    {
        print_r("Merve");
    }

}
?>