<?php
    include("koneksi.php");
    $sql="SELECT * FROM typepokemon";
?>
<div style="text-align: center;">
    <h2>Selamat Datang <?php 
    if(isset($_SESSION['nama'])){
    echo $_SESSION["nama"];}?></h2><br>
    <h3>Silahkan Pilih Pokemon Yang Disukai</h3>
</div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="NamaPokemon" class="form-label">Nama</label>
                <input id="NamaPokemon" name="NamaPokemon" type="text" class="form-control" placeholder="Nama Pokemon" value="">
            </div>
            <div class="col-md-4 mb-3">
                <label >Type</label><br>
                <select class="form-select mr-sm-2" name="Tipe1" id="Tipe1">
                    <option selected value="">Primary Type</option>
                    <?php
                        $hasil = mysqli_query($kon,$sql);
                        while ($data = mysqli_fetch_array($hasil)) {
                    ?>
                    <option value="<?php echo $data['Tipe'];?>"><?php echo $data['Tipe'];?></option>
                    <?php
                        }
                    ?>
                </select>
                <select class="form-select mr-sm-2" name="Tipe2" id="Tipe2">
                    <option selected value="">Secondary Type</option>
                    <?php
                        $hasil = mysqli_query($kon,$sql);
                        while ($data = mysqli_fetch_array($hasil)) {
                    ?>
                    <option value="<?php echo $data['Tipe'];?>"><?php echo $data['Tipe'];?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="col-md-4 mb-3">
            <br>
            <?php
            if(isset($_SESSION['nama'])){
            echo '<input type="button" value="Pokemon Fav" class="btn btn-primary btn-lg">';}?>
            </div>
        </div>
<div class="data"></div>