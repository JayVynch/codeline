<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
* A simple class to carry out simple math operation of currencies
* of differnt types
*/
class CurrenciesOperations
{

	/**
	*  @var int
	*/
	public $currency;

	/**
	* create a new instance of currency
	*
	* @param string
	* @return void
	*/
	public function __construct($currency){
		$this->currency = $currency;
	}

	/**
	* Check if currency is same with stored currency
	*
	* @param string
	* @return bool
	*/
	public function isCurrencySame($currency)
	{
		return $this->currency == $currency ? true : false;
	}


	/**
	* A function responsible for multiplication of Two digits
	* of same currencies
	* @param $digit1 
	* @param $digit2
	* @return int $result
	*/
	public function multiply($digit1, $digit2,$currency1, $currency2)
	{
		//check if the digit is of same currency before perfoming task
		// if currency are not the same return false

		if ($this->isCurrencySame($currency1) != true ) {
			return false;
		}

		if ($this->isCurrencySame($currency2) != true ) {
			return  false;
		}

		//no issues with currencies perform task operation
		$result = $digit1 * $digit2;

		return $result;
	}

	/**
	* A function responsible for adding of Two digits
	* of same currencies
	* @param $digit1 
	* @param $digit2
	* @return int $result
	*/
	public function add($digit1, $digit2,$currency1, $currency2)
	{
		//check if the digit is of same currency before perfoming task
		// if currency are not the same return false

		if ($this->isCurrencySame($currency1) != true ) {
			return false;
		}

		if ($this->isCurrencySame($currency2) != true ) {
			return false;
		}

		//no issues with currencies perform task operation
		$result = $digit1 + $digit2;

		return $result;
	}

	/**
	* A function responsible for subtraction of Two digits
	* of same currencies
	* @param $digit1 
	* @param $digit2
	* @return int $result
	*/
	public function subtract($digit1, $digit2,$currency1, $currency2)
	{
		//check if the digit is of same currency before perfoming task
		// if currency are not the same return false

		if ($this->isCurrencySame($currency1) != true ) {
			return false;
		}

		if ($this->isCurrencySame($currency2) != true ) {
			return false;
		}

		//no issues with currencies perform task operation
		$result = $digit1 - $digit2;

		return $result;
	}

	/**
	* A function responsible for dividing of Two digits 
	* with same currencies
	* @param $digit1 
	* @param $digit2
	* @return int $result
	*/
	
	public function divide($digit1, $digit2,$currency1, $currency2)
	{
		//check if the digit is of same currency before perfoming task
		// if currency are not the same return false

		if ($this->isCurrencySame($currency1) != true ) {
			return false;
		}

		if ($this->isCurrencySame($currency2) != true ) {
			return false;
		}

		//no issues with currencies perform task operation
		$result =( $digit1 / $digit2);

		return $result;
	}
}