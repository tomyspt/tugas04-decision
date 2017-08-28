<?php
	$nilai = A-;
	
	switch ($nilai) {
		case $nilai == "A" ||$nilai == "A-" ||$niai == "A/B" ||$nilai == "B+" ||$nilai == "B" ||$nilai == "B-" || $nilai == "B/C":
			echo "Lulus";
			break;
		case $nilai == "C+"||$nilai == "C"||$nilai == "C-"||$nilai == "C/D":
			echo "Lulus Sebaiknya Diulang";
			break;
		case $nilai == "D+"||$nilai == "D":
			echo "LULUS & WAJIB DIULANG";
			break;
	default :
	echo "TIDAK LULUS";
	break;
	}
?>