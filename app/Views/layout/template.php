<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/admin.css">
  <link rel="stylesheet" href="/css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="img/default.png" rel="icon">
  <script src="https://kit.fontawesome.com/bf810d5dde.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="card-header">
    <?= $this->include('layout/navbar'); ?>
  </div>
  <div class="card-body" style="height:700px;">
    <div class="row g-0">
      <div class="col-md-2 mt-5 bg-dark pt-4 px-1">
        <?= $this->include('layout/sidebar'); ?>
      </div>
      <div class="col-md-10 p-5 pt-4">
        <div class="pt-5  ">
          <?= $this->renderSection('content'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="card-footr bg-dark pt-5">
    <h1>halo</h1>
  </div>
  </div> -->
  <script type="text/javascript" src="js/admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  <script>
    function preview() {

      const foto = document.querySelector('#foto');
      const fotoLabel = document.querySelector('.foto-muzakki');
      const imgPreview = document.querySelector('.img-preview');

      fotoLabel.textContent = foto.files[0].name;

      const fileFoto = new FileReader();
      fileFoto.readAsDataURL(foto.files[0]);

      fileFoto.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
</body>

</html>