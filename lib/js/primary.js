function updateFormControl(myVal) {
	switch (myVal) {
	    case 'standard':
	        document.getElementById('FormControl').innerHTML = '<div class="form-group">' +
		       '<label class="control-label col-sm-3" for="textCreateAd">Headline:</label>'+
			   '<div class="col-sm-9">'+
			        '<input type="text" class="form-control" id="textCreateAd" placeholder="" required>'+
			      '</div>'+
			    '</div>'+
			   ' <div class="form-group">'+
			      '<label class="control-label col-sm-3" for="linkCreateAd">URL:</label>'+
			      '<div class="col-sm-9">'+      
			        '<input type="text" class="form-control" id="linkCreateAd" placeholder="" required>'+
			      '</div>'+
			    '</div>'+
			    '<div class="form-group">'+
			      '<label class="control-label col-sm-3" for="imgCreateAd">Image:</label>'+
			      '<div class="col-sm-9">'+      
			        '<input type="text" class="form-control" id="imgCreateAd" placeholder="">'+
			      '</div>'+
			    '</div>'+
			    '<div class="form-group">'+
			      '<label class="control-label col-sm-3" for="imgCreateCat">Category:</label>'+
			      '<div class="col-sm-9">'+
			        '<select class="form-control" id="imgCreateCat" onchange="updateFormControl(this.value);">'+
						'<option value="" disabled selected>Select your category</option>'+
						'<option value="art">Art</option>'+	
						'<option value="automotive">Automotive</option>'+
						'<option value="beauty">Beauty</option>'+
						'<option value="business">Business</option>'+
						'<option value="comedy">Comedy</option>'+
						'<option value="education">Education</option>'+
						'<option value="entertainment">Entertainment</option>'+
						'<option value="eyecandy">Eye Candy</option>'+
						'<option value="family">Family</option>'+
						'<option value="fashion">Fashion</option>'+
						'<option value="food">Food</option>'+
						'<option value="gaming">Gaming</option>'+
						'<option value="health">Health</option>'+
						'<option value="howto">How To</option>'+
						'<option value="journals">Journal</option>'+
						'<option value="lifestyle">Lifestyle</option>'+
						'<option value="men">Men</option>'+
						'<option value="moviestv">Movies and TV</option>'+
						'<option value="music">Music</option>'+
						'<option value="news">News</option>'+
						'<option value="petsanimals">Pets & Animals</option>'+
						'<option value="photography">Photography</option>'+
						'<option value="politics">Politics</option>'+
						'<option value="relationships">Relationships</option>'+
						'<option value="science">Science</option>'+
						'<option value="society">Society</option>'+
						'<option value="sports">Sports</option>'+
						'<option value="technology">Technology</option>'+
						'<option value="travel">Travel</option>'+
						'<option value="women">Women</option>'+
						'<option value="writing">Writing</option>'+
						
			        '</select>'+
			      '</div>'+
			   '</div>'+
			   
			   '<div class="form-group">'+
			      '<div class="col-sm-3"></div>'+
			      '<div class="col-sm-9">'+      
			        '<button type="submit" class="btn btn-success btn-block">Create Content Link</button>'+
			      '</div>'+
			    '</div>';
			document.getElementById('aboutAdType').innerHTML = "<h4 class='text-center'>Standard</h4><div class='text-left'>" +
						"<p>'Standard' is the name given to a small text-based advertisement displayed in a grid-like layout. </p>"+
						"<p>We will be offering a 'Premium Standard' in the near future which will take full advantage of the image you have set in the creation of your ad.</p>"+
						"<h4 class='text-center'>EXAMPLE</h4>"+
						"<img class='img-responsive thumbnail' src='lib/img/demo-small.png' />"+
						"<h4 class='text-center'>RATES</h4>"+
						"<p><strong>CREATION: </strong><span id='createPrice'>5</span> credits</p>"+
						"<p><strong>BASE CPC: </strong><span id='baseCPC'>1</span> credits</p>"+
						"<hr/>"+
						"<p><strong>TOTAL COST: </strong><span id='baseCPC'>5</span> credits + CPC</p>"+
					"</div>";
	        break;
	    case 'banner':
			document.getElementById('FormControl').innerHTML = '<p>'+myVal+'</p>';
	        break;
	}
	
}

function getPropCode(id) {
	$.ajax({
		type: "post",
		url: "getPropertyInfo.php",
		data: { getpropertyID : id },
		async:false,
		dataType: 'json',
        cache: false,
		success: function(data){
			document.getElementById('javaPropertyCode').innerHTML = '<script type="text/javascript">\n\tvar client_name = "'+data[0]+'";\n\tvar property_id = "'+data[1]+'";\n\tvar ad_type = "standard";\n\tvar number_ads = "4";\n</script>\n<script src="//monkeyshout.com/main.js" type="text/javascript"></script>	';
			document.getElementById('htmlPropertyCode').innerHTML = '<div id="monkeyAdvertising"></div>';
	
		}
	});
	
	$('#propertyOptions').modal('hide');
	$('#getPropertyCodew').modal('show');
}

function getRecommendsjs(id) {
	
	var t = $('#recTabler').DataTable();
	$('#recTabler').dataTable().fnClearTable();
	
	document.getElementById('myID').innerHTML = id;
	
	$.ajax({
		type: "post",
		url: "getRecommendResults.php",
		data: { getRecID : id },
		async:false,
		dataType: 'json',
        cache: false,
		success: function(data){
			for (i = 0; i < data.length; i++) { 
			    try {
					
				    t.row.add( [
			            data[i][0][0],
			            "<a href='"+data[i][0][3]+"'>"+data[i][0][2]+"</a>",
			            "<button class='btn btn-block btn-primary' onclick='alert("+data[i][0][3]+")'>View Image</button>", //This will be the image [4]
			            "<div class='text-center'><i class='fa fa-edit'></i>&nbsp;&nbsp;<i class='fa fa-trash'></i></div>"
			        ] ).draw();
		        } catch(err) {
					console.log(err);
				}
			}
		}
	});
	
	$('#propertyOptions').modal('hide');
	$('#setRecs').modal('show');
}

function editPropertyjs(id) {
	
	$('#propertyOptions').modal('hide');
	$('#editPropertymodal').modal('show');
}

function getMyID() {
	var updateRecNum = $('#myID').html();
	$('#setRecs').modal('hide');
	$('#addRecs').modal('show');
}
