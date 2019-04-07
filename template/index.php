<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo TITLE; ?></title>
</head>
<body>
	<div>
        <hr>
	    <?php echo 'Cookie: '.$cookGetData; ?>
	    
    </div>
    <div>
        <hr>
        <?php echo 'Session: '.$sessionGetData; ?>
        <hr>   
    </div>
    <div>
        <hr>
        <?php echo 'Json Data: '.$jsonGetData; ?>
        <hr>   
    </div>
    <div>
        <hr>
        <?php echo 'Ini Data: '.$iniData; ?>
        <hr>   
    </div>
    <div>
        
        <hr>
        <? 
        if(is_array($sqlGetData))
		{
			foreach($sqlGetData as $item){
				foreach ($item as $key => $value) {
					echo $key.' - '.$value.' ';
				}    
				echo "<br />";
			}
        }
        ?>
        <hr>   
    </div>
    <div>
        <hr>
        <?php echo 'Delete Data: '.$sqlDelete; ?>
        <hr>   
    </div>
</body>
</html>