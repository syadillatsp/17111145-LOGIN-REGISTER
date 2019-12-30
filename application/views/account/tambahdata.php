
<body>
      <h3>Dashboard</h3>
      <p>
           Selamat datang di halaman tambah data, <?php echo ucfirst($this->session->userdata('username')); ?>!
           Untuk logout dari sistem, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
      </p><h1 style="" >Tambah data</h1>

<form action="<?= base_url('Myadmin/aksi_tambahdata'); ?>" method="post">
   <input type="text" name="npm" maxlength="12" placeholder="Masukkan NPM">
   <br>
   <input type="text" name="nama" placeholder="Masukkan nama lengkap">
   <br>
   <select name="semester" id="" >
      <?php for ($i = 1; $i < 10; $i++) { ?>
         <option value="<?= $i; ?>"><?= $i; ?></option>
      <?php } ?>
   </select>
   <br>
   <button type="submit">Simpan</button>
</form>

<br>
<table border="1">
	<thead>
		<tr>
			<th rowspan="2" bgcolor="lightgreen">No</th>
			<th rowspan="2" bgcolor="lightgreen">Npm</th>
			<th rowspan="2" bgcolor="lightgreen">Nama</th>
			<th rowspan="2" bgcolor="lightgreen">Semester</th>
		</tr>
	</thead>
	<!-- 
	<tbody>
		<?php 
		$no=1;
		foreach ($tampil as $tpl) {
			echo "<tr ><td>".$no."</td>";
			echo "<td>".$tpl->int_npm."</td>";
			echo "<td>".$tpl->str_nama."</td>";
			echo "<td>".$tpl->int_semester."
			</td></tr>";
		$no++;
	}?>
	</tbody> -->
</table>