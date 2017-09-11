<!DOCTYPE html>
<html>
<body>
    <?php
        $q = $_GET['q'];

        $con = mysqli_connect('localhost','root','','kladionica');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }
        $sql="SELECT username FROM korisnici";
        $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($result)) {
            if($q == $row['username']){
                echo "Korisničko ime se već koristi!";
            }
        }
    ?>
</body>
</html>