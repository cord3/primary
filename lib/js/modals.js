function showCreateAd() {
	$('#createAdvert').modal('show');
}

function showCreateProperty() {
	$('#createproperty').modal('show');
}

function showPropertyOptions(row) {
	
	document.getElementById('getPropertyCode').onclick = function(){ getPropCode(row); } ;
	document.getElementById('setRecommendsbtn').onclick = function(){ getRecommendsjs(row); } ;
	document.getElementById('editPropertybtn').onclick = function(){ editPropertyjs(row); } ;
	
	$('#propertyOptions').modal('show');
}


function registerAdvertiserModal() {
	$('#registerAdvertiserModal').modal('show');
}

function showBuyCred1(credits) {
	
	switch(credits) {
    case 50:
        $('#item_name').val(credits + " credits");
        $('#item_number').val("0001");
        $('#amount').val("5.00");
        break;
    case 250:
        $('#item_name').val(credits + " credits");
        $('#item_number').val("0002");
        $('#amount').val("20.00");
        break;
	
	case 500:
        $('#item_name').val(credits + " credits");
        $('#item_number').val("0003");
        $('#amount').val("30.00");
        break;
	
	case 1500:
        $('#item_name').val(credits + " credits");
        $('#item_number').val("0004");
        $('#amount').val("50.00");
        break;
	}

	$('#buyCredits').modal('show');
}
