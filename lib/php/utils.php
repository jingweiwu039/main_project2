<?php
function file_get_json ($filename){
		$file = file_get_contents($filename);
		$notes_object = json_decode($file);
		return $notes_object;
}
?>