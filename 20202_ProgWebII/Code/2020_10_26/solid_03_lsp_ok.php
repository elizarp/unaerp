<?php

interface Quadrilateral {
    public function setHeight($h);
   
    public function setWidth($w);
   
    public function getArea();
  }
   
  class Rectangle implements Quadrilateral{

  };
   
  class Square implements Quadrilateral{
      
  };