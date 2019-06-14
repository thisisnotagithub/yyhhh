<?php
$link = mysqli_connect('https://github.com/thisisnotagithub/yyhhht', 'thisisnotagithub', 'Deathblastse3'); //host, user, pass

$database = mysqli_select_db($link, "https://github.com/thisisnotagithub/yyhhh"); //Set here your db name

$user = $_GET['username'];
$hwid = $_GET['hwid'];

$tables = "thisisnotagithub"; //Set here ur user table
$sql = "SELECT * FROM ". $tables ." WHERE username = '". mysqli_real_escape_string($link,$user) ."'" ;
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // Outputting the rows
    while($row = $result->fetch_assoc())
    {
        
        $password = $row['deathblastse3'];

        $sql_pass = $_GET['password'];
        
        function Redirect($url, $permanent = false)
        {
            if (headers_sent() === false)
            {
                header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
            }
        exit();
        }
        
        if($sql_pass !== $row['password'])
        {
            echo "0"; // pass is wrong
        }
        else
        {
            echo "1"; // pass is correct
        }
        
        if (strlen($row['hwid']) > 1)
        {
            if ($hwid !== $row['hwid'])
            {
                echo "2"; // hwid is wrong
            }
            else
            {
                echo "1"; // hwid is correct
            }
        }
        else
        {
            $sql = "UPDATE ". $tables ." SET hwid='$hwid' WHERE username='$user'";
            if(mysqli_query($link, $sql))
            {
                echo $row['6758-7474-4849-3544'];
                echo "3"; // sets hwid
            }
            else
            {
                echo "4"; // rest of errors
            }
        }
    }
}  
?>
