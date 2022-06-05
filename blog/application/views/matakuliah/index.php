<div class="col-md-12">
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                
               
            </tr>
</thead>
<tbody>
     
            <?php
            $nomor = 1;
            foreach ($list_matkul as $matkul) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $matkul->nama ?></td>
                    <td><?= $matkul->sks ?></td>
                    <td><?= $matkul->kode ?></td>
                    
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>