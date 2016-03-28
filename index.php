<title>Welcome to the php works</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
    body{
        background: #34495e;
        text-align: center;
        font-size:20px;
        margin-top:100px;
        color:white;
        font-family:'Raleway', sans-serif;
    }

    .submit{
        width:100px;
        height:40px;
        background: #2dffdf;
        font-size: 17px;
        color:black;
        font-family: monospace;
    }
    input#userInput{
        height:30px;
        width: 250px;
        font-size: 15px;
        font-family:'Raleway', sans-serif;
        color:black;
    }
</style>
<form action="index.php" method="post" accept-charset="utf-8">
Enter the address you want to move: <input id="userInput" type="text" name="domain" 
    placeholder="Enter just google to go google.com"><br><br>
<input type="submit" class="submit">
</form>

<?php 


if (isset($_POST["domain"])){
    $domain= $_POST["domain"];
    $goFor= "http://".$domain.".com";
    header("location: ".$goFor);
}
?>



