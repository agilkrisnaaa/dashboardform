<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Data Keluarga Karyawan</title>
  <link rel="shortcut icon" href="sicepat.png">
	<link rel="stylesheet" href="styles.css">
  <!--<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>-->
</head>
</head>
<body>
<form method="post" action="simpan_data.php" enctype="multipart/form-data">
<div class="wrapper">
    <div class="title">
      Form Data Keluarga Karyawan<br>
      <label>PT. Sicepat Ekspres</label><br>
      <img src="sicepat.png">
    </div>

    <div class="form">
       <div class="inputfield">
          <label>Email : </label>
          <input type="text" name="email" class="input">
       </div>  

        <div class="inputfield">
          <label>Email Perusahaan:<i style="color: red;">*</i></label>
          <input type="text" name="emailperusahaan" class="input">
       </div>  

       <div class="inputfield">
          <label>NIK Karyawan:<i style="color: red;">*</i></label>
          <input type="text" name="nikkaryawan" class="input">
       </div>  

      <div class="inputfield">
         <label>NIK KTP:<i style="color: red;">*</i></label>
          <input type="text" name="nikktp" class="input">
       </div> 

       <div class="inputfield">
         <label>Nomor SIM ( Untuk Posisi dengan Persyaratan SIM wajib Melakukan pengisian sedangkan untuk posisi lain jika tidak memiliki dapat di isi _ ):</label>
          <input type="text" name="nosim" class="input">
       </div>

       <div class="inputfield">
         <label>Nama Sesuai KTP:<i style="color: red;">*</i></label>
          <input type="text" name="namaktp" class="input">
       </div>

       <div class="inputfield">
         <label>Nama Ibu Kandung:<i style="color: red;">*</i></label>
          <input type="text" name="namaibu" class="input">
       </div>

       <div class="inputfield">
         <label>Tempat Lahir:<i style="color: red;">*</i></label>
          <input type="text" name="tempatlahir" class="input">
       </div>

       <div class="inputfield">
         <label>Tanggal Lahir:<i style="color: red;">*</i></label>
          <input type="date" name="tanggallahir" class="input">
       </div>

       <div class="inputfield">
         <label>Agama:<i style="color: red;">*</i></label>
          <input type="text" name="agama" class="input">
       </div>

       <div class="inputfield">
         <label>Nomer Handphone ( Whatsapp ):<i style="color: red;">*</i></label>
          <input type="text" name="nowhatsapp" class="input">
       </div>

       <div class="inputfield">
         <label>Masukan No BPJS Kesehatan ( jika tidak memiliki dapat di isi _ ):</label>
          <input type="text" name="nobpjs" class="input">
       </div>

       <div class="inputfield">
         <label>Masukan Nomor Pokok Wajib Pajak (NPWP) (Jika Belum Memiliki Harap Untuk Mengisi dengan _ ) Karyawan tanpa Npwp akan menerima potongan pajak lebih besar 20%, yang mana akan berimpact kepada bertambahnya beban perusahaan.:</label>
          <input type="text" name="nonpwp" class="input">
       </div>

       <div class="inputfield">
          <label>Direktorat:<i style="color: red;">*</i></label>
          <div class="custom_select">
        <select name="direktorat" id="direktorat" class="form-control" required>
        <option value="---"/> --- </option>
        <option value="Directorate Commercial"/>Directorate Commercial </option>
        <option value="Directorate Finance"/> Directorate Finance </option>
        <option value="Directorate Human Capital"/> Directorate Human Capital </option>
        <option value="Directorate Marketing"/> Directorate Marketing </option>
        <option value="Directorate Operation"/> Directorate Operation </option>
        <option value="Directorate Technology"/> Directorate Technology </option>
        <option value="Department Procurement"/> Department Procurement </option>
        <option value="Department Legal"/> Department Legal </option>
        <option value="Department Internal Audit"/> Department Internal Audit </option>
        <option value="Project Management Officer"/> Project Management Officer </option>
        <option value="Personal Assistant CEO"/> Personal Assistant CEO </option>
            </select>
          </div>
       </div> 

       <div class="inputfield">
          <label>Divisi / Departemen:<i style="color: red;">*</i></label>
          <div class="custom_select">
        <select name="divisi" id="divisi" class="form-control">
        <option value="---"/> --- </option>
        <option value="Directorate Commercial"/>Dir. Commercial - Division Sales & Partnership </option>
        <option value="Directorate Finance"/>Dir. Commercial - Division Cost Control & Pricing </option>
        <option value="Directorate Human Capital"/>Dir. Commercial - Division Commercial Support </option>
        <option value="Directorate Marketing"/>Dir. Commercial - Department Trace & Claim </option>
        <option value="Directorate Operation"/>Dir. Commercial - Department SSD </option>
        <option value="Directorate Technology"/>Dir. Commercial - Department Social Media </option>
        <option value="Department Procurement"/>Dir. Commercial - Department Sales Social Commerce & Field Sales </option>
        <option value="Department Legal"/>Dir. Commercial - Department Sales Pricing </option>
        <option value="Department Internal Audit"/>Dir. Commercial - Department Sales E-Commerce </option>
        <option value="Project Management Officer"/>Dir. Commercial - Department Product & Project Management </option>
        <option value="Personal Assistant CEO"/>Dir. Commercial - Department Operational Admin & Complain </option>
        <option value="Directorate Commercial"/>Dir. Commercial - Department Management Admin & Data CT </option>
        <option value="Directorate Finance"/>Dir. Commercial - Department Line Haul Operation </option>
        <option value="Directorate Human Capital"/>Dir. Commercial - Department Line Haul Development & Monitoring </option>
        <option value="Directorate Marketing"/>Dir. Commercial - Department Cost Control </option>
        <option value="Directorate Operation"/>Dir. Commercial - Department Corporate & Regional Sales </option>
        <option value="Directorate Technology"/>Dir. Commercial - Department Control Tower </option>
        <option value="Department Procurement"/>Dir. Commercial - Department Call Center </option>
        <option value="Department Legal"/>Dir. Commercial - Department Business Solution & Partnership </option>
        <option value="Department Internal Audit"/>Dir. Commercial - Under Directorate Commercial ( Non Division & Non Department ) </option>
        <option value="Project Management Officer"/>Dir. Finance - Division Finance & Accounting </option>
        <option value="Personal Assistant CEO"/>Dir. Finance - Department Tax </option>
        <option value="Directorate Commercial"/>Dir. Finance - Department Finance & Treasury </option>
        <option value="Directorate Finance"/>Dir. Finance - Department Budget </option>
        <option value="Directorate Human Capital"/>Dir. Finance - Department Branch Controller </option>
        <option value="Directorate Marketing"/>Dir. Finance - Department Billing & Collection </option>
        <option value="Directorate Operation"/>Dir. Finance - Department Accounting </option>
        <option value="Directorate Technology"/>Dir. Finance - Under Directorate Finance ( Non Division & Non Department ) </option>
        <option value="Department Procurement"/>Dir. Human Capital - Division Recruitment & Assesment </option>
        <option value="Department Legal"/>Dir. Human Capital - Division HC Learning & Development </option>
        <option value="Department Internal Audit"/>Dir. Human Capital - Division HC Compliance </option>
        <option value="Project Management Officer"/>Dir. Human Capital - Division Compensation & Benefit </option>
        <option value="Personal Assistant CEO"/>Dir. Human Capital - Department Industrial Relation </option>
        <option value="Directorate Commercial"/>Dir. Human Capital - Department Health, Safety & Environment </option>
        <option value="Directorate Finance"/>Dir. Human Capital - Department HCIS </option>
        <option value="Directorate Human Capital"/>Dir. Human Capital - Department HC Service </option>
        <option value="Directorate Marketing"/>Dir. Human Capital - Department Compensation & Benefit </option>
        <option value="Directorate Operation"/>Dir. Human Capital - Department HC Learning </option>
        <option value="Directorate Technology"/>Dir. Human Capital - Department HC Development </option>
        <option value="Department Procurement"/>Dir. Human Capital - Department Recruitment </option>
        <option value="Department Legal"/>Dir. Human Capital - Department Assesment </option>
        <option value="Department Internal Audit"/>Dir. Human Capital - Under Directorate Human Capital ( Non Division & Non Department ) </option>
        <option value="Project Management Officer"/>Dir. Marketing - Direktorat Marketing </option>
        <option value="Personal Assistant CEO"/>Dir. Marketing - Division Marketing </option>
        <option value="Directorate Commercial"/>Dir. Marketing - Under Directorate Marketing ( Non Division & Non Department ) </option>
        <option value="Directorate Finance"/>Dir. Operation - Division Quality Assurance </option>
        <option value="Directorate Human Capital"/>Dir. Operation - Division Ground Operation </option>
        <option value="Directorate Marketing"/>Dir. Operation - Division General Affair </option>
        <option value="Directorate Operation"/>Dir. Operation - Division Control Tower </option>
        <option value="Directorate Technology"/>Dir. Operation - Division PUDO </option>
        <option value="Department Procurement"/>Dir. Operation - Direktorat Operation </option>
        <option value="Department Legal"/>Dir. Operation - Department Special Project Management </option>
        <option value="Department Internal Audit"/>Dir. Operation - Department Sortation </option>
        <option value="Project Management Officer"/>Dir. Operation - Department SDS </option>
        <option value="Personal Assistant CEO"/>Dir. Operation - Department Last Mile </option>
        <option value="Directorate Commercial"/>Dir. Operation - Department Industrial Engineering </option>
        <option value="Directorate Finance"/>Dir. Operation - Department HUB </option>
        <option value="Directorate Human Capital"/>Dir. Operation - Department Food </option>
        <option value="Directorate Marketing"/>Dir. Operation - Department First Mile </option>
        <option value="Directorate Operation"/>Dir. Operation - Department CT Line Haul & Fleet </option>
        <option value="Directorate Technology"/>Dir. Operation - Department COD </option>
        <option value="Department Procurement"/>Dir. Operation - Under Directorate Operation ( Non Division & Non Department ) </option>
        <option value="Department Legal"/>Dir. Technology - Division Product </option>
        <option value="Department Internal Audit"/>Dir. Technology - Division Infra & Support </option>
        <option value="Project Management Officer"/>Dir. Technology - Division Engineering </option>
        <option value="Personal Assistant CEO"/>Dir. Technology - Under Directorate Technology ( Non Division & Non Department ) </option>
            </select>
          </div>
       </div> 

        <div class="inputfield">
          <label>Status Pernikahan:<i style="color: red;">*</i></label>
          <div class="custom_select">
        <select name="statuspernikahan" id="statuspernikahan" class="form-control">
        <option value="---"/> --- </option>
        <option value="Belum Menikah"/>Belum Menikah</option>
        <option value="Menikah"/> Menikah </option>
        <option value="Janda"/> Janda </option>
        <option value="Duda"/> Duda </option>
            </select>
          </div>
       </div> 

       <div class="inputfield">
         <label>Jumlah Tanggungan Anak :<i style="color: red;">*</i></label>
          <div class="custom_select">
        <select name="jumlahanak" id="jumlahanak" class="form-control">
        <option value="---"/> --- </option>
        <option value="1"/>1</option>
        <option value="2"/> 2 </option>
        <option value="3"/> 3 </option>
        <option value="4"/> 4 </option>
        <option value="5"/> 5 </option>
            </select>
          </div>
       </div> 
<br><br>
<div class="title">
      Daftar Susunan Anggota Keluarga (Istri/Suami)
    </div>
       <div class="inputfield">
         <label>Nama Istri / Suami:</label>
          <input type="text" name="namasuamiistri" class="input">
       </div>

       <div class="inputfield">
         <label>Masukan Nomor Handphone Whatsapp Suami/Istri:</label>
          <input type="text" name="nowhatsappkeluarga" class="input">
       </div>

       <div class="inputfield">
         <label>Tempat Lahir:</label>
          <input type="text" name="tempatlahirkeluarga" class="input">
       </div>
       <div class="inputfield">
         <label>Tanggal Lahir:</label>
          <input type="date" name="tanggallahirkeluarga" class="input">
       </div>

  <br><br>
       <div class="title">
      Daftar Susunan Anggota Keluarga (Anak) ke 1
    </div>

       <div class="inputfield">
         <label>Nama Anak ke 1:</label>
          <input type="text" name="namaanak1" class="input">
       </div>
        
        <div class="inputfield">
          <label>Tempat Lahir Anak ke 1:</label>
          <input type="text" name="tempatlahir1" class="input">
       </div> 
      <div class="inputfield">
          <label>Tanggal Lahir Anak ke 1:</label>
          <input type="date" name="tanggallahir1" class="input">
       </div> 
      <div class="inputfield">
          <label>Jenis Kelamin :<i style="color: red;">*</i></label>
          <div class="custom_select">
        <select name="jk1" id="jk1" class="form-control">
        <option value="---"/> --- </option>
        <option value="laki - laki"/>Laki - Laki</option>
        <option value="perempuan"/> Perempuan </option>
            </select>
          </div>
       </div> 

       <br><br>
       <div class="title">
      Daftar Susunan Anggota Keluarga (Anak) ke 2
    </div>

       <div class="inputfield">
         <label>Nama Anak ke 2:</label>
          <input type="text" name="namaanak2" class="input">
       </div>
        
        <div class="inputfield">
          <label>Tempat Lahir Anak ke 2:</label>
          <input type="text" name="tempatlahir2" class="input">
       </div> 
      <div class="inputfield">
          <label>Tanggal Lahir Anak ke 2:</label>
          <input type="date" name="tanggallahir2" class="input">
       </div> 
      <div class="inputfield">
          <label>Jenis Kelamin :<i style="color: red;">*</i></label>
          <div class="custom_select">
        <select name="jk2" id="jk2" class="form-control">
        <option value="---"/> --- </option>
        <option value="laki - laki"/>Laki - Laki</option>
        <option value="perempuan"/> Perempuan </option>
            </select>
          </div>
       </div> 

       <br><br>
       <div class="title">
      Daftar Susunan Anggota Keluarga (Anak) ke 3
    </div>

       <div class="inputfield">
         <label>Nama Anak ke 3:</label>
          <input type="text" name="namaanak3" class="input">
       </div>
        
        <div class="inputfield">
          <label>Tempat Lahir Anak ke 3:</label>
          <input type="text" name="tempatlahir3" class="input">
       </div> 
      <div class="inputfield">
          <label>Tanggal Lahir Anak ke 3:</label>
          <input type="date" name="tanggallahir3" class="input">
       </div> 
      <div class="inputfield">
          <label>Jenis Kelamin :<i style="color: red;">*</i></label>
          <div class="custom_select">
        <select name="jk3" id="jk3" class="form-control">
        <option value="---"/> --- </option>
        <option value="laki - laki"/>Laki - Laki</option>
        <option value="perempuan"/> Perempuan </option>
            </select>
          </div>
       </div> 

       <br><br>
       <div class="title">
      Daftar Susunan Anggota Keluarga (Anak) ke 4
    </div>

       <div class="inputfield">
         <label>Nama Anak ke 4:</label>
          <input type="text" name="namaanak4" class="input">
       </div>
        
        <div class="inputfield">
          <label>Tempat Lahir Anak ke 4:</label>
          <input type="text" name="tempatlahir4" class="input">
       </div> 
      <div class="inputfield">
          <label>Tanggal Lahir Anak ke 4:</label>
          <input type="date" name="tanggallahir4" class="input">
       </div> 
      <div class="inputfield">
          <label>Jenis Kelamin :<i style="color: red;">*</i></label>
          <div class="custom_select">
        <select name="jk4" id="jk4" class="form-control">
        <option value="---"/> --- </option>
        <option value="laki - laki"/>Laki - Laki</option>
        <option value="perempuan"/> Perempuan </option>
            </select>
          </div>
       </div> 

       <br><br>

       <br><br>
       <div class="title">
      Lampiran Pendukung
    </div>
      <div class="inputfield">
          <label>Lampiran KTP:</label>
            <input type="file" name="buktiktp" class="form-control" placeholder="Masukan Username" />
       </div> <br>
       <div class="inputfield">
          <label>Lampiran Kartu Keluarga (KK):</label>
            <input type="file" name="buktikk" class="form-control" placeholder="Masukan Username" />
       </div> 
       <div class="inputfield">
          <label>Lampiran Surat Ijin Mengemudi ( SIM ) untuk posisi tertentu wajib di lampirkan:</label>
            <input type="file" name="buktisim" class="form-control" placeholder="Masukan Username" />
       </div> 
       <div class="inputfield">
          <label>Lampiran Ijazah ( Pendidikan Terakhir ):</label>
            <input type="file" name="buktiijazah" class="form-control" placeholder="Masukan Username" />
       </div> 
       <div class="inputfield">
          <label>Bukti Vaksinasi Dosis 1 & Dosis 2:</label>
            <input type="file" name="buktivaksin" class="form-control" placeholder="Masukan Username" />
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Sumbit" class="btn">
      </div>
    </div>
</div>	
<!--
<script type="text/javascript">
  $(function () {
      $("#statuspernikahan").change(function () {
          if ($(this).val() == "Beluma Menikah") {
              $("#jumalhanak").hide();
              $("#namasuamiistri").hide();
              $("#nowhatsappkeluarga").hide();
              $("#tempatlahirkeluarga").hide();
              $("#tanggallahirkeluarga").hide();
              $("#namaanak1").hide();
              $("#tempatlahir1").hide();
              $("#tanggallahir1").hide();
              $("#jk1").hide();
              $("#namaanak2").hide();
              $("#tempatlahir2").hide();
              $("#tanggallahir2").hide();
              $("#jk2").hide();
              $("#namaanak3").hide();
              $("#tempatlahir3").hide();
              $("#tanggallahir3").hide();
              $("#jk3").hide();
              $("#namaanak4").hide();
              $("#tempatlahir4").hide();
              $("#tanggallahir4").hide();
              $("#jk4").hide();
              
              
          } else {
            $("#jumalhanak").show();
              $("#namasuamiistri").show();
              $("#nowhatsappkeluarga").show();
              $("#tempatlahirkeluarga").show();
              $("#tanggallahirkeluarga").show();
              $("#namaanak1").show();
              $("#tempatlahir1").show();
              $("#tanggallahir1").show();
              $("#jk1").show();
              $("#namaanak2").show();
              $("#tempatlahir2").show();
              $("#tanggallahir2").show();
              $("#jk2").show();
              $("#namaanak3").show();
              $("#tempatlahir3").show();
              $("#tanggallahir3").show();
              $("#jk3").show();
              $("#namaanak4").show();
              $("#tempatlahir4").show();
              $("#tanggallahir4").show();
              $("#jk4").show();
          }
      });
  });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript'>
$(window).load(function(){
$("#statuspernikahan").change(function() {
			console.log($("#statuspernikahan option:selected").val());
			if ($("#status pernikahan option:selected").val() == 'Belum Menikah') {
				$('#jumlahanak').prop('hidden', 'true');
        $('#namasuamiisrtis').prop('hidden', 'true');
        $('#nowhatsappkeluarga').prop('hidden', 'true');
        $('#tempatlahirkeluarga').prop('hidden', 'true');
        $('#tanggallahirkeluarga').prop('hidden', 'true');
        $('#namaanak1').prop('hidden', 'true');
        $('#tempatlahir1').prop('hidden', 'true');
        $('#tanggallahir1').prop('hidden', 'true');
        $('#jk1').prop('hidden', 'true');
        $('#namaanak2').prop('hidden', 'true');
        $('#tempatlahir2').prop('hidden', 'true');
        $('#tanggallahir2').prop('hidden', 'true');
        $('#jk2').prop('hidden', 'true');
        $('#namaanak3').prop('hidden', 'true');
        $('#tempatlahir3').prop('hidden', 'true');
        $('#tanggallahir3').prop('hidden', 'true');
        $('#jk3').prop('hidden', 'true');
        $('#namaanak4').prop('hidden', 'true');
        $('#tempatlahir4').prop('hidden', 'true');
        $('#tanggallahir4').prop('hidden', 'true');
        $('#jk4').prop('hidden', 'true');
			} else {
				$('#jumlahanak').prop('hidden', false);
        $('#namasuamiisrtis').prop('hidden', false);
        $('#nowhatsappkeluarga').prop('hidden', false);
        $('#tempatlahirkeluarga').prop('hidden', false);
        $('#tanggallahirkeluarga').prop('hidden', false);
        $('#namaanak1').prop('hidden', false);
        $('#tempatlahir1').prop('hidden', false);
        $('#tanggallahir1').prop('hidden', false);
        $('#jk1').prop('hidden', false);
        $('#namaanak2').prop('hidden', false);
        $('#tempatlahir2').prop('hidden', false);
        $('#tanggallahir2').prop('hidden', false);
        $('#jk2').prop('hidden', false);
        $('#namaanak3').prop('hidden', false);
        $('#tempatlahir3').prop('hidden', false);
        $('#tanggallahir3').prop('hidden', false);
        $('#jk3').prop('hidden', false);
        $('#namaanak4').prop('hidden', false);
        $('#tempatlahir4').prop('hidden', false);
        $('#tanggallahir4').prop('hidden', false);
        $('#jk4').prop('hidden', false);
			}
		});
});
</script>-->
	
</body>

</html>