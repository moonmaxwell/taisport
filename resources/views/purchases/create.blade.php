@extends('layouts.master')

@section('content')
<style type="text/css">
#purchaseBody input {
	width: 10em;
	border-top: transparent !important;
	border-left: transparent !important;
	border-right: transparent !important;
	border-bottom: transparent !important;
	margin: 3px 10px;
}

#purchaseBody td {
	padding: 0px !important;
}
</style>
<h1>Purchase</h1>
<hr>
<form method="POST" action="/items">
	{{ csrf_field() }}
	<div class="row bg-secondary border border-light rounded">
		<div class="form-group col-sm-6">
			<div class="row mt-3 pr-3">
				<label for="purchase_code" class="col-sm-4 col-form-label">Purchase Code :</label>
				<input type="text" class="form-control col-sm-8" id="purchase_code" placeholder="Purchase Code" name="purchase_code">
			</div>
		</div>
		<div class="form-group col-sm-6">
			<div class="row mt-3 pr-3">
				<label for="date" class="col-sm-2 col-form-label">Date :</label>
				<input type="date" class="form-control col-sm-10" id="date" placeholder="Date" name="date">
			</div>
		</div>
	</div>
	<div class="table-responsive my-3">
		<table class="table table-hover table-bordered table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Item Code</th>
					<th scope="col">Name</th>
					<th scope="col">Purchased Price</th>
					<th scope="col">Sell Price</th>
					<th scope="col">Currency</th>
					<th scope="col">Quantity</th>
				</tr>
			</thead>
			<tbody id="purchaseBody">
				<tr>
					<th scope="row">1</th>
					<td><input type="text" name="item_code[]" placeholder="Item Code"></td>
					<td><input type="text" name="name[]" placeholder="Name"></td>
					<td><input type="text" name="purchased_price[]" placeholder="Purchased Price"></td>
					<td><input type="text" name="sell_price[]" placeholder="Sell Price"></td>
					<td><input type="text" name="currency[]" placeholder="Currency"></td>
					<td><input type="text" name="quantity[]" placeholder="Quanity"></td>
				</tr>
				{{-- To Append --}}
				<tr>
					<th scope="row">2</th>
					<td><input type="text" name="item_code[]" placeholder="Item Code"></td>
					<td><input type="text" name="name[]" placeholder="Name"></td>
					<td><input type="text" name="purchased_price[]" placeholder="Purchased Price"></td>
					<td><input type="text" name="sell_price[]" placeholder="Sell Price"></td>
					<td><input type="text" name="currency[]" placeholder="Currency"></td>
					<td><input type="text" name="quantity[]" placeholder="Quanity"></td>
				</tr>
			</tbody>
		</table>
		<span class="btn btn-outline-secondary" id="addPurchaseRow">+</span>
	</div>
	<div class="row border border-light">
		<div class=" form-group col-sm-7"></div>
		<div class="form-group col-sm-5 bg-secondary rounded pb-3">
			<div class="row mt-3 pr-3">
				<label for="amount" class="col-sm-3 col-form-label">Amount :</label>
				<input type="text" class="form-control col-sm-9" id="amount" placeholder="Amount" name="amount">
			</div>
		</div>
	</div>
	<div class="row border border-light">
		<div class=" form-group col-sm-10"></div>
		<div class="form-group col-sm-2 rounded">
			<button type="submit" class="btn btn-success pl-5 pr-5 float-right">Add</button>
		</div>
	</div>
</form>
{{-- <script type="text/javascript" src="/js/addPurchaseRow.js"></script> --}}
@endsection