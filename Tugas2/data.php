<table>
    <thead>
       <tr>
       <th>NIM</th>
       <th>Nama</th>
       <th>Tanggal Lahir</th>
       <th>Action</th>
            </tr>
    </thead>
    <tbody>
     <?php
         require("class.php");
         $result = $data -> view_data();                    
         if (mysqli_num_rows($result)>0) {
             while ($row = mysqli_fetch_assoc($result)) {
         ?>
             <tr>
                 <td><?php echo $row['nim'];?></td>
                 <td><?php echo $row['nama'];?></td>
                 <td><?php echo $row['tgl_lahir'];?></td>
                 <td><a href="index.php?<?php echo $row['nim'];?>"><input type="button"  value="Edit"></a> | <a href="class.php?Delete=<?php echo $row['nim'];?>" onclick="return confirm('Apakah anda yakin ingin menhapus data ini..?');"><input type="button" value="Delete"></a></td>
              </tr>
                        <?php
                        }
                    ?>
    </tbody>
</table>