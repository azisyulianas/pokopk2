<?php
session_start();
?>
<table style="width: 100%;" class="">
        <tr>
            <thead>
                <th>NO</th>
                <th>NO DEX</th>
                <th>NAMA</th>
                <th>TYPE 1</th>
                <th>TYPE 2</th>
                <th>ABILITY</th>
                <th>H. ABILITY</th>
                <th>HP</th>
                <th>ATTACK</th>
                <th>DEFENSE</th>
                <th>SP. ATTACK</th>
                <th>SP. DEFENSE</th>
                <th>SPEED</th>
                <th>TOTAL</th>
                <?php
                if(isset($_SESSION['nama'])){
                echo '<th>Masukan Pokemon Fav</th>';}?>
            </thead>
        </tr>
<?php
    include('koneksi.php');
    $tipe1="";
    $tipe2="";
    $keyword="";
    if (isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $tipe1 = $_POST['tipe1'];
        $tipe2 = $_POST['tipe2'];
    }
    $no=1;
    $search_key = '%'. $keyword .'%';
    $search_tipe1 = '%'. $tipe1 .'%';
    $search_tipe2 = '%'. $tipe2 .'%';
    $query = 'SELECT * FROM datapokemon WHERE Type1 LIKE ? AND Type2 LIKE ? AND (Nama LIKE ? OR Type1 LIKE ? OR Type2 LIKE ?  OR Ab1 LIKE ? OR Ab2 LIKE ? OR HA LIKE ?)ORDER BY NoDex ASC,Form ASC LIMIT 100';
    $dewan1 = $kon->prepare($query);
    $dewan1->bind_param('ssssssss', $search_tipe1, $search_tipe2, $search_key, $search_key, $search_key,$search_key,$search_key,$search_key);
    $dewan1->execute();
    $res1 = $dewan1->get_result();
    if ($res1->num_rows > 0) {
        while ($row = $res1->fetch_assoc()) {
            ?>
        <tbody>
        <tr>
            <td rowspan="2"> <?php echo $no++;?> </td>
            <td rowspan="2"> <?php echo $row['NoDex'];?> </td>
            <td rowspan="2"> <?php echo $row['Nama'];?> </td>
            <td rowspan="2" class="<?php echo "anu ".$row["Type1"];?>"><?php echo $row["Type1"];?></td>
            <td rowspan="2" class="<?php echo "anu ".$row["Type2"];?>"><?php echo $row["Type2"];?></td>
            <td><?php echo $row['Ab1'];?></td>
            <td rowspan="2"><?php echo $row['HA'];?></td>
            <td rowspan="2"><?php echo $row['HP'];?></td>
            <td rowspan="2"><?php echo $row['ATK'];?></td>
            <td rowspan="2"><?php echo $row['DEF'];?></td>
            <td rowspan="2"><?php echo $row['SP_ATK'];?></td>
            <td rowspan="2"><?php echo $row['SP_DEF'];?></td>
            <td rowspan="2"><?php echo $row['SPD'];?></td>
            <td rowspan="2"><?php echo $row['TOTAL'];?></td>
            <?php 
            if(isset($_SESSION['nama'])){
            echo '<td rowspan="2"><input type="button" value="Masukan ke Fav" class="btn btn-primary"></td>';}?>
            </tr>
            <tr>
                <td><?php echo $row['Ab2'];?></td>
            </tr>
        </tbody>
             <?php
        } }
            ?>
    </table>