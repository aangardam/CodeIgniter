 <div class="bg-light border-right" id="sidebar-wrapper">
 	<div class="sidebar-heading">
 	<?php
        if ($this->session->userdata("jabatan") == 'kepsek') {
            echo "Kepala Sekolah";
        }else{
          echo $this->session->userdata("jabatan");
        }
    ?>
 	</div>
 	<div class="list-group list-group-flush">
 		<?php
 			if ($this->session->userdata("jabatan") == 'kepsek') {
 		?>
 			<a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Data Siswa</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Data Guru</a>
 		<?php
 			}elseif ($this->session->userdata("jabatan") == 'guru') {
 		?>
 			<a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
	 		<a href="<?php echo base_url('index.php/profilguru');?>" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Mata Pelajaran</a>
			<a href="#" class="list-group-item list-group-item-action bg-light">Abesensi Siswa</a>
 		<?php
 			}elseif ($this->session->userdata("jabatan")=='tu') {
 		?>
 			<a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Data Siswa</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Data Guru</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Nilai</a>
      <?php
    }elseif ($this->session->userdata("jabatan")=='siswa') {
   		?>
      <a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Absen</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Nilai</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Ujian Online</a>
      <?php
    }elseif ($this->session->userdata("jabatan")=='ortu') {
   		?>
      <a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="<?php echo base_url('index.php/kanak');?>" class="list-group-item list-group-item-action bg-light">Absensi Anak</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Nilai Anak</a>




 		<?php
 			}else{
 		?>
 			<a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Perkembangan Anak</a>


 		<?php
 			}
 		?>

 		<a href="<?php echo base_url('index.php/login/logout'); ?>" class="list-group-item list-group-item-action bg-light">Logout</a>
 	</div>
 </div>
