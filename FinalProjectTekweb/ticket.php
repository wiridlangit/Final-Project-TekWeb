<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ticket</title>
  <link rel="stylesheet" href=".//ticket.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>
</head>
<body>
    <?php 
        $conn = mysqli_connect('localhost', 'root', '', 'ticketlist') or die("Connection Failed:" .mysqli_connect_error());
        if(!$conn)
        {
            echo 'Connection error: ' . mysqli_connect_error();
        }

        $query = 'SELECT id, nama, email, ticketClass, randstringReg FROM list_of_customers ORDER BY id DESC LIMIT 1';
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>
                <div class="ticket">
                    <div class="left">
                    <div class="image">
                        <p class="admit-one">
                        <span>KONSER</span>
                        <span>KONSER</span>
                        <span>KONSER</span>
                        </p>
                        <div class="ticket-number">
                        </div>
                    </div>
                    <div class="ticket-info">
                        <p class="date">
                        <span>Minggu</span>
                        <span class="june-29">12 Juni</span>
                        <span>2022</span>
                        </p>
                        <div class="show-name">
                        <h1><?= $row['nama']; ?></h1>
                        <h2>TULUS</h2>
                        </div>
                        
                        <p class="location"><span><?= $row['randstringReg']; ?></span>
                        </p>
                    </div>
                    </div>
                    <div class="right">
                    
                    <div class="right-info-container">
                        <div class="show-name">
                    
                        </div>
                        <div class="seatclass">
                    
                        <p><?= $row['ticketClass']; ?></p>
                        </div>
                        <div class="barcode">
                        <a rel='nofollow' href='http://' border='0' style='cursor:default'><img src='https://chart.googleapis.com/chart?cht=qr&chl=https%3A%2F%2Fwww.coachella.com%2F&chs=180x180&choe=UTF-8&chld=L|2' alt=''></a>
                    
                    </div>
                </div>
                <?php
            }
        }
    ?>
</body>
</html>