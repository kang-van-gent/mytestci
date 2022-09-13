<?php

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setTitle('Customer report');

$pdf->setFont('dejavusans', '', 10, '', true);

$pdf->AddPage();

$html = "
				<table  style='text-align: center;'>
					<thead>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Email</th>
							<th>phone number</th>
							<th>gender</th>
							

						</tr>
					</thead>
					<tbody>";

foreach ($query as $rs) {
	$html .= '<tr>
	<td> ' . $rs->id . ' </td>
	<td>' . $rs->name . '</td>
	<td>' . $rs->email . '</td>
	<td>' . $rs->phone . '</td>
	<td><span>' . $rs->gender . '</span></td>
    </tr>';
}
$html .= '</tbody>

</table>
<style>
table{
	border-collapse:collapse;
}
td,th{
	border:1px solid #888;
}

</style>
';

// Print text using writeHTMLCell()
$pdf->Cell(190, 10, 'Customer report', 1, 1, 'C');
$pdf->Ln(5);
$pdf->writeHTMLCell(192, 0, 9, '', $html, 0);

$pdf->Output('Customer_report.pdf', 'I');