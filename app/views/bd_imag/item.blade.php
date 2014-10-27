@extends('layout')

@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">BD IMag</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span>{{ $name }}</span>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables">
							<thead>
								<tr>
									<th>No.</th>
									<th>Order Date</th>
									<th>Arrive Date</th>
									<th>Open Date</th>
									<th>Period</th>
									<th>Lot. #</th>
									<th>Exp date</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($items as $num => $item)
								<tr>
									<td>{{ $num+1 }}</td>
									<td>{{ $item['order_date'] }}</td>
									<td>{{ $item['arrive_date'] }}</td>
									<td><input class="datepicker form-control" value="{{ $item['open_date'] }}"></td>
									<td>{{ $item['period_day'] }}</td>
									<td><input class="form-control" value="{{ $item['lot'] }}"></td>
									<td><input class="form-control" value="{{ $item['exp_date'] }}"></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
				<div class="panel-footer">
					<div class="row">
						<div class="col-xs-6">
							<a href="javascript:history.go(-1);">
								<button type="button" class="btn btn-primary btn-xs">返回</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->

<script>
$(document).ready(function() {
	// $('#dataTables').dataTable();
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd',
	});
});
</script>
@stop