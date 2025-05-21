<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kumpulan Tugas Pemrograman Web</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: url('image/sisfor.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      margin-top: 40px;
      color: #333;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 40px;
      max-width: 1000px;
      width: 100%;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.2s ease;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      color: inherit;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 140px;
      object-fit: cover;
    }

    .card p {
      padding: 15px;
      font-weight: 500;
      color: #444;
    }

    h1, h3 {
    background-color: rgba(255, 255, 255, 0.8); /* kotak putih transparan */
    padding: 10px 20px; /* ruang dalam */
    border-radius: 8px; /* sudut membulat */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); /* bayangan */
}
  </style>
</head>
<body>

  <h1>Kumpulan Tugas Pemrograman Web (D)</h1>
    <h3 style="margin-top: -20px;">MUHAMMAD RIDHO UTOMO | 5026231143</h3>

  <div class="container">
    <a href="satu" class="card">
      <img src="image/tugas1.png" alt="HTML DASAR">
      <p>Tugas 1: HTML Dasar</p>
    </a>
    <a href="dua" class="card">
      <img src="image/tugas2.png" alt="VIEWPORT">
      <p>Tugas 2: CSS</p>
    </a>
    <a href="tiga" class="card">
      <img src="image/tugas3.png" alt="SIDEBAR-BOOTSTRAP">
      <p>Tugas 3: SIDEBAR-Bootstrap</p>
    </a>
    <a href="empat" class="card">
      <img src="image/tugas4.png" alt="Template1">
      <p>Tugas 4 : 16 April 2025</p>
    </a>
    <a href="lima" class="card">
      <img src="image/tugas5.png" alt="FORM VALIDASI 1">
      <p>Tugas 5: Form dan Validasi 1</p>
    </a>
    <a href="enam" class="card">
      <img src="image/tugas6.png" alt="FORM VALIDASI 2">
      <p>Tugas 6: Form dan Validasi 2</p>
    </a>
    <a href="tujuh" class="card">
      <img src="image/tugas7.png" alt="Linktree">
      <p>Tugas 7: Linktree</p>
    </a>
     <a href="delapan" class="card">
      <img src="image/tugas8.png" alt="ETS">
      <p>Tugas 8: ETS</p>
  </div>

</body>
</html>
