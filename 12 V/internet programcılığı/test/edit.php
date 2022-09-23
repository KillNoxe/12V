<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Öğrenci</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Listeleme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Yeni Kayıt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div style="background-color: #E9ECEF; padding: 30px;">
  <h3 style="margin-left: 20px;">Öğrenci Kayıt Ekranı</h3>
  </div>


<div class="container mt-3">
<form action="index.php" method="post" enctype="multipart/form-data">
<div class="container mt-3">
  <h2>Kayıt Formu</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="name">Adı:</label>
      <input type="text" class="form-control" id="name" placeholder="Adını Giriniz.">
    </div>
    <div class="mb-3">
      <label for="surname">Soyadı:</label>
      <input type="text" class="form-control" id="surname" placeholder="Soyadını Giriniz.">
    </div>
    <div class="mb-3">
      <label for="gender">Cinsiyeti:</label>
      <select class="form-select">
        <option>Kadın</option>
        <option>Erkek</option>
        <option selected >Seçiniz</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="class">Sınıfı:</label>
      <select class="form-select">
        <option>12/Y</option>
        <option>12/V</option>
        <option>11/Y</option>
        <option>11/V</option>
        <option>10/Y</option>
        <option>10/V</option>
        <option>9/Y</option>
        <option>9/V</option>
        <option selected >Seçiniz</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="image">Resmi:</label>
      <input class="form-select" type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <input type="submit" value="Kaydet">
  </form>
  <p>&copy; Company 2022-2023</p>
</div>
</form>
</div>
</body>
</html>
