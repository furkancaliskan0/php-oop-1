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
        public $language;

        public function __construct($title, $year, $director, $language)
        {
            $this->title = $title;
            $this->year = $year;
            $this->director = $director;
            $this->language = $language;
        }

        public function getDescription()
        {
            return "<h2> Title: " . $this->title . "</h2>"
                . "<h2> Year: " . $this->year . "</h2>"
                . "<h2> Director: " . $this->director . "</h2>"
                . "<h2> Language: (" . $this->language . ") </h2>";
        }
    }


    $movies = [
        new Movie("The Shawshank Redemption", "1994", "Frank Darabont", "English"),
        new Movie("The Godfather", "1972", "Francis Ford Coppola", "English")
    ];

    foreach ($movies as $movie) {
        echo "<h1>Movies</h1>";

        echo $movie->getDescription();
    }
    ?>


</body>

</html>