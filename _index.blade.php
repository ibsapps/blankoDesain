<div class="card animate__animated animate__headShake">
  <div class="card-body">
    <h4>Blangko</h4>
    <hr>
    <div class="row mb-2">
      <div class="col-lg-6">
        <a type="button" href="/blank/create" class="btn btn-primary">ADD</a>
      </div>
      <div class="col-lg-6">
        <div class="col-lg-3 float-right">
        </div>
        <div class="col-lg-3 float-right">
          <select id="list_status" name="list_status" class="form-control" tbl="area">
            <option value="1">List</option>
          </select>
        </div>
      </div>
    </div>
    <!-- <hr> -->
    <div class="row">
      <div class="col-lg-12">
        <table id="dtable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Action</th>
              <th>Product</th>
              <th>Tanggal P&L</th>
              <th>Status P&L</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 3; $i++)
							<tr>
								<td>{{ $i + 1 }}</td>
								<td><a href="/blank/1" class="btn btn-info">Show</a></td>
								<td>IBS / DAS</td>
								<td>03/07/2023</td>
								<td>Renewal</td>
							</tr>
						@endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>