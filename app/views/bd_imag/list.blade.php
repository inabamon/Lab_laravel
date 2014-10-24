@extends('layout')

@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">BD IMag</h1>
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span>BD IMag List</span>
					<div class="pull-right">
						<a href="bd_imag/order">
							<button type="button" class="btn btn-primary btn-xs">Order</button>
						</a>
						<a href="bd_imag/arrive">
							<button type="button" class="btn btn-primary btn-xs">Arrive</button>
						</a>
						<a href="#">
							<button type="button" class="btn btn-primary btn-xs disabled">Print</button>
						</a>
					</div>
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables">
							<thead>
								<tr>
									<th>Item name</th>
									<th>Stock</th>
									<th>Order</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list as $value)
								<tr>
									<td>{{ $value['item'] }}</td>
									<td>{{ $value['stock'] }}</td>
									<td>{{ $value['order'] }}</td>
									<td>
										<a href="bd_imag/{{ $value['item'] }}"><i class="fa fa-file fa-fw" data-toggle="tooltip" data-placement="bottom" title="查看"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div><!-- /.table-responsive -->
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
</div><!-- /#page-wrapper -->

<script>
$(document).ready(function() {
	// $('#dataTables').dataTable();
	$('i').tooltip();
});
</script>
@stop