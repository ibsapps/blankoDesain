<head>
	<title>{{ $title }}</title>
	<style>
		.table, .tr, .td {
			border: 1px solid;
			border-collapse: collapse;
			border-radius: 4em;
		}

		td {
			margin-top: 5px;
			margin-bottom: 5px;
		}

		.text-right {
			text-align: right;
		}

		.text-center {
			text-align: center;
		}
	</style>
</head>

<body>
	<table style="width: 100%">
		<tr>
			<td style="width: 15%"><h5><b>Product</b></h5></td>
			<td><h5><b>IBS/DAS</b></h5></td>

			<td class="text-right"><h5><b>Tanggal P&L</b></h5></td>
			<td class="text-right" style="width: 15%"><h5><b>03/07/2023</b></h5></td>
		</tr>

		<tr>
			<td><h5><b>Status P&L</b></h5></td>
			<td><h5><b>Renewal</b></h5></td>
		</tr>
	</table>

	<table class="table" style="width: 100%;">
		<tr class="tr">
			<td class="td text-center">Site Information</td>
			<td class="td text-center">Technical Information</td>
			<td class="td text-center">Financial Summary</td>
		</tr>

		<tr class="tr">
			<td class="td" style="width: 40%; vertical-align: top;">
				<table autosize="1" style="border-top: 0px; width: 100%; position:absolute; overflow:auto;">
					<tr>
						<td><b>Site Name</b></td>
						<td>Living W. Pekanbaru</td>
					</tr>

					<tr>
						<td><b>Address</b></td>
						<td>Jl. Soekarno-Hatta, Tangbar</td>
					</tr>

					<tr>
						<td><b>Area Building</b></td>
						<td>Riau</td>
					</tr>

					<tr>
						<td><b>Type of Building</b></td>
						<td>Mall</td>
					</tr>

					<tr>
						<td><b>Status</b></td>
						<td>Renewal</td>
					</tr>

					<tr>
						<td><b>Total floor</b></td>
						<td>5</td>
					</tr>

					<tr>
						<td><b>Number of building tower</b></td>
						<td>1</td>
					</tr>
				</table>
			</td>

			<td class="td" style="width: 30%; vertical-align: top;">
				<table autosize="1" style="border-top: 0px; width: 100%; position:absolute; overflow:auto;">
					<tr class="table-active">
						<td colspan="2"><b>IBC</b></td>
					</tr>

					<tr>
						<td>Antena PKS BM</td>
						<td>169</td>
					</tr>

					<tr>
						<td>Antena Asset</td>
						<td>203</td>
					</tr>

					<tr>
						<td>Jumlah Pole MAkro</td>
						<td>4</td>
					</tr>

					<tr class="table-active">
						<td colspan="2"><b>OPENET</b></td>
					</tr>

					<tr>
						<td>Cable FO (core)</td>
						<td>-</td>
					</tr>

					<tr>
						<td>Cable FO (Meter)</td>
						<td>-</td>
					</tr>

					<tr>
						<td>Drop Wire (Meter)</td>
						<td>-</td>
					</tr>

					<tr class="table-active">
						<td colspan="2"><b>OTHERS</b></td>
					</tr>
				</table>
			</td>

			<td class="td" style="width: 30%">
				<table autosize="1" style="border-top: 0px; width: 100%; position:absolute; overflow:auto;">
					<tr>
						<td>Capex / Antenna</td>
						<td class="text-right">-</td>
					</tr>

					<tr>
						<td>Contract Period (thn)</td>
						<td class="text-right">5</td>
					</tr>

					<tr>
						<td>Interest rate / year</td>
						<td class="text-right">10%</td>
					</tr>

					<tr>
						<td>Kurs 1USD</td>
						<td class="text-right">-</td>
					</tr>

					<tr>
						<td>Total Capex</td>
						<td class="text-right">1.010.675.000</td>
					</tr>

					<tr>
						<td>Total Opex</td>
						<td class="text-right">2.386.713.750</td>
					</tr>

					<tr>
						<td>Total Revenue</td>
						<td class="text-right">3.266.275.000</td>
					</tr>

					<tr>
						<td colspan="2">
							<table class="table" style="width: 100%;">
								<tr>
									<td>IRR</td>
									<td class="text-right">4,5%</td>
								</tr>

								<tr>
									<td>NPV</td>
									<td class="text-right">219.141.604</td>
								</tr>

								<tr>
									<td>EBITDA margin</td>
									<td class="text-right">39%</td>
								</tr>

								<tr>
									<td>Payback (year)</td>
									<td class="text-right">4,6</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr class="tr">
			<td colspan="2">
				<h5><b>Target Achieve by Commercial:</b></h5>
				<table style="width: 100%; margin-top: 20px;">
					<tr>
						<td style="width: 20%; vertical-align: top;"><h6>Revenue</h6></td>
						<td>
							<ul style="margin-top: 20px;">
								<li>Revenue Makro H3I Tetap 7 juta/thn pada periode selanjutnya</li>
								<li>Rev Tsel dan IOH turun 15% pada renewal periode berikutnya</li>
								<li>Sewa BM tidak mengalami perubahan</li>
								<li>Potential XL 2024 (masih dalam pipeline)</li>
							</ul>
						</td>
					</tr>
				</table>
			</td>

			@php
				$qrcode=QrCode::size(60)->generate('http://dev-intranet.ibsmulti.com/event');
				$code = (string)$qrcode;
			@endphp	

			<td class="text-center" style="vertical-align: top;">
				<h5><b>Prepared by</b></h5>
				<h5><b>Alfredo</b></h5>

				<br />
				<p>{!! substr($code, 38) !!}</p>
			</td>
		</tr>
	</table>

	<table style="width: 100%; margin-top: 20px;">
		<tr>
			<td colspan="7" style="height: 35px; vertical-align: top;"><h5><b>Approved by</b></h5></td>
		</tr>

		<tr>
			<td class="text-center" style="margin-top: 20px;">
				<h5><b>Lilis S</b></h5>
				<p>{!! substr($code, 38) !!}</p>
			</td>

			<td class="text-center" style="margin-top: 20px;">
				<h5><b>Gaga H</b></h5>
				<p>{!! substr($code, 38) !!}</p>
			</td>

			<td class="text-center" style="margin-top: 20px;">
				<h5><b>Nelson FH</b></h5>
				<p>{!! substr($code, 38) !!}</p>
			</td>

			<td class="text-center" style="margin-top: 20px;">
				<h5><b>Kurniadi D</b></h5>
				<p>{!! substr($code, 38) !!}</p>
			</td>

			<td class="text-center" style="margin-top: 20px;">
				<h5><b>Robert D</b></h5>
				<p>{!! substr($code, 38) !!}</p>
			</td>

			<td class="text-center" style="margin-top: 20px;">
				<h5><b>Anni S</b></h5>
				<p>{!! substr($code, 38) !!}</p>
			</td>

			<td class="text-center" style="margin-top: 20px;">
				<h5><b>Makmur J</b></h5>
				<p>{!! substr($code, 38) !!}</p>
			</td>
		</tr>
	</table>
</body>