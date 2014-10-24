@extends('layout')

@section('content')
<form name='form' method='post' action='../bd_imag/order'>
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
                        <span>BD IMag Order</span>
                        <button type="button" class="btn btn-primary btn-xs pull-right  js-btn-submit">確定送出</button>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-lg-2">
                                <input class="datepicker" name='orderDate' id='orderDate' type="text" class="form-control" placeholder="Order Date">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>Item name</th>
                                        <th>Amount</th>
                                        <th>Catalog number</th>
                                        <th>Price</th>
                                        <th>Volume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $key => $item)
                                    <tr>
                                        <td>{{ $item->item }}：</td>
                                        <td>
                                            <select name="list['{{ $item->item }}']['amount']" class='input_select2  js-select_amount'>
                                                <option value='' checked>Amount</option>
                                                @for ($i=1; $i<6; $i++)
                                                <option value='{{ $i }}'>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </td>
                                        <td><input class="form-control" name="list['{{ $item->item }}']['catalog_number']" value='{{ $item->catalog_number }}'></td>
                                        <td><input class="form-control" name="list['{{ $item->item }}']['price']" value='{{ $item->price }}'></td>
                                        <td><input class="form-control" name="list['{{ $item->item }}']['volume']" value='{{ $item->volume }}'></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.panel-body -->
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-6">
                                <button type="button" class="btn btn-primary btn-xs  js-btn-back">返回</button>
                                <button type="button" class="btn btn-danger btn-xs  js-btn-clean">清空</button>
                            </div>
                            <div class="col-xs-6 pull-right">
                                <button type="button" class="btn btn-primary btn-xs pull-right  js-btn-submit">確定送出</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /#page-wrapper -->
</form>
<script>
$(document).ready(function() {
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd'
	});

	$('.js-btn-back').click(function(){
	    history.go(-1);
	})
});
</script>
@stop