<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('header.php');?>
</head>

<body>
    <?php
    include ('navbar.php');
    include ('welcome-message.php')
    ?>
    
    <div class="how-it-works">
      <div class="container">
        <h1 id="CaraKerja">Cara kerjanya</h1>
        <p>Prosedur BZ Laundry</p>

        <div class="row">
          <div class="card">
            <i class="fa-regular fa-square-check"></i>
            <h1>Get a Price</h1>
            <p>
              Pelanggan diharapkan melihat informasi tentang harga pakaian sebelum
              menggunakan layanan BZ Laundry</p>
          </div>
          <div class="card">
            <i class="fa-solid fa-bag-shopping"></i>
            <h1>Book a Pickup</h1>
            <p>
              Pelanggan tidak perlu berjalan ke lokasi laundry untuk memberikan pakaian kotor
              karena BZ Laundry menyediakan layanan pengambilan Pakaian kotor ke lokasi pelanggan
            </p>
          </div>
          <div class="card">
            <i class="fa-solid fa-bed"></i>
            <h1>Breathe & Relax</h1>
            <p>
              Pelanggan tinggal menunggu dengan relax dalam waktu maksimal 24 Jam sampai pakaian
              dikirim kembali ke lokasi pelanggan
            </p>
          </div>
        </div>
        <a href="price.php">Biaya yang dikenakan</a>
      </div>
    </div>
    <div class="why main-spacing">
      <div class="container">
        <h1 id="TentangKami">Kenapa BZ Laundry</h1>
        <p>
          Karena hanya disini pelanggan bisa mendapatkan pakaiannya kembali
          bersih dalam kurun waktu maksimal 24 Jam
        </p>

        <div class="row-spacing">
          <div class="row">
            <div class="card">
              <i class='fas fa-truck' style='font-size:24px'></i>
              <h1>Free Delivery & Pickup</h1>
              <p>
                Pengambilan kain kotor dan pengembalian pakaian yang sudah
                bersih tidak dikenakan biaya sepeserpun alias gratis
              </p>
            </div>
            <div class="card">
              <i class="fa-solid fa-bag-shopping"></i>
              <h1>
                never late</h1>
              <p>
                Apabila pakaian dikirim lebih dari 24 Jam, maka uang bisa 
                dikembalikan
              </p>
            </div>
          </div>
          <div class="row">
            <div class="card">
              <i class="fa-solid fa-sack-dollar"></i>
              <h1>Cheap</h1>
              <p>
                Harga perpakaian dibawah harga Laundry pada umumnya
              </p>
            </div>
            <div class="card">
              <i class="fa-solid fa-wind"></i>
              <h1>fragrant</h1>
              <p>
                Harum tahan lama
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact main-spacing">
      <div class="container">
        <h1>Ingin Mengatahui Promo Terbaru Kami? Isi Data Dibawah</h1>
        <form action="" method="post">
            Name: <input type="text" name="name">
            <br>
            Email: <input type="email" name="email">
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form> 
        <?php
          include "database/connection.php";
          $conn = new ConnectionDatabase();

          if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($conn->connection, $_POST['name']);
            $email = mysqli_real_escape_string($conn->connection, $_POST['email']);

          $query = "SELECT * FROM pelanggan WHERE email = '$email'";
          $result = mysqli_query($conn->connection, $query);

          if(mysqli_num_rows($result) > 0) {
            echo "Email sudah terdaftar";
            } else {
           $query = "insert into pelanggan set name = '$name', email = '$email'";
          mysqli_query($conn->connection, $query);

          if(mysqli_affected_rows($conn->connection) > 0) {
            echo "Terimakasih sudah bergabung";
           } else {
            echo "Gagal menambahkan data";
              }
            }
          }
        ?>
     </div>
     <br><a href="price.php"> Cek followers newsteller kita disini</a><br>
    </div>  
     <div>
        <?php include ('footer.php');?>
      </div>
</body>
</html>