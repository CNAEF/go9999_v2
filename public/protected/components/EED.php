<?php

/**
 * Tools Class for date function
 * @author Lee
 */
class EED{
	
	/**
	 * format date.
	 * @param number $type
	 * 1 - current date, 2 - change days
	 * @param sting $op // the operate string
	 * @param datetime $sd source date
	 * 
	 * support source date
	 * @return string
	 */
	public static function f($type = 1, $op = null, $sd = '', $format= ''){
	    if (empty($format)) {
    	    $format = 'Y-m-d H:i:s';
	    }
	
	    if ($type == 1) {
	        $dateString = date($format);
	    }
	
	    if ($type == 2) {
	        if (empty($sd)) {
	        	$sd = date($format);
	        }
	        $dateString = date($format, strtotime($op, strtotime($sd)));
	    }
	
// 	    var_dump($dateString);exit;
	    return $dateString;
	}
	
}