<?php

class users extends Model {

    public function getAllMovie()
    {
        $query="SELECT * FROM  Movie";
        $user=parent::get($query);
        return $user;
    }

    // public function getAllCategory()
    //  {
    //    $query="SELECT * FROM  Category";
    //      $user=parent::get($query);
    //      return $user;
    //  }
}
?>