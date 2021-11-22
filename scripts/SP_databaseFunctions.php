<?php
function logPage($pPageType,$pPage,$hitType){

	$refUrl ="";
	if(isset($_SERVER["HTTP_REFERER"])){
		$refUrl = $_SERVER["HTTP_REFERER"];
		if(strpos($refUrl,"http://www.weddigo.com/index.php?option=com_login")!==false){
			exit;
		}

	}
	if($refUrl=='http://www.weddigo.com/'){
		$refUrl = 'Direct hit';
	}

	$userAgent = $_SERVER["HTTP_USER_AGENT"];
	$pIp = $_SERVER["REMOTE_ADDR"];


	if($pIp != "127.0.0.1"){
		if(strpos($userAgent,"bot") !== false | strpos($userAgent,"spider") !== false){
			$userAgent = "Bot";
		}

		$pDay = date("d");
		$pMonth = date("m");
		$pYear = date("Y");
		$pTime = date("H\:i\:s");
		$uId = 0;
		$pRef = "";
		$refUrl = "";
		$GMT = "";
		$pLocalTime = "";

		if(isset($_SESSION["userID"]) && $_SESSION["userID"]!="" ){
			$uId = $_SESSION["userID"];
		}
		if(isset($_SESSION["pRef"])){
			$pRef = $_SESSION["pRef"];
			$pRef = str_replace("'","",$pRef);
		}
		$refUrl = "";
		if(isset($_SERVER['HTTP_REFERER'])){
			$refUrl = $_SERVER['HTTP_REFERER'];
			$refUrl = str_replace("'","",$refUrl);
			if(strlen($refUrl) > 255){
				$refUrl = left($refUrl,255);
			}
		}
		if(isset($_SESSION["GMT"])){
			$GMT = $_SESSION["GMT"];
			$GMT = str_replace("'","",$GMT);
		}
//		if(isset($_REQUEST["pLocalTime"])){
//			$pLocalTime = $_REQUEST["pLocalTime"];
//			$pLocalTime = str_replace("'","",$pLocalTime);
//		}

		$pString = "insert into sitehits (uId,pRef,pIp,refUrl,pDay,pMonth,pYear,pTime,pParam,pLocalTime,pPage,hitType,pPageType,userAgent) values (" . $uId . ",'" . $pRef . "','" . $pIp . "','" . $refUrl . "'," . $pDay . "," . $pMonth . "," . $pYear . ",'" . $pTime . "','" . $GMT . "','" . $pLocalTime . "','" . $pPage . "','" . $hitType . "','" . $pPageType . "','" . $userAgent . "')";


   $dblog = new mysqli($_SESSION["localcon"], "adminpedja", "nitrox", "login_weddigo");
   	if (mysqli_connect_errno()) {
		//printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$dblog->query($pString);

  }

}

function sanitise($val,$type,$param){

	//note for integers param is the default value and for strings it's the length
	if($type=='int'){
		if(is_numeric($val)){

				if($val>100000){
					return $param;
				}
				else
				{
					return $val;
				}
		}
		else
		{
			return $param;
		}
	}
	elseif($type=='str'){
		if(strlen($val)>$param){
			return left($val,$param);
		}
		else
		{
			return $val;
		}
	}
	elseif($type=='email'){
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
            if (preg_match($pattern, trim(strip_tags($val)))) {
                return trim(strip_tags($val));
            } else {
                return $param;
            }

	}


}

function checkLocal(){
	if (strlen(session_id()) < 1) {
		session_start();
	}
	//if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=='192.168.0.2'){

		// $_SESSION["localcon"] = "127.0.0.1";
		// $_SESSION["sqluser"] = "root";
	//}
//	else
//	{
		$_SESSION["localcon"] = "87.106.201.148";
		$_SESSION["sqluser"] = "adminpedja";
//	}

}

function checkLogin(){

	checkLocal();

	if (strlen(session_id()) < 1) {
		session_start();
	}
	if(isset($_SESSION["userId"])==false){
		header("Location: index.php");
		exit;
	}
	if(sanitise($_SESSION["userId"],'int',0)==0){
		header("Location: index.php");
		exit;
	}

}


function logOut(){

	$_SESSION["userId"] = false;


}

function checkSellerLoggedIn(){
	if(isset($_SESSION["sellerId"]) && $_SESSION["sellerId"] !=''){
		return 1;
	}else{
		return 0;
	}

}

function checkProMemberLogin(){
	if (strlen(session_id()) < 1) {
		session_start();
	}
	if(isset($_SESSION["proID"])==false){
		header("Location: index.php");
		exit;
	}
	if(sanitise($_SESSION["proID"],'int',0)==0){
		header("Location: index.php");
		exit;
	}

}

function getSassy(){

if (strlen(session_id()) < 1) {
    session_start();
}
	$siteName = "";
	if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=='192.168.0.2' ){
		$siteName = 'weddigo/';
		$_SESSION["localcon"] = "localhost";
	}
	else
	{
		$_SESSION["localcon"] = "87.106.201.148";
	}
	$domain = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $siteName;
	$_SESSION["currDom"] = $domain;
	$relative = 'sassy.asp';
	$pPath = $domain.$relative;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $pPath);
	curl_setopt($ch, CURLOPT_HEADER, false);
	if(isset($_SERVER['HTTP_COOKIE'])){
	curl_setopt($ch, CURLOPT_COOKIE, $_SERVER["HTTP_COOKIE"]);
	}

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
	curl_setopt($ch, CURLOPT_FORBID_REUSE, true);
	$xml = curl_exec($ch);
	curl_close($ch);
	unset($ch);


		if($xml!=''){
			$_SESSION["userID"] = $xml;
//			$lists = explode("~",$xml);
//			$keys = explode(",",$lists[0]);
//			$values = explode(",",$lists[1]);
//
//			$x = 0;
//			foreach($keys as $item)
//			{
//				$pname = $item;
//				$pval = $values[$x];
//				//echo $item . ":" . $values[$x] . "<br>";
//				$_SESSION[$pname] = $pval;
//				$x = $x+1;
//			}
		}else{
			$_SESSION["userID"] = "";
		}
//		if(isset($_SESSION["localcon"])){
//			$_SESSION["localcon"] = str_replace("'","",$_SESSION["localcon"]);
//		}
		//foreach($_SESSION as $key => $var) {
		 //echo $key ."=" . $var ."<br>";
		// }

		//echo $_SESSION['pVendor'];
}

function logBuyProduct($id){
	$pIp = $_SERVER["REMOTE_ADDR"];

	//if($pIp != "::1"){
			$db = new mysqli($_SESSION["localcon"], "adminpedja", "nitrox", "weddigo_shop");
			if (mysqli_connect_errno()) {
				//printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}

			$m = $db->query("select pOrdered from catalogue where ID=" . $id);
			$m = $m->fetch_assoc();
			$m = $m["pOrdered"];
			$m++;

			$db->query("update catalogue set pOrdered=" . $m . " where ID=" . $id);

			$m = $db->query("select pPopularity from catalogue where ID=" . $id);
			$m = $m->fetch_assoc();
			$m = $m["pPopularity"];
			$m = $m + 10;

			$db->query("update catalogue set pPopularity=" . $m . " where ID=" . $id);
	//}

}

function logViewProduct($id){
	$pIp = $_SERVER["REMOTE_ADDR"];

	//if($pIp != "::1"){
			$db = new mysqli($_SESSION["localcon"], "adminpedja", "nitrox", "weddigo_shop");
			if (mysqli_connect_errno()) {
				//printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}

			$m = $db->query("select pViewed,pPopularity from catalogue where ID=" . $id);
			$m = $m->fetch_assoc();
			$view = $m["pViewed"];
			$view++;

			$db->query("update catalogue set pViewed=" . $view . " where ID=" . $id);

			$pop = $m["pPopularity"];
			$pop++;

			$db->query("update catalogue set pPopularity=" . $pop . " where ID=" . $id);
	//}

}

function logLikeProduct($id){
	$pIp = $_SERVER["REMOTE_ADDR"];

	//if($pIp != "::1"){
			$db = new mysqli($_SESSION["localcon"], "adminpedja", "nitrox", "weddigo_shop");
			if (mysqli_connect_errno()) {
				//printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}

			$m = $db->query("select pLiked from catalogue where ID=" . $id);
			$m = $m->fetch_assoc();
			$m = $m["pLiked"];
			$m++;

			$db->query("update catalogue set pLiked=" . $m . " where ID=" . $id);

			$m = $db->query("select pPopularity from catalogue where ID=" . $id);
			$m = $m->fetch_assoc();
			$m = $m["pPopularity"];
			$m = $m + 5;

			$db->query("update catalogue set pPopularity=" . $m . " where ID=" . $id);
	//}

}

function right($value, $count){
    return substr($value, ($count*-1));
}

function left($string, $count){
    return substr($string, 0, $count);
}

function revertBaseValue($pString){

	if(! is_null($pString)){


			$pVal = str_replace("&quot;","\"",$pString);
			$pVal = str_replace("&#39;","'",$pVal);
			$pVal = str_replace("&#47;","/",$pVal);
			$pVal = str_replace("&amp;","&",$pVal);
			$pVal = str_replace("&gt;",">",$pVal);
			$pVal = str_replace("&lt;","<",$pVal);

			return $pVal;
	}else{
		return "";
	}
}


function formatdBaseValue($pString){

	if(! is_null($pString)){

			$pVal = str_replace("\"","&quot;",$pString);
			$pVal = str_replace("'","&#39;",$pVal);
			$pVal = str_replace("/","&#47;",$pVal);
			$pVal = str_replace("&amp;","&",$pVal);
			$pVal = str_replace(">","&gt;",$pVal);
			$pVal = str_replace("<","&lt;",$pVal);

			return $pVal;
	}else{
		return "";
	}
}

function checkSet($pVal){

	if(isset($_REQUEST[$pVal])){
		return $_REQUEST[$pVal];
	}else{
		return "";
	}

}
function notBlank($pVal){

	if(isset($pVal) && trim($pVal) != ""){
		return true;
	}
	else
	{
		return false;
	}

}

function isZero($pVal){

	if(isset($pVal) && $pVal==0){
		return true;
	}
	else
	{
		return false;
	}

}

function adoFilter($RecordSet,$FilterField,$FilterCriteria){
	$ReturnArray = array();
	mysqli_data_seek($RecordSet,0);
		while($row = $RecordSet->fetch_assoc()){
		foreach($row as $key => $value){
			if($key==$FilterField&&$value==$FilterCriteria){
				array_push($ReturnArray,$row);
			}
		}
	}
	return $ReturnArray;
}

function generateCaptch(){

	$max=94785;
	$min=19362;

	$pRan = rand($max,$min);

	$_SESSION["captch"] = $pRan;

}

function scrollPage($pPage,$pPosts,$pLimit){

	$totPages = $pPosts;
	$pSteps = intval($totPages / $pLimit);
	if($pSteps < ($totPages / $pLimit)){
		$pSteps = $pSteps + 1;
	}
	//jump menu
		$leftRight = 5;

		$pMin = 1;
		$pMax = $leftRight;

		if($pPage < $leftRight){
		  $pMin = 1;
		  $pMax = $leftRight;
		}

		if($pPage >= $leftRight){
		$pMin = $pPage - $leftRight;
		}
		if($pPage <= $pSteps -$leftRight){
		$pMax = $pPage + $leftRight;
		}

		if($pPage > $pSteps -$leftRight){
		  $pMin = $pSteps -$leftRight;
		  $pMax = $pSteps;
		}


		if($pMin < 1){
		$pMin = 1;
		}

		$pJumpRange = $pMax - $pMin;

	return array(
   	"pMin" => $pMin,
    "pMax" => $pMax,
	"pSteps" => $pSteps
	  );

}


function encode($string) {
    $key = sha1("weddigo");
    $strLen = strlen($string);
    $keyLen = strlen($key);
	$j = 0;
	$hash = "";
    for ($i = 0; $i < $strLen; $i++) {
        $ordStr = ord(substr($string,$i,1));
        if ($j == $keyLen) { $j = 0; }
        $ordKey = ord(substr($key,$j,1));
        $j++;
        $hash .= strrev(base_convert(dechex($ordStr + $ordKey),16,36));
    }
    return $hash;
}

function decode($string) {
    $key = sha1("weddigo");
    $strLen = strlen($string);
    $keyLen = strlen($key);
	$j = 0;
	$hash = "";
    for ($i = 0; $i < $strLen; $i+=2) {
        $ordStr = hexdec(base_convert(strrev(substr($string,$i,2)),36,16));
        if ($j == $keyLen) { $j = 0; }
        $ordKey = ord(substr($key,$j,1));
        $j++;
        $hash .= chr($ordStr - $ordKey);
    }
    return $hash;
}

function watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile) {
   list($width, $height) = getimagesize($SourceFile);
   $image_p = imagecreatetruecolor($width, $height);
   $image = imagecreatefromjpeg($SourceFile);
   imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height);

   $font = 'luc.ttf';
   $font_size = 14;

   //add shadow
   $black = imagecolorallocate($image_p, 100, 100, 100);
   imagettftext($image_p, $font_size, 0, 12, $height-20, $black, $font, $WaterMarkText);
   //add text
   $white = imagecolorallocate($image_p, 255, 255, 255);
   imagettftext($image_p, $font_size, 0, 10, $height - 22, $white, $font, $WaterMarkText);

   if ($DestinationFile<>'') {
   	imagejpeg ($image_p, $DestinationFile, 100);
	 } else {
	 header('Content-Type: image/jpeg');
	 imagejpeg($image_p, null, 100);
	 }
	imagedestroy($image);
	imagedestroy($image_p);
};

function getDbFields($db,$string){
 $mysqli_type = array();
 $mysqli_type[0] = "d";
 $mysqli_type[1] = "i";
 $mysqli_type[2] = "i";
 $mysqli_type[3] = "i";
 $mysqli_type[4] = "d";
 $mysqli_type[5] = "d";
 $mysqli_type[7] = "s";
 $mysqli_type[8] = "i";
 $mysqli_type[9] = "i";
 $mysqli_type[10] = "s";
 $mysqli_type[11] = "s";
 $mysqli_type[12] = "s";
 $mysqli_type[13] = "s";
 $mysqli_type[16] = "i";
 $mysqli_type[246] = "d";
 $mysqli_type[252] = "s"; // text, blob, tinyblob,mediumblob, etc...
 $mysqli_type[253] = "s"; // varchar and char
 $mysqli_type[254] = "s";

	if($result = $db->query($string)){
		$info = $result->fetch_fields();
		$list = array();
			foreach ($info as $val) {
				$type = $mysqli_type[$val->type];
				$list[$val->name]= array($val->type,$type);
			}
			$result->close();
			return $list;
	}else{
		return 0;
	}
}

function refBindValues($arr){
    if (strnatcmp(phpversion(),'5.3') >= 0) //Reference is required for PHP 5.3+
     {
        $refs = array();
        foreach($arr as $key => $value)
            $refs[$key] = &$arr[$key];
        return $refs;
    }
    return $arr;
}

function insertData($db,$inputType,$table,$mcat){
			$db->query("set names 'utf8'");

			if($inputType=='update'){
				$updateString = "update $table set ";
				$endUpdateString = " where ID=$mcat";
			}elseif($inputType=='insert'){
				$updateString = "insert into $table ";
				$fields = "(";
				$values = "(";
			}elseif($inputType=='delete'){
				$updateString = "delete from $table where ID=?";
			}

			$typeArray= '';
			$valueArray= array();
			if($inputType!='delete'){
				$fieldTypes = getDbFields($db,"select * from $table where ID=0");
				foreach($_REQUEST as $key => $value){

						$key="$key";

					if(array_key_exists($key,$fieldTypes)){
						//note the fieldTypes return array with  type code and type string "ID":[3,"i"]
						$typeArray = $typeArray . $fieldTypes[$key][1];

						$valueArray[] = formatdBaseValue($value);
						if($inputType=='update'){
							$updateString = $updateString . "$key=?,";
						}elseif($inputType=='insert'){
							$fields = $fields . "$key,";
							$values = $values . "?,";
						}
					}

				}
			}

			if($inputType=='update'){
				$updateString = left($updateString,strlen($updateString)-1);
				$updateString = $updateString . $endUpdateString;
			}elseif($inputType=='insert'){
				$fields = left($fields,strlen($fields)-1) . ')';
				$values = left($values,strlen($values)-1) . ')';
				$updateString = $updateString . $fields . ' values ' . $values;
			}elseif($inputType=='delete'){
				$typeArray = 'i';
				$valueArray[] = $mcat;
			}




			$stmt = $db->prepare($updateString);
			$params = array_merge(array($typeArray), $valueArray);
			call_user_func_array(array($stmt, 'bind_param'), refBindValues($params));
			mysqli_stmt_execute($stmt);
			$pError = $stmt->error;
			if($pError!=''){$pError=0;}
			$stmt->close();

			return array($db->insert_id,$pError);

}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


function deleteFolder($dir) {
  if (is_dir($dir)) {
    $objects = scandir($dir);
    foreach ($objects as $object) {
      if ($object != "." && $object != "..") {
        if (filetype($dir."/".$object) == "dir")
           deleteFolder($dir."/".$object);
        else unlink   ($dir."/".$object);
      }
    }
    reset($objects);
    rmdir($dir);
  }
 }

 function copy_directory($src,$dst) {
    $dir = opendir($src);
    mkdir($dst,0777,true);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($src . '/' . $file) ) {
                copy_directory($src . '/' . $file,$dst . '/' . $file);
            }
            else {
                copy($src . '/' . $file,$dst . '/' . $file);
            }
        }
    }
    closedir($dir);
		return true;
}

?>
