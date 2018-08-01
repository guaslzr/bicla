<?php

    class Marca{
        private $id;
        private $nombre;

        public function __construct($nombre, $id = null)
        {
            $this->id = $id;
            $this->nombre=$nombre;
            
        }

        //Getters & Setters
        public function getId()
        {
            return $this->id;
        }
    
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getNombre()
        {
            return $this->nombre;
        }
    
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
    }