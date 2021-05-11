<!DOCTYPE html>
<html lang="en">
<body>
	<form style="margin: 30px;" method="post" action="tugas_output.php">
	<fieldset style="margin: 100px 300px;">
		<legend style="text-align: center;"><h2>Data Anda</h2></legend>
            <label>Nama: </label>
            <input type="text" name="nama">
            <br>
            <label>Tanggal Lahir: </label>
            <input type="date" name="tgl_lahir">
            <br>
            <label>Alamat: </label>
            <input type="text" name="alamat">
            <br>
            <label>Jenis Kelamin : </label> 
            <input type="radio" name="jeniskelamin" value="pria">Pria<input type="radio" name="jeniskelamin" value="wanita">Wanita<br>
            <br>
            <label>Pekerjaan: 
            <select name='pekerjaan'>
                <option value='Direktur'>Direktur</option>
                <option value='Manager'>Manager</option>
                <option value='Staff'>Staff</option>
                <option value='Operator'>Operator</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Kirim">
    </form>

	</fieldset>
</body>
</html>