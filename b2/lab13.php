 <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $soLuong1 = $_POST['soLuong1'];
        $soLuong2 = $_POST['soLuong2'];
        $soLuong3 = $_POST['soLuong3'];
        $soLuong4 = $_POST['soLuong4'];
        $donGia1 = $_POST['donGia1'];
        $donGia2 = $_POST['donGia2'];
        $donGia3 = $_POST['donGia3'];
        $donGia4 = $_POST['donGia4'];

        $thanhTien1 = $soLuong1 * $donGia1;
        $thanhTien2 = $soLuong2 * $donGia2;
        $thanhTien3 = $soLuong3 * $donGia3;
        $thanhTien4 = $soLuong4 * $donGia4;
        $thanhTien = $thanhTien1 + $thanhTien2 + $thanhTien3 + $thanhTien4;
    } ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>lab13</title>
     <style>
         .table {
             display: flex;
             align-items: center;
             justify-content: center;
             flex-direction: column;
         }

         table,
         tr,
         th {
             border: 1px solid green;

         }

         th {
             padding: 10px 10px;
         }
     </style>
 </head>

 <body>
     <div class="table">
         <h1>Don hang</h1>
         <form action="" method="post">
             <table>
                 <tr>
                     <th><strong>STT</strong></th>
                     <th><strong>Ten san pham</strong></th>
                     <th><strong>So luong</strong></th>
                     <th><strong>Don gia</strong></th>
                     <th><strong>Thanh tien</strong></th>
                 </tr>
                 <tr>
                     <th>1</th>
                     <th>BimBim</th>
                     <th><input type="number" name="soLuong1" value="<?= $soLuong1 ??
                                                                            '' ?>"></th>
                     <th><input type="number" name="donGia1" value="<?= $donGia1 ??
                                                                        '' ?>"></th>
                     <th>
                         <?php if (isset($thanhTien1)) : ?>
                             <?= "$thanhTien1 đ" ?>
                         <?php endif; ?>
                     </th>
                 </tr>
                 <tr>
                     <th>2</th>
                     <th>Socola</th>
                     <th><input type="number" name="soLuong2" value="<?= $soLuong2 ??
                                                                            '' ?>"></th>
                     <th><input type="number" name="donGia2" value="<?= $donGia2 ??
                                                                        '' ?>"></th>
                     <th><?php if (isset($thanhTien2)) : ?>
                             <?= "$thanhTien2 đ" ?>
                         <?php endif; ?></th>
                 </tr>
                 <tr>
                     <th>3</th>
                     <th>Hanh nhan</th>
                     <th><input type="number" name="soLuong3" value="<?= $soLuong3 ??
                                                                            '' ?>"></th>
                     <th><input type="number" name="donGia3" value="<?= $donGia3 ??
                                                                        '' ?>"></th>
                     <th><?php if (isset($thanhTien3)) : ?>
                             <?= "$thanhTien3 đ" ?>
                         <?php endif; ?></th>
                 </tr>
                 <tr>
                     <th>4</th>
                     <th>Sua chua</th>
                     <th><input type="number" name="soLuong4" value="<?= $soLuong4 ??
                                                                            '' ?>"></th>
                     <th><input type="number" name="donGia4" value="<?= $donGia4 ??
                                                                        '' ?>"></th>
                     <th><?php if (isset($thanhTien4)) : ?>
                             <?= "$thanhTien4 đ" ?>
                         <?php endif; ?></th>
                 </tr>
                 <tr>
                     <th style="text-align: left;" colspan="4">Tong tien</th>
                     <th>
                         <?php if (isset($thanhTien)) : ?>
                             <?= "$thanhTien đ" ?>
                         <?php endif; ?>
                     </th>
                 </tr>
                 <tr>
                     <th style="text-align: left;" colspan="5"><button type="submit">Tinh Tien</button></th>
                 </tr>
             </table>
         </form>
     </div>
 </body>

 </html>