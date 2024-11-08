<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h1 class="text-center">Form Registrasi</h1>
<form class="container form mt-3 w-50" action="p_form.php" method="POST">

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <input id="umur" name="umur" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki"> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
  <label class="col-4">Pendidikan</label>
    <div class="col-8">
        <select id="pendidikan" name="pendidikan" class="form-control">
          <option value = ""></option><option value = "SD">SD</option><option value = "SMP">SMP</option><option value = "SMA">SMA</option><option value = "DI">DI</option><option value = "DII">DII</option><option value = "DIII">DIII</option><option value = "S1">S1</option><option value = "S2">S2</option><option value = "S3">S3</option>        </select>
    </div>
  </div>
  <div class="form-group row">
  <label class="col-4">Hobi</label>
    <div class="col-8">
      <input type="checkbox" name="hobi[]" value=" Membaca Buku "> Membaca Buku <br/><input type="checkbox" name="hobi[]" value=" Travelling "> Travelling <br/><input type="checkbox" name="hobi[]" value=" Olahraga "> Olahraga <br/><input type="checkbox" name="hobi[]" value=" Nonton "> Nonton <br/><input type="checkbox" name="hobi[]" value=" Hiking "> Hiking <br/><input type="checkbox" name="hobi[]" value=" Mancing "> Mancing <br/>    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" class="btn btn-primary" value="Daftar" name="proses"/>
    </div>
  </div>

</form>
</body>
</html>
