<?php
require_once('ConnectDB.php');
class Makanan extends ConnectDB {
    public function __construct($kalori) {
        if ($kalori != 0) {
            $sql = 'SELECT * FROM kalori_makanan WHERE kalori <= ' . $kalori . ' LIMIT 10';
        } else {
            $sql = 'SELECT * FROM kalori_makanan';
        }

        $res = $this->connect()->query($sql);

        while ($row = $res->fetch()) {
?>
            <tr>
                <td align="center"></td>
                <td><?php echo $row['nama_makanan']; ?></td>
                <td align="center"><?php echo $row['berat']; ?></td>
                <td align="center"><?php echo $row['kalori']; ?></td>
            </tr>
        <?php
        }
    }
}
?>