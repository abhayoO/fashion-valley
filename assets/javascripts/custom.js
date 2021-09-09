$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".my-tooltip").tooltip();

	$(".img").wrap('<div class="alt-wrap"/>');
	$(".img").each(function() {
    	$(this).after('<p class="alt">' + $(this).attr('alt') + '</p>');
	});
});

function show_add_address() {
	$('#address-cards').addClass("hidden");
	$('#add-address').removeClass("hidden");
	$('#address_panel').html("Add New Address");
}

function show_address_cards() {
	$('#address-cards').removeClass("hidden");
	$('#add-address').addClass("hidden");
	$('#address_panel').html("Saved Addresses");
}

/*function addToWishlist(prod_id){
	let request = new XMLHttpRequest();
	request.open('GET', '/products/wishlist/'+prod_id);
	request.responseType = 'json';
	request.onload = function() {
		console.log(request.response);
	};
	request.send();
}*/