@extends('layout')

@section('content')
<form name='form' method='post' action='../bd_imag/order'>
<div class='info_title  info_title_top'>
	<h2>訂購藥品</h2>
	<ul>
		<li><a href='javascript: history.back(1)' class='info_title__btn  btnRound'>返回</a></li>
		<li><a href='javascript: document.form.submit()' class='info_title__btn  btnRound' name='send'>送出</a></li>
	</ul>
</div>
<div class='info_table'>
	<table width='100%' border='0' cellspacing='0' cellpadding='0' class='info_table_content'>
		<tr>
			<td class='textright'>Order Date ：</td>
			<td><input type='text' name='orderDate' id='orderDate' class='input_large  order_date'></td>
			<td>Catalog number</td>
			<td>Price</td>
			<td>Volume</td>
		</tr>
		<tr>
			<td class='textright'>mCD4 enrich set ：</td>
			<td>
				<select name='mCD4_enrich_set' class='input_select2  js-select_amount'>
					<option value='' checked>Amount</option>
					@for ($i=1; $i<6; $i++)
					<option value='{{ $i }}'>{{ $i }}</option>
					@endfor
				</select>
			</td>
			<td><input type='text' class='input_large' name='mCD4_enrich_set_cat' value='558131'></td>
			<td><input type='text' class='input_large' name='mCD4_enrich_set_pri' value='13890'></td>
			<td><input type='text' class='input_large' name='mCD4_enrich_set_ml' value='5 mL'></td>
		</tr>
		<tr>
			<td class='textright'>mB220 ：</td>
			<td>
				<select name='mB220' class='input_select2  js-select_amount'>
					<option value='' checked>Amount</option>
					@for ($i=1; $i<6; $i++)
					<option value='{{ $i }}'>{{ $i }}</option>
					@endfor
				</select>
			</td>
			<td><input type='text' class='input_large' name='mB220_cat' value='551513'></td>
			<td><input type='text' class='input_large' name='mB220_pri' value='23000'></td>
			<td><input type='text' class='input_large' name='mB220_ml' value='10 mL'></td>
		</tr>
		<tr>
			<td class='textright'>anti-PE ：	</td>
			<td>
				<select name='antiPE' class='input_select2  js-select_amount'>
					<option value='' checked>Amount</option>
					@for ($i=1; $i<6; $i++)
					<option value='{{ $i }}'>{{ $i }}</option>
					@endfor
				</select>
			</td>
			<td><input type='text' class='input_large' name='antiPE_cat' value='557899'></td>
			<td><input type='text' class='input_large' name='antiPE_pri' value='13890'></td>
			<td><input type='text' class='input_large' name='antiPE_ml' value='5 mL'></td>
		</tr>
		<tr>
			<td class='textright'>mCD4 ：</td>
			<td>
				<select name='mCD4' class='input_select2  js-select_amount'>
					<option value='' checked>Amount</option>
					@for ($i=1; $i<6; $i++)
					<option value='{{ $i }}'>{{ $i }}</option>
					@endfor
				</select>
			</td>
			<td><input type='text' class='input_large' name='mCD4_cat' value='551539'></td>
			<td><input type='text' class='input_large' name='mCD4_pri' value='23000'></td>
			<td><input type='text' class='input_large' name='mCD4_ml' value='10 mL'></td>
		</tr>
		<tr>
			<td class='textright'>mCD90.2 ：	</td>
			<td>
				<select name='mCD90_2' class='input_select2  js-select_amount'>
					<option value='' checked>Amount</option>
					@for ($i=1; $i<6; $i++)
					<option value='{{ $i }}'>{{ $i }}</option>
					@endfor
				</select>
			</td>
			<td><input type='text' class='input_large' name='mCD90_2_cat' value='551518'></td>
			<td><input type='text' class='input_large' name='mCD90_2_pri' value='27000'></td>
			<td><input type='text' class='input_large' name='mCD90_2_ml' value='10 mL'></td>
		</tr>
		<tr>
			<td class='textright'>Streptavidin ：</td>
			<td>
				<select name='Streptavidin' class='input_select2  js-select_amount'>
					<option value='' checked>Amount</option>
					@for ($i=1; $i<6; $i++)
					<option value='{{ $i }}'>{{ $i }}</option>
					@endfor
				</select>
			</td>
			<td><input type='text' class='input_large' name='Streptavidin_cat' value='557812'></td>
			<td><input type='text' class='input_large' name='Streptavidin_pri' value='12500'></td>
			<td><input type='text' class='input_large' name='Streptavidin_ml' value='5 mL'></td>
		</tr>
		<tr>
			<td class='textright'>biotinyl-CD5 ：</td>
			<td>
				<select name='biotinyl_CD5' class='input_select2  js-select_amount'>
					<option value='' checked>Amount</option>
					@for ($i=1; $i<6; $i++)
					<option value='{{ $i }}'>{{ $i }}</option>
					@endfor
				</select>
			</td>
			<td><input type='text' class='input_large' name='biotinyl_CD5_cat' value='553019'></td>
			<td><input type='text' class='input_large' name='biotinyl_CD5_pri' value='6525'></td>
			<td><input type='text' class='input_large' name='biotinyl_CD5_ml' value='500 ug'></td>
		</tr>
	</table>
</div>
<div class='info_title'>
	<ul>
		<li><a href='javascript: history.back(1)' class='info_title__btn  btnRound'>返回</a></li>
		<li><a href='javascript: document.form.submit()' class='info_title__btn  btnRound' name='send'>送出</a></li>
	</ul>
</div>
</form>
@stop