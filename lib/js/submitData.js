function submitArticle() {

	var linkText = ($("#articleTitle").val());
	var linkURL = ($("#articleLink").val());
	var linkCat = ($("#articleCategory").val());
	
	$.ajax({
		type: "post",
		url: "insert_article.php",
		data: { text: linkText, link: linkURL, category: linkCat },
		async:false,
		success: function(data){
			console.log(data);
		}
	});
}

function submitProperty() {
	var domainName = ($("#domain").val());
	var propName = ($("#propname").val());
	var catName = ($("#proptype").val());
	
	$.ajax({
		type: "post",
		url: "addProperty.php",
		data: { domain: domainName, property: propName, category: catName },
		async:false,
		success: function(data){
			$('#createproperty').modal('hide');
			
			//loadContent doesn't work in here...
			//loadContent('properties.php','Properties');
			$("#content").load('properties.php');
		}
	});
	
}

function submitApplyPublisher() {
	
	var usernameReg = ($("#usernameRegPub").val());
	var emailRegPub = ($("#emailRegPub").val());
	var passwordRegPub = ($("#passwordRegPub").val());
	
	$.ajax({
		type: "post",
		url: "addBetaApplication.php",
		data: { user: usernameReg, email: emailRegPub, password: passwordRegPub, accType: 'publisher'},
		async:false,
		success: function(data){
			alert(data);
		}
	});
}

function submitRecommends() {
	
	var myID = $('#myID').html();
	
	var recLink = ($("#recAddLink").val());
	var recTitle = ($("#recAddTitle").val());
	var recImage = ($("#recAddImage").val());
	
	$.ajax({
		type: "post",
		url: "addRecommendations.php",
		data: { owner: myID, link: recLink, title: recTitle, image: recImage },
		async:false,
		success: function(data){
			$('#addRecs').modal('hide');
			$("#content").load('properties.php');
		}
	});
}
