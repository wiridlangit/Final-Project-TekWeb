<?php
    function generateRandomString($length = 10) 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) 
        {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'ticketlist') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['telpNumber']) && isset($_POST['ticketClass']))
        {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $telpNumber = $_POST['telpNumber'];
            $ticketClass = $_POST['ticketClass'];
            $randstringReg = generateRandomString();

            $sql = "INSERT INTO `list_of_customers` (`nama`, `email`, `telpNumber`, `ticketClass`, `randstringReg`) VALUES ('$nama', '$email','$telpNumber', '$ticketClass', '$randstringReg')";
            
            $query = mysqli_query($conn, $sql);
            if($query)
            {
                header('Location:bukti_pembayaran.php');
            }
            else 
            {
                echo 'Some error occured';
            }
        }
        else
        {
            header("Location: booking.php");
        }
    }
?>