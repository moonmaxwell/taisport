@extends('layouts.master')
@section('content')
	<h1>Purchase</h1>
	<ul>
		<li>Code</li>
		<li>Name</li>
		<li>Purchase Price</li>
		<li>Price</li>
		<li>Currency</li>
		<li>Quantity</li>
		<li>Amount</li>
		<li class="text-danger">Purchase Date</li>
		<li class="text-danger">Purchase Code</li>
	</ul>
	<a href="#">jQuery</a>
	<script type="text/javascript" src="/js/test.js"></script>
	<form class="form-inline">
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>
@endsection
