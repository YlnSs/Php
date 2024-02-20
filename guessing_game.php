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

#_POST as much as I understand we can interact with the values that we got from input areas in our website
#_GET we can take it as a parameter in the domain by adding it to the end like "?guess=42"
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
