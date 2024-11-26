<?php
    if (isset($_POST['simpan'])) {
        $no = $_POST['no'];
        $nama = $_POST['nama'];
        $unit = $_POST['unit'];
        $tanggal = $_POST['tgl'];
        $jabatan = $_POST['jabatan'];
        $lama = $_POST['lama'];
        $status = $_POST['status'];
        $bpjs = $_POST['bpjs'];
        $pinjaman = $_POST['pinjaman'];
        $tabungan = $_POST['tabungan'];
        $infaq = $_POST['lainnya'];

        if ($lama >= 5) {
            $tunjangan = 1000000;
        } else {
            $tunjangan = 0;
        }
        
        if ($jabatan == 'Kepala Sekolah') {
            $gaji = 10000000;
        } elseif ($jabatan == 'Wakasek') {
            $gaji = 7500000;
        } elseif ($jabatan == 'Guru') {
            $gaji = 5000000;
        } elseif ($jabatan == 'OB') {
            $gaji = 2500000;
        } else {
            $gaji = 0;
        }

       
        if ($status === 'Tetap') {
            $bonus = 500000;
        } else {
            $bonus = 0;
        }

        
        $gajiBersih = ($gaji + $bonus + $tunjangan) - ($bpjs + $pinjaman + $tabungan + $infaq);


        
        class gaji {
          public function gaji($no, $nama, $unit, $tanggal, $jabatan, $gaji, $status,$bonus, $lama, $bpjs, $pinjaman, $tabungan, $infaq, $gajiBersih) {
              ?>
              <center>
              <br>
                <div class="card" style="width:50%;">
                <h6 class="card-header"><?php echo $nama; ?></h6>
              <div class="card-body">
                  <h4 class="text-primary">STRUK GAJI</h4>
                  <table>
                      <tr class="text-primary">
                          <td>No</td>
                          <td>:</td>
                          <td><?php echo $no; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Nama</td>
                          <td>:</td>
                          <td><?php echo $nama; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Unit Pendidikan</td>
                          <td>:</td>
                          <td><?php echo $unit; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Tanggal Gaji</td>
                          <td>:</td>
                          <td><?php echo $tanggal; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Jabatan</td>
                          <td>:</td>
                          <td><?php echo $jabatan; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Gaji</td>
                          <td>:</td>
                          <td><?php echo number_format($gaji, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Lama Kerja</td>
                          <td>:</td>
                          <td><?php echo $lama; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Status kerja</td>
                          <td>:</td>
                          <td><?php echo $status; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Bonus</td>
                          <td>:</td>
                          <td><?php echo number_format($bonus, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>BPJS</td>
                          <td>:</td>
                          <td><?php echo number_format($bpjs, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Pinjaman</td>
                          <td>:</td>
                          <td><?php echo number_format($pinjaman, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>cicilan</td>
                          <td>:</td>
                          <td><?php echo number_format($tabungan, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Infaq</td>
                          <td>:</td>
                          <td><?php echo number_format($infaq, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Gaji Bersih</td>
                          <td>:</td>
                          <td><?php echo "Rp." . number_format($gajiBersih, 0, ',', '.'); ?></td>
                      </tr>
                  </table>
              </div>
          </div>
              <?php
          }
      }
   
      
      $cetak = new gaji();
      $cetak->gaji($no, $nama, $unit, $tanggal, $jabatan, $gaji, $status,$bonus, $lama, $bpjs, $pinjaman, $tabungan, $infaq, $gajiBersih);
    } 
?>
</center>

  
   
   