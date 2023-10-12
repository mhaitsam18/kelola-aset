<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Data BHP');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<h3>Data BHP</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="10%" align="center">No</th>
                            <th width="10%" align="center">Id BHP</th>
                            <th width="25%" align="center">Nama BHP</th>
                            <th width="20%" align="center">Kategori BHP</th>
                            <th width="10%" align="center">Satuan BHP</th>
                            <th width="10%" align="center">Jumlah BHP</th>
                             <th width="15%" align="center">Tanggal Masuk BHP</th>
                        </tr>';
            foreach ($bhp as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row['id_bhp'].'</td>
                            <td>'.$row['nm_bhp'].'</td>
                            <td>'.$row['kategori_bhp'].'</td>
                            <td>'.$row['satuan_bhp'].'</td>
                             <td>'.$row['jumlah_bhp'].'</td>
                            <td>'.$row['tanggal_bhp'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('data_bhp.pdf', 'I');
?>