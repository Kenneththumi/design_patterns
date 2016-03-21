<?php
/**
 * Cytonn Technologies
 * @author Kenneth Thumi<kthumi.cytonn.com>
 *
 */
class average{
      private $sum;
      private $average;
      /*
       *constructor 
       *@param  [int]
       * @return [int]
      */
      public function __construct($value1,$value2,$value3,$value4){
      	    $this->sum=$value1+$value2+$value3+$value4;
      	    $this->average=$this->sum/4;
      }
      //display output
      public function displayAv(){
      	    return 'The average is '.$this->average.' and the sum is '.$this->average;
      }
}
//factory method
class averageFactory{
	public static function create($value1,$value2,$value3,$value4){
		return new average($value1,$value2,$value3,$value4);
	}
}
// have the factory create the naming object
$avSum=averageFactory::create(7,9,11,5);
echo $avSum->displayAv(); //outputs the average
?>

