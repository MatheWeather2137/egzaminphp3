<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Mój kalendarz</title>
</head>
<body>
    <div id="baner1">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>
    <div id="baner2">
        <h1>KALENDARZ</h1>
        <?php
            $host="localhost";
            $user="root";
            $pass="";
            $dbname="kalendarzphp";

            $conn=mysqli_connect($host,$user,$pass,$dbname);

            if(!$conn){
                echo ("failed" . mysqli_connect_error());
            }

            $sql="SELECT miesiac,rok FROM `zadania` WHERE dataZadania='2020-07-01'";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<h3>miesiąc: " . $row['miesiac'] . ", rok: " . $row['rok'] . "</h3>";
                }
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="glowny">
        <?php
            $host="localhost";
            $user="root";
            $pass="";
            $dbname="kalendarzphp";

            $conn=mysqli_connect($host,$user,$pass,$dbname);

            if(!$conn){
                echo ("failed" . mysqli_connect_error());
            }
            $sql="SELECT dataZadania,wpis FROM zadania WHERE miesiac='lipiec'";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div id=div>";
                    echo "<h5>" . $row["dataZadania"] . "</h5>";
                    echo "<p>" . $row["wpis"] . "</p>";
                    echo "</div>";
                }
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="stopka">
        <form action="form.php" method="POST">
            <label for="input">dodaj wpis:</label>    
            <input type="text" id="input">
            <input type="submit" value="DODAJ">
            <p>Stronę wykonał: MATEUSZ POGODA</p>
        </form>
    </div>
</body>
</html>