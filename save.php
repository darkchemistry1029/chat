<?php
if(isset($_POST["mytext"]) && isset($_POST['fourm1'])) ;
{
	$file = "data.txt";
	$text = $_POST["fourm1"].' - '.$_POST["mytext"];
	$file2 = file_get_contents('./data.txt', true);
    
	file_put_contents($file, $text . "\r\n", FILE_APPEND | LOCK_EX);
	
	$banned_words = array('fuck', 'shit', 'ass', 'bitch', 'dick', 'anus', 'fag', 'faggot', 'retard', 'retarded', 'dumbass', 'dumbfuck');
echo str_replace($banned_words, "***", $file2);

}
echo "<script type=text/javascript>window.close();</script>"
?>
