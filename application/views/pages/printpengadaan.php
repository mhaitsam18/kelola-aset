<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Data Pengadaan');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<center><h3>Data Pengadaan</h3></center>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="20%" align="center">Nama</th>
                            <th width="10%" align="center">Jenis</th>
                            <th width="10%" align="center">Kategori</th>
                            <th width="15%" align="center">Deskripsi</th>
                            <th width="10%" align="center">Jumlah</th>
                            <th width="10%" align="center">Satuan</th>
                            <th width="10%" align="center">Tgl Pesan</th>
                            <th width="10%" align="center">Vendor</th>
                        </tr>';
            foreach ($pengadaan as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row['nama'].'</td>
                            <td>'.$row['jenis'].'</td>
                            <td>'.$row['kategori'].'</td>
                            <td>'.$row['diskripsi'].'</td>
                            <td>'.$row['jumlah'].'</td>
                            <td>'.$row['satuan'].'</td>
                            <td>'.$row['tgl_pemesanan'].'</td>
                            <td>'.$row['vendor'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('data_pengadaan.pdf', 'I');
?>