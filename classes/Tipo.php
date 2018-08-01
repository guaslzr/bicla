<?php

    class Tipo{
        private $id;
        private $tipo;

        public function __construct($tipo, $id = null)
        {
            $this->id = $id;
            $this->tipo=$tipo;
            
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

        public function getTipo()
        {
            return $this->tipo;
        }
    
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }
    }