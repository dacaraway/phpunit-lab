<?php



class BookSearch{
    protected $list = array();

    public function __construct($list){
        $this->list = $list;
    }

    public function find($searchData, $bool = null){
        if($bool == true){
            foreach($this->list as $book){
                if(strcasecmp($book['title'],$searchData) == 0){
                    return $book;
                }
            }
            return [];
        }

        $found = array();
        foreach($this->list as $book){
            if(stripos($book['title'], $searchData) !== false){
                array_push($found, $book);
            }
        }
        return $found;

    }

}