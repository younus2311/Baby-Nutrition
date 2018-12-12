
<!-----------Has Presence---------->
<?php
	function has_presence($value) {
		return isset($value) && !empty($value);	
	}
?>

<!----------big----------->
<?php
	function big($value , $min){
		return strlen($value) > $min;	
	}
?>

<!----------short--------->
<?php
	function short($value , $max){
		return strlen($value) < $max;	
	}
?>