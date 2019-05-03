<?php
	$start = 0; $show = 6;
	$pageCount = count($result) / $show;

	if (isset($_GET['start'])) {
		$start = $db->escapeString($_GET['start']);
	}
	
	$query .= " LIMIT $start, $show";

	$result = $db->executeSelectQuery($query);

	if ($pageCount > 1) {
		for ($i = 0; $i < $pageCount; $i++) {
			$link = "<a id='linkpagination' style = 'padding-left: 2%; letter-spacing: 5%;margin-top: 10%' href = '../View/MANAJER-RUANGAN.php";
			if ($name != "") {
				$link .= "?filter=".$name;
			}
			if ($i!=0) {
				$str = $i * $show;
				if ($name !="") {
					$link .= "&";
				}else{
					$link .= "?";
				}
				$link .= "start=".$str;
			}
			$link .= "'>".($i + 1)."</a>";
			
			echo $link;
			
		}
		echo "<br><br>";
	}
?>