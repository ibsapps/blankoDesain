@extends('layouts.main')

@section('main_content')
<div class="card">
	<div class="card-body">
    <h4 class="card-title">Form Blangko</h4>
    <hr>
    <!-- {{-- menampilkan error validasi --}} -->
    @if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

		<form method="POST" action="/mg/issues" enctype="multipart/form-data" class="form-sample">
      @csrf
      @if (session('error'))
      <div class="alert alert-danger" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('error') }}
      </div>
      @endif
			
      <div class="message" style="display: none;"></div>

			<div class="row mt-3">
				<div class="col-lg-2">
					<label>Area Name</label>
				</div>
				<div class="col-lg-4">
					<input type="text" name="name" id="name" class="form-control">
				</div>

				<div class="col-lg-2">
					<label>Status P&L</label>
				</div>
				<div class="col-lg-4">
					<input type="text" name="name" id="name" class="form-control">
				</div>

			</div>

      <div class="row">
				<div class="col-lg-12 mt-3">
					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th colspan="2" class="text-center">Site Information</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Site Name</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
	
							<tr>
								<td>Address</td>
								<td><textarea name="address" class="form-control" id="" rows="10"></textarea></td>
							</tr>
	
							<tr>
								<td>Area Building</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
	
							<tr>
								<td>Type of building</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
	
							<tr>
								<td>Status</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
	
							<tr>
								<td>Total Floor</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
	
							<tr>
								<td>Number of building tower</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
						</tbody>
					</table>

					<table class="table table-bordered mt-3">
						<thead class="thead-dark">
							<tr>
								<th colspan="3" class="text-center">Technical Information</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="3"><b>IBC</b></td>
							</tr>
							<tr>
								<td>Name Product</td>
								<td>Amount</td>
								<td>Action</td>
							</tr>
							<tr>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
								<td><a href="#" class="btn btn-primary btn-sm">ADD</a></td>
							</tr>

							<tr>
								<td colspan="3"><b>OPENET</b></td>
							</tr>
							<tr>
								<td>Name Product</td>
								<td>Amount</td>
								<td>Action</td>
							</tr>
							<tr>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
								<td><a href="#" class="btn btn-primary btn-sm">ADD</a></td>
							</tr>

							<tr>
								<td colspan="3"><b>OTHERS</b></td>
							</tr>
							<tr>
								<td>Name Product</td>
								<td>Amount</td>
								<td>Action</td>
							</tr>
							<tr>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
								<td><a href="#" class="btn btn-primary btn-sm">ADD</a></td>
							</tr>
						</tbody>
					</table>

					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th colspan="2" class="text-center">Financial Summary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Name</td>
								<td>Amount</td>
							</tr>

							<tr>
								<td>Capex / Antenna</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td>Contract Period (thn)</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td>Interest rate/year</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td>Kurs 1 USD</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td>Total Capex</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td>Total Opex</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td>Total Revenue</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td style="width: 41%">IRR</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td colspan="2" class="bg-secondary"></td>
							</tr>
	
							<tr>
								<td>NPV</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
	
							<tr>
								<td>EBITDA margin</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
	
							<tr>
								<td>Payback (year)</td>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>

							<tr>
								<td colspan="2" class="bg-secondary"></td>
							</tr>
						</tbody>
					</table>

					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th colspan="2" class="text-center">Target Achieve by Commercial</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td colspan="2" class="text-right">
									<a href="#" class="btn btn-primary">ADD</a>
								</td>
							</tr>

							<tr>
								<td rowspan="4">Revenue</td>
							</tr>

							<tr>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
							<tr>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
							<tr>
								<td><input type="text" id="issue" name="issue" class="form-control" required></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
			
			<hr>

			<a href="/blank" class="back btn btn-secondary">Back</a>
      <button type="submit" class="btn btn-primary">Save</button>
		</form>
	</div>
</div>

@endsection

@section('js_content')
  @include('hrd.area.js_file')
@endsection