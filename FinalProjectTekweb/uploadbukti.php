<?php 
    if (isset($_POST['submit']) && isset($_FILES['img']))
    {   
        $img_name = $_FILES['img']['name'];
        $img_size = $_FILES['img']['size'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $error = $_FILES['img']['error'];
        
        if ($error === 0)
        {
            if ($img_size > 300000)
            {
                $em = "Mohon maaf, file yang anda upload berukuran terlalu besar";
                header("Location: bukti_pembayaran.php?error=$em");
            }
            else
            {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_ex = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_ex))
                {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = "bukti_pembayaran/".$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    //Memasukkan file ke database

                    $conn = mysqli_connect('localhost', 'root', '', 'ticketlist') or die("Connection Failed:" .mysqli_connect_error());
                    if(!$conn)
                    {
                        echo 'Connection error: ' . mysqli_connect_error();
                    }

                    $sql = "INSERT INTO buktipembayaran(directory) VALUES ('$new_img_name')";
                    mysqli_query($conn, $sql);

                    header("Location: ticket.php");
                }
                else
                {
                    $em = "Mohon upload bukti dengan format jpg, jpeg, atau png";
                    header("Location: bukti_pembayaran.php?error=$em");
                }
            }
        }
        else
        {
            $em = "Terjadi error yang tidak diketahui!";
            header("Location: bukti_pembayaran.php?error=$em");
        }
    }
    else
    {
        header("Location: bukti_pembayaran.php");
    }
?>