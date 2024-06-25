<?=$this->extend('index');?>
<?=$this->section('content');?>

<table class="table table-bordered" width="100%" id="tbl">
    <thead>
    <tr>
        <th width="50">No .</th>
        <th>Kategori</th>
        <th width="150">#</th>
    </tr align="center">
<?php
$no = 1;
foreach ($tbl_kategori as $isi):
?>
    <tr>
        <td><?=$no?>;</td>
        <td><?=$isi->kategori;?></td>
        <td align="center">
            <button class="btn btn-sm btn-danger">hapus</button>
            <button class="btn btn-sm btn-success">Ubah</button>
        </td>
    </tr>
    </thead>
    <?php
$no++;
endforeach;
?>
</table>
<script>
    $(function{
        $('#tbl').dataTable()
    })
</script>
<?=$this->endSection();?>