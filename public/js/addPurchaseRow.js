$( document ).ready(function() {
	var newRow= $("#purchaseRow").clone().html();
	$( "#addPurchaseRow" ).click(function( event ) {
		$("$purchaseRow th").html()=2;
		//$("$purchaseRow td:[input]").attr()=
		//console.log($("$purchaseRow td:[input]"));
		console.log(newRow);
		$("#purchaseRow").clone().appendTo("#purchaseBody");
	});
	//console.log($("#purchaseRow").html());
});