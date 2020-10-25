<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kabupaten</th>
            <th>Jenis Data</th>
            <th>Tahun</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($product as $key => $value) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $value['nm_kab']; ?></td>
                <td><?= $value['nm_jenis_data']; ?></td>
                <td><?= $value['thn']; ?></td>
                <td><?= $value['jlh_data']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>