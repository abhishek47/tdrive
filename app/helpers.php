<?php





function getVehicleClass($index = null)
{	
	$vehicleClasses = ['Moped', 'Motorcycle', 'Car', 'Luxury Car', 'Bus', 'Van/Mini-Van', 'Pickup', 'Tempo', 'Truck'];
   if(isset($index))
   {
   		 return $vehicleClasses[$index];
   } else {
     return $vehicleClasses;
   }
   

  
}


function getFuelType($index = null)
{	
	$fuelTypes = ['Petrol', 'Deisel', 'CNG'];
   if(isset($index))
   {
   		 return $fuelTypes[$index];
   } else {
     return $fuelTypes;
   }
   

  
}

