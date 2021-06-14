<?php
//people array
$people[] = 'Steve';
$people[] = 'John';
$people[] = 'kattie';
$people[] = 'Racheal';
$people[] = 'Kathy';
$people[] = 'Tom';
$people[] = 'Hal';
$people[] = 'Segun';
$people[] = 'brad';
$people[] = 'Mike';
$people[] = 'Mary';
$people[] = 'Abdul';
$people[] = 'Aye';
$people[] = 'Taye';
$people[] = 'aye';
		//Get Query String

		$q = $_REQUEST['q'];
		$suggestion = "";

		//Get Suggestion
		if($q !== ""){
		$q = strtolower($q);
		$len = strlen($q);
		foreach ($people as $person) {
		if(stristr($q, substr($person, 0, $len))){

			if($suggestion === ""){

				$suggestion = $person;
			}else{
				$suggestion .= ",$person";
			}
		  }
		}

	}
	 echo $suggestion === "" ? "No suggestion" :  $suggestion;
	