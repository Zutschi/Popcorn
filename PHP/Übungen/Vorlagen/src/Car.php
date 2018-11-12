<?php
class Car
    {
        protected $ps;
        

        public function __construct($ps)
        {
            $this->ps = $ps;
        }

        public function drive($location)
        {
            return("The car is driving with {$this->ps} PS in {$location}");
        }
    }