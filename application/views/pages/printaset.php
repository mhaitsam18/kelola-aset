<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Data Aset');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<center><h3>Data Aset</h3></center>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="25%" align="center">Serial Aset</th>
                            <th width="20%" align="center">Nama Aset</th>
                            <th width="10%" align="center">Kategori Aset</th>
                            <th width="15%" align="center">Deskripsi Aset</th>
                            <th width="10%" align="center">Qr Code</th>
                            <th width="15%" align="center">Tanggal Masuk</th>
                        </tr>';
            foreach ($aset as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row['serial_aset'].'</td>
                            <td>'.$row['nm_aset'].'</td>
                            <td>'.$row['kategori_aset'].'</td>
                            <td>'.$row['diskripsi_aset'].'</td>
                            <td>'.$row['qrcode'].'</td>
                            <td>'.$row['tanggal_masuk'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('data_aset.pdf', 'I');
?>