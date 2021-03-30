<?php 

class Flight
{ 
	//tested with postman
	/* {
		"flightlength": durationofchoice
	} */

  
	private $lengthofFlight;
	private $movieDuration;
	public $isDurationCorrect = false;

    public function getLengthOfFlight()
	{
		return $this->lengthofFlight;
	}

	public function getMovieDuration()
	{
		return $this->movieDuration;
	}


	public function __construct($lengthOfFlight, $movieDuration)
	{
      $this->lengthofFlight = $lengthOfFlight;
	  $this->movieDuration = $movieDuration;

	 //boolean that will return two movies from the array $movieDuration
	 //sum of $movieDuration = $lengthOfFlight;

	  $mDuration = $this->getMovieDuration();
	  $fLength = $this->getLengthOfFlight();
	  

	  if($mDuration[0] + $mDuration[1] == $fLength)
	   {
	      echo "Numbers: ". $mDuration[0]. " , ". $mDuration[1];
		  $this->isDurationCorrect = true;
	   }
	   else if($mDuration[2] + $mDuration[3] == $fLength)
	   {
	      echo "Numbers: ". $mDuration[2]. " , ". $mDuration[3];
		  $this->isDurationCorrect = true;
	   }
	   else if($mDuration[4] + $mDuration[5] == $fLength)
	   {
	      echo "Numbers: ". $mDuration[4]. " , ". $mDuration[5];
		  $this->isDurationCorrect = true;
	   }
	   else
	   {
		 echo 'No movies fitting the flight duration.';
		 $this->isDurationCorrect = false;
	   }
	 

	}
	
	


}
//request
if($_SERVER['REQUEST_METHOD'] !== 'POST')
{
   echo "Invalid request method";
   exit;
}

$input = fopen('php://input', 'r');
$handler = stream_get_contents($input);
//decode
$data = json_decode($handler);


$flight = new Flight($data->flightlength, [60,30,20,60,60,60]);


?>