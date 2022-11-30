<?php

class Collection{

protected array $items;

public function __construct(array $items)
{
    $this->items = $items;
}

public function sum($key){

return array_sum(array_map(function ($item) use ($key){

    return $item->$key;

}, $this->items));

}

}

class Video{

    public $title;
    public $lenght;

public function __construct($title, $lenght)
{
    $this->title = $title;
    $this->lenght = $lenght;
}    
}

$collection = new Collection([

new Video('Some video 1', 100),
new Video('Some video 2', 200),
new Video('Some video 3', 300)

]);

echo $collection->sum('lenght');