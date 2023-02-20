<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <center>
        <table>
            <tr>
                <td><img src="./login-asset/img/Logo.png" width="90" height="90"></td>
                <td>
                <center>
                    <font size="3">KEMENTRIAN AGAMA REPUBLIK INDONESIA</font><br>
                    <font size="5"><b>Kantor Kementrian Agama Kabupaten Sumenep</b></font><br>
                    <font size="2">Jl. KH. Agussalim Nomor 286, Kab. Sumenep</font><br>
                    <font size="2"><i>Telp./Fax (0328)662969 e-mail: kabsumenep@kemenag.go.id</i></font>
                </center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
    
        </table>
        <b>LIST DATA TAMU</b>

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th style="font-size: 10px">#</th>
                <th style="font-size: 10px">Nama</th>
                <th style="font-size: 10px">Alamat</th>
                <th style="font-size: 10px">Keperluan</th>
                <th style="font-size: 10px">Tujuan</th>
                <th style="font-size: 10px">Kontak</th>
                <th style="font-size: 10px">Hari/Tanggal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $__currentLoopData = $datatamu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row" style="font-size: 10px"><?php echo e($no++); ?></th>
                    <td style="font-size: 10px"><?php echo e($item->nama); ?></td>
                    <td style="font-size: 10px"><?php echo e($item->alamat); ?></td>
                    <td style="font-size: 10px"><?php echo e($item->keperluan); ?></td>
                    <td style="font-size: 10px"><?php echo e($item->nama_devisi); ?></td>
                    <td style="font-size: 10px"><?php echo e($item->kontak); ?></td>
                    <td style="font-size: 10px"><?php echo e($item->created_at->isoFormat('dddd, D MMM Y')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
            </tbody>
          </table>
    </center>
</body>
</html><?php /**PATH /Users/bahrululum/Documents/etamu/resources/views/admin/tamu/cetak.blade.php ENDPATH**/ ?>