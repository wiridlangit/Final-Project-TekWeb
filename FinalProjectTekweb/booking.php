<!DOCTYPE html>
<html>
    <header>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="booking.css" type ="text/css" rel="stylesheet"/>
    </header>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        function Redirect()
        {
            document.location="ticket.php";
        }
        function Redirect_back()
        {
            document.location="booking.php";
        }
    </script>
    <?php
        // definisikan variabel dan set ke kosong
        $name = $email = $kelas = $telephone = "";
        $nameErr = $emailErr = $kelasErr = $telpErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["nama"])) 
            {
                $nameErr = "Mohon isi nama Anda";
            } 
            else 
            {
                $name = test_input($_POST["nama"]);
                // cek apabila kolom berisi hanya karakter dan whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) 
                {
                    $nameErr = "Format nama belum benar";
                }
            }
            
            if (empty($_POST["email"])) 
            {
                $emailErr = "Mohon isi email Anda";
            } 
            else 
            {
                $email = test_input($_POST["email"]);
                // cek jika format email benar
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    $emailErr = "Format email tidak valid!";
                }
            }
                
            if (empty($_POST["telpNumber"])) {
                $telpErr = "Mohon isi nomor telepon Anda";
            } 
            else {
                $telephone = test_input($_POST["telpNumber"]);
                // cek jika format nomor telepon benar
                if (preg_match('/^[0-9]{10}+$/', $telephone)) 
                {
                    $telpErr = "Format nomor telepon tidak valid!";
                }
            }

            if (empty($_POST["kelasTiket"])) 
            {
                $kelasErr = "Mohon pilih kelas tiket Anda";
            } 
            else 
            {
                $kelas = test_input($_POST["kelasTiket"]);
            }            
        }

        function test_input($data) 
        {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>

    <div class="container_all">
    <div class="container">
        <div class="bookhead">
            <img class="tulus-booking" src="tulus-booking.png">
            <div class="tulus-booking-content">
                <div class="content-header-tanggal">
                    <div class="dates-header">Tanggal</div>
                    <div class="dates">12 Juni 2022</div>
                </div>
                <div class ="content-location-header">
                    <div class="location-header"">Lokasi</div>
                    <div class="location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7041603723483!2d112.80425181459496!3d-7.274465494749328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb14e1cf423f%3A0xf66e617836fbf642!2sPakuwon%20City%20Mall!5e0!3m2!1sid!2sid!4v1655207473434!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="input_container">
        <div class="input_booking">
            <form action="connect.php" class="input_name" method="POST">  
            Nama: <input type="text" name="nama">
            E-mail: <input class="input_email" type="text" name="email">
            Nomor Telepon: <input class="input_notelp" type="number" name="telpNumber">
        </div>
        <div class="line"></div>
            <div class="kelastiket">Kelas Tiket</div>
        <div class="headticket" >
            <div class="input_ticket1">
                <input type="radio" class="btn-check" id="btn-check1" autocomplete="off" name="ticketClass" <?php if (isset($kelas) && $kelas=="A") echo "checked";?> value="A (Rp300.000,00)">
                <label class="btn btn-primary" for="btn-check1"><h1>A (Rp300.000,00)</h1></label>
                <input type="radio" class="btn-check" id="btn-check2" autocomplete="off" name="ticketClass" <?php if (isset($kelas) && $kelas=="B") echo "checked";?> value="B (Rp250.000,00)">
                <label class="btn btn-primary" for="btn-check2"><h1>B (Rp250.000,00)</h1></label>
            </div>  
            <div class="input_ticket2">
                <input type="radio" class="btn-check" id="btn-check3" autocomplete="off" name="ticketClass" <?php if (isset($kelas) && $kelas=="C") echo "checked";?> value="C (Rp200.000,00)">
                <label class="btn btn-primary" for="btn-check3"><h1>C (Rp200.000,00)</h1></label>
                <input type="radio" class="btn-check" id="btn-check4" autocomplete="off" name="ticketClass" <?php if (isset($kelas) && $kelas=="D") echo "checked";?> value="D (Rp150.000,00)">
                <label class="btn btn-primary" for="btn-check4"><h1>D (Rp150.000,00)</h1></label>
            </div>
        </div>
        <div class="input_value_ticket">
            <input onclick="ticket.php" class ="btn btn-primary" type="submit" name="submit" value="Book now!">
        </div>
    </div>
    </div>
</div>
</form>
</body>
</html>