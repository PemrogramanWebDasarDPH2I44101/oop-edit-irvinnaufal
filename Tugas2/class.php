<?php
    class Crow {
        private $conn;
        public function Crow() {
            $servername = "localhost";
			$database 	= "webdasar";
			$username	= "root";
			$password 	= "";
			$this->conn = mysqli_connect($servername, $username, $password, $database);
        }
        public function Tambah_data($nim, $nama, $tgl_lahir) {
        	$sql 		=  "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$tgl_lahir')";
            $result	 	=   mysqli_query($this->conn,$sql);
                if ($sql) {
                    ?>
                    <script>
                        alert("Data berhasil dibuat..");
                        location = "index.php";
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Data gagal dibuat..");
                        location = "index.php";
                    </script>
                    <?php
                }
            }
        public function Delete_data($nim) { 
            $sql 	= "DELETE FROM mahasiswa WHERE nim = '$nim'";
            $result 	=  mysqli_query($this->conn,$sql);
            if ($result) {
                ?>
                <script>
                    alert("Data berhasil dihapus..");
                    location = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Data gagal dihapus..");
                    location = "index.php";
                </script>
                <?php
            }
        }

        public function Edit_data($nim, $nama, $tgl_lahir) {
            $sql 	= "UPDATE mahasiswa SET nama = '$nama', tgl_lahir = '$tgl_lahir' WHERE nim ='$nim'";
            $result    = mysqli_query($this->conn,$sql);
            if ($result) {
                ?>
                <script>
                    alert("Data berhasil diubah..");
                    location = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Data gagal diubah..");
                    location = "index.php";
                </script>
                <?php
            }
        }
        public function view_data() {
            $sql 	= "SELECT * FROM mahasiswa";
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }

        public function view_edit($nim) {
            $sql 	= "SELECT * FROM mahasiswa WHERE nim = '$nim'";
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }
    }
    $data = new Crow();
    if (isset($_GET['Tambah_data'])) {
        $data -> Tambah_data($_POST['nim'], $_POST['nama'], $_POST['tgl_lahir']);
    }
    if (isset($_GET['Delete'])) {
        $data -> Delete_data($_GET['Delete']);
    }
    if (isset($_GET['Edit_data'])) {
        $data -> Edit_data($_GET['edit_data'], $_POST['nama'], $_POST['tgl_lahir']);
    }
?>