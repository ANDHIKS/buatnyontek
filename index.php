<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Booking Kantin SMK Telkom</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background: #900000;
      color: white;
      padding: 15px;
      position: relative;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      padding: 0;
    }

    nav ul li {
      display: inline;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
    }

    section {
      padding: 20px;
      border-bottom: 1px solid #ccc;
    }

    footer {
      background: #ddd;
      text-align: center;
      padding: 10px;
    }

    img {
      margin: 10px 0;
    }

    form input,
    form textarea,
    form button {
      display: block;
      margin: 10px 0;
      padding: 8px;
      width: 100%;
      max-width: 300px;
    }

    .logo-telkom {
      position: absolute;
      top: -10px;
      right: 10px;
      width: 80px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <header>
    <h1 style="margin: 10;">Booking Kantin SMK Telkom Jakarta</h1>
    <img src="https://3.bp.blogspot.com/-jNubSty8zTw/XIEg4j8Sc8I/AAAAAAAAauw/odKAXJj4FPcbjeA_NFnGcWwOup1_umWzwCLcBGAs/s1600/SMK%2BTelkom%2BJakarta.png" alt="Logo Telkom" class="logo-telkom" />
    <nav>
      <ul>
        <li><a href="#about">About Kantin</a></li>
        <li><a href="#list">Cafetaria List</a></li>
        <li><a href="#buy">How to Buy</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <section id="about">
    <p>Kantin SMK Telkom Jakarta menyediakan makanan dan minuman berkualitas bagi siswa dengan harga terjangkau.</p>
    <video width="320" height="240" controls>
      <source src="https://3.bp.blogspot.com/-jNubSty8zTw/XIEg4j8Sc8I/AAAAAAAAauw/odKAXJj4FPcbjeA_NFnGcWwOup1_umWzwCLcBGAs/s1600/SMK%2BTelkom%2BJakarta.png" type="video/mp4" />
    </video>
  </section>

  <section id="list">
    <h2>Daftar Kantin & Menu</h2>
    <div>
      <h3>Kantin Ibu Rika</h3>
      <ul>
        <li>
          <img src="https://cdn1-production-images-kly.akamaized.net/EjwV7j3Y4JrlqUFuavke4NtRWtM=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3108566/original/079979700_1587487794-Sajiku_1.jpg" width="400" /><br>
          Nasi Goreng - Rp10.000 | Stok: <span id="stokNasgor">10</span>
        </li>
        <li>
          <img src="https://fikes.almaata.ac.id/wp-content/uploads/2024/12/esteh.png" width="400" /><br>
          Es Teh - Rp3.000 | Stok: <span id="stokEsteh">20</span>
        </li>
        <li>
          <img src="https://assets.unileversolutions.com/recipes-v2/245281.jpg" width="400" /><br>
          Bakso - Rp12.000 | Stok: <span id="stokBakso">15</span>
        </li>
        <li><img src="https://aslimasako.com/storage/post/new-title-13112024-070756.jpg" width="400" /><br>
          Sosis Bakar - Rp5.000 | Stok: <span id="stokSosis">25</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="buy">
    <h2>Cara Membeli</h2>
    <form id="orderForm">
      <label>Nasi Goreng:</label>
      <input type="number" id="nasgorQty" value="0" min="0" /><br />

      <label>Es Teh:</label>
      <input type="number" id="estehQty" value="0" min="0" /><br />

      <label>Bakso:</label>
      <input type="number" id="baksoQty" value="0" min="0" /><br />

      <label>Sosis Bakar:</label>
      <input type="number" id="sosisQty" value="0" min="0" /><br />

      <button type="button" onclick="hitungTotal()">Hitung Total & Tampilkan QR</button>
    </form>

    <p id="totalHarga"></p>
    <div id="qrSection" style="display: none">
      <p>Scan QR ini untuk bayar:</p>
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" width="300" />
    </div>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <form>
      <input type="text" placeholder="Nama" required />
      <input type="tel" placeholder="No telp" required />
      <textarea placeholder="Pesan" required></textarea>
      <button type="submit">Kirim</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Dibuat oleh Arsha Achdi Siswa SMK Telkom Jakarta</p>
  </footer>

  <!DOCTYPE html>
  <html lang="id">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Booking Kantin SMK Telkom</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      header {
        background: #900000;
        color: white;
        padding: 15px;
        position: relative;
      }

      nav ul {
        list-style: none;
        display: flex;
        gap: 20px;
        padding: 0;
      }

      nav ul li {
        display: inline;
      }

      nav ul li a {
        color: white;
        text-decoration: none;
      }

      section {
        padding: 20px;
        border-bottom: 1px solid #ccc;
      }

      footer {
        background: #ddd;
        text-align: center;
        padding: 10px;
      }

      img {
        margin: 10px 0;
      }

      form input,
      form textarea,
      form button {
        display: block;
        margin: 10px 0;
        padding: 8px;
        width: 100%;
        max-width: 300px;
      }

      .logo-telkom {
        position: absolute;
        top: -10px;
        right: 10px;
        width: 80px;
        border-radius: 50%;
      }
    </style>
  </head>

  <body>
    <header>
      <h1 style="margin: 10;">Booking Kantin SMK Telkom Jakarta</h1>
      <img src="https://3.bp.blogspot.com/-jNubSty8zTw/XIEg4j8Sc8I/AAAAAAAAauw/odKAXJj4FPcbjeA_NFnGcWwOup1_umWzwCLcBGAs/s1600/SMK%2BTelkom%2BJakarta.png" alt="Logo Telkom" class="logo-telkom" />
      <nav>
        <ul>
          <li><a href="#about">About Kantin</a></li>
          <li><a href="#list">Cafetaria List</a></li>
          <li><a href="#buy">How to Buy</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
    </header>

    <section id="about">
      <p>Kantin SMK Telkom Jakarta menyediakan makanan dan minuman berkualitas bagi siswa dengan harga terjangkau.</p>
      <video width="320" height="240" controls>
        <source src="https://3.bp.blogspot.com/-jNubSty8zTw/XIEg4j8Sc8I/AAAAAAAAauw/odKAXJj4FPcbjeA_NFnGcWwOup1_umWzwCLcBGAs/s1600/SMK%2BTelkom%2BJakarta.png" type="video/mp4" />
      </video>
    </section>

    <section id="list">
      <h2>Daftar Kantin & Menu</h2>
      <div>
        <h3>Kantin Ibu Rika</h3>
        <ul>
          <li>
            <img src="https://cdn1-production-images-kly.akamaized.net/EjwV7j3Y4JrlqUFuavke4NtRWtM=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3108566/original/079979700_1587487794-Sajiku_1.jpg" width="400" /><br>
            Nasi Goreng - Rp10.000 | Stok: <span id="stokNasgor">10</span>
          </li>
          <li>
            <img src="https://fikes.almaata.ac.id/wp-content/uploads/2024/12/esteh.png" width="400" /><br>
            Es Teh - Rp3.000 | Stok: <span id="stokEsteh">20</span>
          </li>
          <li>
            <img src="https://assets.unileversolutions.com/recipes-v2/245281.jpg" width="400" /><br>
            Bakso - Rp12.000 | Stok: <span id="stokBakso">15</span>
          </li>
          <li><img src="https://aslimasako.com/storage/post/new-title-13112024-070756.jpg" width="400" /><br>
            Sosis Bakar - Rp5.000 | Stok: <span id="stokSosis">25</span>
          </li>
        </ul>
      </div>
    </section>

    <section id="buy">
      <h2>Cara Membeli</h2>
      <form id="orderForm">
        <label>Nasi Goreng:</label>
        <input type="number" id="nasgorQty" value="0" min="0" /><br />

        <label>Es Teh:</label>
        <input type="number" id="estehQty" value="0" min="0" /><br />

        <label>Bakso:</label>
        <input type="number" id="baksoQty" value="0" min="0" /><br />

        <label>Sosis Bakar:</label>
        <input type="number" id="sosisQty" value="0" min="0" /><br />

        <button type="button" onclick="hitungTotal()">Hitung Total & Tampilkan QR</button>
      </form>

      <p id="totalHarga"></p>
      <div id="qrSection" style="display: none">
        <p>Scan QR ini untuk bayar:</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" width="300" />
      </div>
    </section>

    <section id="contact">
      <h2>Contact Us</h2>
      <form>
        <input type="text" placeholder="Nama" required />
        <input type="tel" placeholder="No telp" required />
        <textarea placeholder="Pesan" required></textarea>
        <button type="submit">Kirim</button>
      </form>
    </section>

    <footer>
      <p>&copy; 2025 Dibuat oleh Andhika Ridwan Adi Prayitno</p>
    </footer>

    <script>
      const stok = {};

      function loadStok() {
        fetch("get_stok.php")
          .then(res => res.json())
          .then(data => {
            Object.assign(stok, data);
            document.getElementById("stokNasgor").innerText = data["Nasi Goreng"].stok;
            document.getElementById("stokEsteh").innerText = data["Es Teh"].stok;
            document.getElementById("stokBakso").innerText = data["Bakso"].stok;
            document.getElementById("stokSosis").innerText = data["Sosis Bakar"].stok;
          });
      }

      function hitungTotal() {
        const nasgor = parseInt(document.getElementById("nasgorQty").value) || 0;
        const esteh = parseInt(document.getElementById("estehQty").value) || 0;
        const bakso = parseInt(document.getElementById("baksoQty").value) || 0;
        const sosis = parseInt(document.getElementById("sosisQty").value) || 0;

        const orderData = {
          "Nasi Goreng": nasgor,
          "Es Teh": esteh,
          "Bakso": bakso,
          "Sosis Bakar": sosis
        };

        fetch("order.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json"
            },
            body: JSON.stringify(orderData)
          })
          .then(res => res.json())
          .then(res => {
            if (res.status === "success") {
              document.getElementById("totalHarga").innerText = "Total Harga: Rp" + res.total;
              document.getElementById("qrSection").style.display = "block";
              loadStok(); // Refresh stok setelah pesan
            } else {
              let pesan = res.message + "\n";
              for (let item in res.errors) {
                pesan += `${item}: ${res.errors[item]}\n`;
              }
              alert(pesan);
            }
          });
      }

      loadStok(); // Panggil saat awal
    </script>

  </body>
</html>