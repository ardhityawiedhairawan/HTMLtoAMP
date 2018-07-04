<?php
/**
 * Ardhitya Wiedha Irawan @ 2018 
 * Convert HTML String to AMP Format
 * ardhityawiedhairawan@gmail.com
 */
class Htmltoamp 
{

	function convert($html){
		$amp = strip_tags($html,'<br><br/>');
		return $amp;
	}
}