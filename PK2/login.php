<div class="modal fade" id="SignUp" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="DaftarLabel">Daftar Gan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="InUser.php" method="post">
          <div class="mb-3">
            <label for="namauser" class="form-label">Nama</label>
            <input type="text" class="form-control" id="namauser" name="NAMA" required>
          </div>
          <div class="mb-3">
            <label for="user" class="form-label">Username</label>
            <input type="text" class="form-control" id="user" name="UNAMA" aria-describedby="userdes" required>
            <div id="userdes" class="form-text">User Jangan Ada Spasi</div>
          </div>
          <div class="mb-3">
            <label for="Email1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" name="UEMAIL" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="Password1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password1" name="UEPASS" required>
          </div>
          <button type="submit" class="btn btn-primary" name="DaftarUser">Daftar</button>
        </form>
      </div>
      <div class="modal-footer">
        Selamat Mendaftar
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="LoginUser" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="DaftarLabel">Login Gan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="InLogin.php" method="post">
          <div class="mb-3">
            <label for="UserEmail" class="form-label">Email atau Username</label>
            <input type="text" class="form-control" id="UserEmail" name="NamaLogin" required>
          </div>
          <div class="mb-3">
            <label for="Passnya" class="form-label">Password</label>
            <input type="password" class="form-control" id="Passnya" name="PassLogin" required>
          </div>
          <button type="submit" class="btn btn-primary" name="LoginUser">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <label for="Mendaftar" class="form-label">Punya Akun gak Gan?</label>  
        <button type="button" class="btn btn-primary" data-bs-target="#SignUp" data-bs-toggle="modal" id="Mendaftar">Sign Up</button>
      </div>
    </div>
  </div>
</div>