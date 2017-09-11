<!DOCTYPE html>
<html>
<body>
    <?php
        $q = $_GET['q'];

        $con = mysqli_connect('localhost','root','','kladionica');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }
        $sql="SELECT email FROM korisnici";
        $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($result)) {
            if($q == $row['email']){
                echo "Email se već koristi!";
            }
        }
    ?>
</body>
</html>