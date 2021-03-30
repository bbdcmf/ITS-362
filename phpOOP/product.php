<?php

	// the product class definition
	class Product
	{
	
		//declare private variables
		private $productID, $productName;
		
		//default constructor
		function __construct()
		{
		
			$this->productID = "";
			
			$this->productName = "";
		
		}
		
		function setID($id)
		{
		
			$this->productID = $id;
		
		}
		
		function getID()
		{
		
			return $this->productID;
		
		}
		
		function setName($name)
		{
		
			$this->productName = $name;
		
		}
		
		function getName()
		{
		
			return $this->productName;
		
		}
		
		function display()
		{
		
			echo ("Product ID: " . $this->getID() . "<br />");
			echo ("Prodcut Name: " . $this->getName() . "<br />"); 
		
		}
	
	}

?>
