<?php
class EEH {

    
    
    ////String
    /**
     * generate random string and return it.
     * @param number $len
     * @param number $type //1-only letter + number //2-full chars
     * @param number $prefixType //1 Y-M-D H:i:s //2-unixtimestamp
     * @return string
     */
    public static function randomString($len = 10, $type=1, $prefixType = 0, $prefixConnection = ''){
    	$string = '';
    	$prefix = '';
    	
    	for ($i = 0; $i<$len; $i++){
    	    if ($type == 1) {
    	        $t = rand(0, 2);
    	        if ($t==0) {
    	        	$string .= rand(0, 9);
    	        }
    	        if ($t==1) {
            		$string .= chr(rand(65, 90));
    	        }
    	        if ($t==2) {
            		$string .= chr(rand(97, 122));
    	        }
    	    }//only letter + number
    	    if ($type == 2) {
        		$string .= chr(rand(33, 126));
    	    }//full chars
    	}
    	
    	if ($prefixType == 1) {
    		$prefix = EED::f();
    	}
    	
    	if ($prefixType == 2) {
    		$prefix = time();
    	}
    	
    	if (!empty($prefix)) {
    		$prefix .= $prefixConnection;
    	}
    	
    	
    	
    	return $prefix.$string;
    }
    
    /**
     * for upload file, input MIME type return ext
     * @param MINETYPE $mineType
     * @return string
     */
    public static function uploadFileExt($mineType){
        $ext = 'jpg';
        
        $typelist=array();
        $typelist['image/gif'] = 'gif';
        $typelist['image/jpeg'] = 'jpg';
        $typelist['image/pjpeg'] = 'jpg';
        $typelist['image/png'] = 'png';
        $typelist['image/x-png'] = 'png';
        if (isset($typelist[$mineType])) {
        	$ext = $typelist[$mineType];
        }
        
        return $ext;
    }
    
    /**
     * generate string for access_token and refresh_token
     * rand 11 + unixtimestamp + rand 11 in all 32
     * @return string
     */
    public static function generateTokenString(){
    	$t = self::randomString(11);
    	$t .= strtotime(date('2014-m-d H:i:s')); //hardcode to 2014, to controller output length
    	$t .= self::randomString(11);
    	return $t;
    }
    
    /**
     * move upload file to save path
     * @param unknown $fileObj
     */
    public static function moveUploadFile($fileObj, $uploadPath = '') {
        //generate name
        $fileName = self::randomString(20, 1, 2, '_');
        $fileName .= '.'.self::uploadFileExt($fileObj['type']);
        
        //move file
        if (empty($uploadPath)) {
            $uploadPath = Yii::app()->params['uploadPath'];
        }
        
        //move file + return name
        if (move_uploaded_file($fileObj['tmp_name'], $uploadPath.$fileName)) {
            return $fileName;
        }else{
            return '';
        }
        
        
    }
    
}