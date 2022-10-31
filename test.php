<?php

for ($i = 1; $i <= 10; ++$i)
{
    echo $i.PHP_EOL;
}

if (1 == 1)
{
    echo 'rule applied';
    echo 'another rule applied'.PHP_EOL;
}

class Books
{
    // Member variables
    public $price;
    public $title;

    // Member functions
    public function setPrice($par)
    {
        $this->price = $par;
    }

    public function getPrice()
    {
        echo $this->price.'<br/>';
    }

    public function setTitle($par)
    {
        $this->title = $par;
    }

    public function getTitle()
    {
        $title = 'asdf';
        echo $this->title.PHP_EOL;
    }
}

$physics = new Books();
$maths = new Books();
$chemistry = new Books();

$physics->setTitle('Physics for High School');
// $chemistry->setTitle('Advanced Chemistry');
// $maths->setTitle('Algebra');

$physics->getTitle();
