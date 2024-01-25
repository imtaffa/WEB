<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('header.php');?>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="header">
        <div>
              <h2><i class="fas fa-cog"></i> BZ laundry</h2>
        </div>
      
            <ul>
              <li><a href="index.php">Cara Kerjanya</a></li>
              <li><a href="index.php">Tentang Kami</a></li>
              <li><a href="index.php">Kontak Kami</a></li>
            </ul>
          </div>

          <div class="why main-spacing">
            <div class="container">
              <h1 id="TentangKami">Intip Harga Mencuci Di BZ</h1>
              <p>
                Karena Bersih Gaperlu Mahal
              </p>
      
              <div class="row-spacing">
                <div class="row">
                  <div class="card">
                    <i class='fa-solid fa-shirt' style='font-size:24px'></i>
                    <h1>Pakaian Satuan</h1>
                    <p>
                      Cuci pakaian satuan seperti jaket dan kaos mulai dari Rp.5000
                    </p>
                  </div>
                  <div class="card">
                    <i class="fa-solid fa-bed"></i>
                    <h1>Utilitas Kamar Tidur</h1>
                    <p>
                      Untuk sprei, bedcover, dan sejenisnya juga bisa kamu cuci disini.
                      Start from Rp.50000
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="card">
                    <i class="fa-solid fa-couch"></i>
                    <h1>Lainnya</h1>
                    <p>
                      Untuk barang barang lainnya seperti sofa dan karpet, bisa langsung hubungi kami via WhatsApp
                    </p>
                  </div>
                  <div class="card">
                    <i class="fa-solid fa-shoe-prints"></i>
                    <h1>Footware</h1>
                    <p>
                      Sepatu bersama teman temannya akan kinclong bersih mulai dari Rp. 30000
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="how-itworks">
          <div class="container">
            <?php include 'config.php'; ?>
              <h1>Our Newsteller Member</h1>
              <table class="container" >
                <thead>
                    <tr>
                        <th scope="col ">Nama</th>
                        <th scope="col ">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_pelanggan as $item) { ?>
                    <tr>
                        <td><?= htmlspecialchars($item['name']) ?></td>
                        <td><?= htmlspecialchars($item['email']) ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</div>
</body>

<?php include('footer.php')?>

</html>