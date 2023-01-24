<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <style>
        * {
            background-color: blue;
            color: beige;

        }
    </style>

    <?php

    class Movie
    {
        public $title;
        public $year;
        public $director;

        public function __construct($title, $year, $director)
        {
            $this->title = $title;
            $this->year = $year;
            $this->director = $director;
        }

        public function getDescription()
        {
            return "Il film '$this->title' è stato prodotto nel $this->year il direttore del film è  $this->director .";
        }
    }

    $shawshank = new Movie("The Shawshank Redemption", 1994, "Frank Darabont");
    $godfather = new Movie("The Godfather", 1972, "Francis Ford Coppola");

    echo "<h1>";
    echo $shawshank->getDescription() . "<br>";
    echo "<br>";
    echo $godfather->getDescription() . "<br>";
    echo "</h1>";
    ?>

</body>

</html>