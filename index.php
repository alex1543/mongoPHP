<?php

try {
	// подключение к серверу, база данных - roytuts; коллекция - users.
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("roytuts.users", $query);
	
	// заполение массива из одной коллекции.
    $resultMF[0][0] = ''; $iRow=1;
    foreach ($rows as $row) {
		$array = json_decode(json_encode($row), true);
		
		// названия столбцов.
		if ($iRow==1) {
			$i=0;
			foreach (array_keys($array) as $data) {
				$resultMF[0][$i] = (string)$data;
				$i++;
			}
		}
		// формирование массива для таблицы.
		$iCol=0;
		foreach ($array as $data) {
			if (gettype($data) == 'string') {
			//	echo $data . '<br />';
				$resultMF[$iRow][$iCol] = $data;
				$iCol++;
			}
			if (gettype($data) == 'array') {
				$resultMF[$iRow][$iCol]=''; $iPos=0;
				foreach ($data as $value) {
				//	echo $value . '<br />';
					
					if (Count($data) > 1) {
						$resultMF[$iRow][$iCol] .= ' '.$value;
						$iPos++;
						if (Count($data) == $iPos) {
							$iCol++;
						}
					}
					if (Count($data) == 1) {
						$resultMF[$iRow][$iCol] = $value.Count($data);
						$iCol++;
					}
				}
			}
		}
		$iRow++;
    }
 
} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}

// обрамление массива табличными тегами.
function GetTR($resultMF) {
	$html = "";
	for ($iRow = 0; $iRow < Count($resultMF); ++$iRow) {
		$html .= "<tr>";
		for ($iCol = 0; $iCol < Count($resultMF[$iRow]); ++$iCol)
			$html .= "<td>".$resultMF[$iRow][$iCol]."</td>";
		$html .= "</tr>";
	}
	return $html;
}

// ---------- основной код -----------------
// чтение шаблона из файла: select.html
$text = file_get_contents("select.html");
$list = explode("\n", $text);

for ($i=0; $i < Count($list); $i++) {
	if (strpos($list[$i], "@tr") !== false) {
		echo GetTR($resultMF);
	} else {
		echo $list[$i];
	}
}

?>