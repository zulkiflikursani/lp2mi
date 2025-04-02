<?php
$dir = new DirectoryIterator("E:\My Drive\LP2MI\DOKUMEN LP2MI\DOKUMEN LP2MI\website-lp2mi\PERATURAN UNIVERSITAS");
?>
<table>
    <thead>

        <tr>
            <th>nama file</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dir as $fileinfo) {

            echo "<tr><td>" . $fileinfo->getFilename() . "</td></tr>";
        }
        ?>
    </tbody>
</table>