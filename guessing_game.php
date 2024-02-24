<?php 
    $oldguess="";
    $message=FALSE;

    if (isset($_POST['guess']))
    {
        $oldguess=$_POST['guess']+0;
        if($oldguess==42)
        { 
            $message="Great Job";
        }
        else if($oldguess<42)
        {
            $message="Lower than the number that is chosen";
        }
        else
        {
            $message="Higher than the number that is chosen";
        }
    }

#_POST A data sent by using this is non-visible by a client it is sent by embedded within the body of the HTTP package.
#_GET When it comes to _get it shows the data sent by using this in the URL link while sending it. It also has a 2000 character limit due to its in the URL link.
?>

<html>
<head>
<title>Guessing Game</title>
</head>
<body style="font-family: sans-serif;">
<h1>Welcome to the Guessing game</h1>
<?php
if ($message!==false)
{
    echo $message,"\n";
}
?>
<form method="post">
<p>
<label for="guess">Input Guess:</label>
<input type="text" name="guess" id="guess" size="40" value="<?=htmlentities($oldguess)?>"/>
</p>
<input type="submit"/>
</form>
</body>
</hmtl>
