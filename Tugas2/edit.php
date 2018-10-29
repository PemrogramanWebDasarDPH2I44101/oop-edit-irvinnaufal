<?php
    require("class.php");
    $nim        = $_GET['nim'];
    $result     = $data ->  view_edit($nim);
    $row        = $result = mysqli_fetch_assoc($result);
?>
<center>
            <h1 >Edit Data</h1>
            <hr>
            <form action="class.php?edit_data=<?php echo $nim;?>" method="post">   
            <table>  
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim'];?>" readonly></td>
            </tr> 
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td> <input type="text" name="nama" value="<?php echo $row['nama'];?>" placeholder="Masukkan Nama..."></td>
            </tr> 
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"></td>
            </tr> 
            <tr>
                <td><input type="submit"  value="Edit"></td>
                <td></td>
                <td><input type="reset"   value="Reset"></td>
            </tr>          
            </form>
            </table>
        </center>

    


