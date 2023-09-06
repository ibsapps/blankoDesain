@extends('layouts.main')

@section('main_content')
<div class="card">
	<div class="card-body">
    <h4 class="card-title">Blangko Detail</h4>
    <hr>

		<div class="row">
			<div class="col-lg-6">
				<h5><b>Product: IBS / DAS</b></h5>
				<h5><b>Status P&L: Renewal</b></h5>
			</div>

			<div class="col-lg-6 text-right">
				<h5><b>Tanggal P&L: 03/07/2023</b></h5>
			</div>

			<div class="col-lg-12 mt-2">
				<div class="table-responsive">
					<table class="table table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th scope="col">Site Information</th>
								<th scope="col">Technical Information</th>
								<th scope="col">Financial Summary</th>
							</tr>
						</thead>

						<tbody >
							<tr>
								<td style="width: 30%" class="align-top">
									<div style="height: 360px; overflow-x: hidden">
										<div class="table-responsive">
											<table class="table" style="width: 100%">
												<tr>
													<td style="width: 10%"><b>Site Name</b></td>
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
										</div>
									</div>
								</td>

								<td style="width: 30%" class="align-top">
									<div style="height: 360px; overflow-x: hidden">
										<div class="table-responsive">
											<table class="table" style="width: 100%">
												<tr class="table-active">
													<td colspan="2">IBC</td>
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
													<td colspan="2">OPENET</td>
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
													<td colspan="2">OTHERS</td>
												</tr>

												<tr>
													<td></td>
													<td></td>
												</tr>
											</table>
										</div>
									</div>
								</td>

								<td style="width: 30%" class="align-top">
									<div style="height: 360px; overflow-x: hidden">
										<div class="table-responsive">
											<table class="table" style="width: 100%">
												<tr>
													<td>Capex / Antenna</td>
													<td>-</td>
												</tr>

												<tr>
													<td>Contract Period (thn)</td>
													<td>5</td>
												</tr>

												<tr>
													<td>Interest rate / year</td>
													<td>10%</td>
												</tr>

												<tr>
													<td>Kurs 1USD</td>
													<td>-</td>
												</tr>

												<tr>
													<td>Total Capex</td>
													<td>1.010.675.000</td>
												</tr>

												<tr>
													<td>Total Opex</td>
													<td>2.386.713.750</td>
												</tr>

												<tr>
													<td>Total Revenue</td>
													<td>3.266.275.000</td>
												</tr>

												<tr>
													<td colspan="2">
														<table class="table table-active">
															<tr>
																<td>IRR</td>
																<td>4,5%</td>
															</tr>

															<tr>
																<td>NPV</td>
																<td>219.141.604</td>
															</tr>

															<tr>
																<td>EBITDA margin</td>
																<td>39%</td>
															</tr>

															<tr>
																<td>Payback (year)</td>
																<td>4,6</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td colspan="3">
									<div class="row">
										<div class="col-lg-12">
											<h4>Target Achieve by Commercial:</h4>
										</div>

										<div class="col-lg-3 mt-3">
											<h6>Revenue :</h6>
										</div>

										<div class="col-lg-9 mt-3">
											<ul>
												<li>Revenue Makro H3I Tetap 7 juta/thn pada periode selanjutnya</li>
												<li>Rev Tsel dan IOH turun 15% pada renewal periode berikutnya</li>
												<li>Sewa BM tidak mengalami perubahan</li>
												<li>Potential XL 2024 (masih dalam pipeline)</li>
											</ul>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>


				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-lg-12 text-right">
				<a href="/blank" class="btn btn-secondary">Back</a>
				<a href="/print/blank/1" class="btn btn-primary btn-icon-text">
					<i class="ti-printer btn-icon-append"></i> &nbsp; Print
				</a>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js_content')
	@include('blanks.js_file')
@endsection