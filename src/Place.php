<?php
    Class Place
    {
        private $city;
        private $year;
        private $length;
        private $rank;
        private $image;

        function __construct($city, $year, $length, $rank, $image)
        {
            $this->city = $city;
            $this->year = $year;
            $this->length = $length;
            $this->rank = $rank;
            $this->image = $image;
        }

        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }

        function setYear($new_year)
        {
            $user_year = (integer) $new_year;
            if ($user_year >= 1900 && $user_year <= 2015) {
                $this->year = $user_year;
            } else {
                echo "Please enter a valid year.";
            }
        }

        function setLength($new_length)
        {
            $this->length = (integer) $new_length;
        }

        function setRank($new_rank)
        {
            $this->rank = (integer) $new_rank;
        }

        function setImage($new_image)
        {
            $this->image = $new_image;
        }

        function getCity()
        {
            return $this->city;
        }

        function getYear()
        {
            return $this->year;
        }

        function getLength()
        {
            return $this->length;
        }

        function getRank()
        {
            return $this->rank;
        }

        function getImage()
        {
            return $this->image;
        }

        function save()
        {
            array_push($_SESSION['list_of_places'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_places'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_places'] = array();
        }
    }
?>
