<?php

    class Prodcuto{
        private $id;
        private $nombre;
        private $precio;
        private $stock;
        //ESTO NOSE SI VA
        private $marca_id;
        private $tipo_id;

        public function __construct($nombre,$precio,$stock,$marca_id,$tipo_id, $id = null)
        {
            $this->id = $id;
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->stock=$stock;
            //
            $this->marca_id=$marca_id;
            $this->tipo_id=$tipo_id;
            
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

        public function getPrecio()
        {
            return $this->precio;
        }
    
        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }

        public function getStock()
        {
            return $this->stock;
        }
    
        public function setStock($stock)
        {
            $this->stock = $stock;
        }

        public function getMarca_id()
        {
            return $this->marca_id;
        }
    
        public function setMarca_id($marca_id)
        {
            $this->marca_id = $marca_id;
        }

        public function getTipo_id()
        {
            return $this->tipo_id;
        }
    
        public function setTipo_id($tipo_id)
        {
            $this->tipo_id = $tipo_id;
        }
    }