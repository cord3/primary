<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cord3</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Animate.css - a CSS animation library -->
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Font Awesome -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Plugin for ColorSelector -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-colorselector-0.2.0/css/bootstrap-colorselector.css" />
    <script src="lib/bootstrap-colorselector-0.2.0/js/bootstrap-colorselector.js"></script>
    
    <!-- custom.css - Modifications made for Cord3 -->
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- The Google Font we use throughout Cord3 -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
	
      <div class="container">
		
		<nav class="navbar navbar-default navbar-simple navbar-fixed-top hidden-xs">
	      
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Cord3</a>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	         
	         <ul class="nav navbar-nav navbar-right">
				  <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bell fa-6"></i></span></a>
	              <ul class="dropdown-menu" role="menu">
					 <li>
						<a href="#">
							<p><strong>Notifications</strong></p>
						</a>
					</li>
	              </ul>
	            </li>
			  </ul>
			  
			  <ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown">
					<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu<span class="caret"></span></a> -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus fa-6"></i></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">
								<p><strong>Create New Board</strong></p>
								<p class="wordwrap">A board is a collection of cards ordered in a list of lists. Use it to manage a project, track a collection, or organize anything</p>
							</a>
						</li>
		                <li class="divider"></li>
						<li><a href="#">
								<p><strong>Create New Organization</strong></p>
								<p class="wordwrap">An organization is a group of boards and people. Use it to group boards in your company, team, or family.</p>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" id="btn_SearchCord3"><i class="fa fa-search"></i></a>
				</li>
				
			  </ul>
	          
	          <ul class="nav navbar-nav navbar-left">
	            
	            <li class="dropdown">
	              <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu<span class="caret"></span></a> -->
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars fa-6"></i></span></a>
	              <ul class="dropdown-menu" role="menu">
					<li><a href="#">My Profile</a></li>
	                <li><a href="#">My Cards</a></li>
	                <li><a href="#">My Settings</a></li>
	                <li class="divider"></li> 
	                <li><a href="#" id="mnu_AboutUs">About Cord3</a></li>
	                <li><a href="#" id="mnu_ContactUs">Contact Us</a></li>
	                <li class="divider"></li> 
	                <li><a href="index.html">Log Out</a></li>
	              </ul>
	            </li>
	            
	          </ul>
	          
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
		
		<nav role="navigation" class="navbar navbar-default navbar-simple navbar-fixed-top hidden-lg">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a href="#" class="navbar-brand">Cord3</a>
		    </div>
		    <!-- Collection of nav links and other content for toggling -->
		    <div id="navbarCollapse" class="collapse navbar-collapse">
		        <ul class="nav navbar-nav">
		            <li><a href="#">My Profile</a></li>
	                <li><a href="#">My Cards</a></li>
	                <li class=""><a href="#">My Settings</a></li>
	                <li class="divider"></li>
	                <li><a href="#" id="mnu_AboutUs">About Cord3</a></li>
	                <li><a href="#" id="mnu_ContactUs">Contact Us</a></li>
		        </ul>
		    </div>
		</nav>

	    
        <h2 class="wow fadeIn"></h2>
        <div class="row">
			<div class="col-md-12">
				<div class="">
					<h4>My Organizations</h4>
					<div class="row" id="organizationList">
						<div class="col-sm-3">
							<div id="btn_CreateNewOrganization" class="well well-default" >
								
								<p><span><i class="fa fa-university fa-3x"></i></span><br/><br/>Create Organization</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>
        
        <hr/>
        
        <div class="row">
			<div class="col-md-12">
				<div class="">
					<h4>My Boards</h4>
					<div class="row" id="boardList">
						<div class="col-sm-3">
							<div id="btn_CreateNewBoard" class="well well-default" >
								<p><span><i class="fa fa-plus fa-3x"></i></span><br/><br/>Create Board</p>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			
        </div>
        
        <div class="row text-center" id="myListView">
			
        </div>

      </div>
    <!-- End Benefits -->
	
	
	<!-- Modals -->
	<div class="modal fade" id="aboutCord3">
		<div class="modal-dialog modal-sm">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">About Cord3</h4>
		      </div>
		      <div class="modal-body">
					<p><strong>Lead Developer: </strong> Rob Gloginja</p>
					<p>Cord3 is an open-source project to visually manage your projects or anything else that needs organizing.</p>
					<p class="text-center"><a href="https://github.com/cord3/primary"><i class="fa fa-github fa-2x"></i><br/>GitHub Project</a></p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
		      </div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div class="modal fade" id="contactCord3">
		<div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Contact Us</h4>
		      </div>
		      <div class="modal-body text-center">
					<div class="row">
						<div class="col-md-3">
							<span><i class="fa fa-github fa-4x"></i></span>
						</div>
						<div class="col-md-3">
							<span><i class="fa fa-facebook fa-4x"></i></span>
						</div>
						<div class="col-md-3">
							<span><i class="fa fa-twitter fa-4x"></i></span>
						</div>
						<div class="col-md-3">
							<span><i class="fa fa-envelope fa-4x"></i></span>
						</div>
					</div>
					<hr/>
					<p><small>Cord3 is an open source project maintained by RMG Software</small></p>
		      </div>
		      
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div class="modal fade" id="searchCord3">
		<div class="modal-dialog modal-sm">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Search Cord3</h4>
		      </div>
		      <div class="modal-body">
				<form class="form" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
					<br/>
					<button type="button" class="btn btn-info btn-block" id="btn_ConfirmCreateBoard">Search</button>
				</form>
		      </div>
		      
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	
	<div class="modal fade" id="createBoard">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Create Board</h4>
	      </div>
	      <div class="modal-body">
	        <p>Title</p>
	        <input type="text" id="txtNewBoardName" name="txtNewBoardName" placeholder="" class="form-control" />
	        <hr/>
	        <p>Board Color</p>
	        <select id="colorselector">
			    <option value="106" data-color="#67b7e1" selected="selected">blue</option>
			    <option value="47" data-color="#d8a43c">orange</option>
			    <option value="87" data-color="#a0ce4e">green</option>
			    ...
			    <option value="15" data-color="#c06091">pink</option>
			    <option value="24" data-color="#a73437">red</option>
			</select>
			 
			<input type="text" id="colorValue" hidden />
			<input type="text" id="colorColor" hidden />
			<input type="text" id="colorTitle" value="blue" hidden />
			<hr/>
			<select id="imgBoardIcon" style="font-family: 'FontAwesome', Helvetica;" class="form-control" >
			     <option value="fa-adjust">&#xf042; Adjust</option>
			    <option value="fa-anchor">&#xf13d; Anchor</option>
			    <option value="fa-archive">&#xf187; Archive</option>
			    <option value="fa-area-chart">&#xf1fe; Area Chart</option>
			    <option value="fa-asterisk">&#xf069; Asterisk</option>
			</select>
			
			<hr/>
			<p>Privacy</p> 
			<small><i class="fa fa-lock"></i>&nbsp;All boards are automatically set to Private. <a href="#">Change Privacy Setting</a></small>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-info" id="btn_ConfirmCreateBoard">Create</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div class="modal fade" id="createOrganization">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Create Organization</h4>
	      </div>
	      <div class="modal-body">
	        <p>Title</p>
	        <input type="text" id="txtNewOrgName" name="txtNewOrgName" placeholder="" class="form-control" />
	        <hr/>
	        <p>Organization Color</p>
	        <select id="colorselectorOrg">
			    <option value="106" data-color="#67b7e1" selected="selected">blue</option>
			    <option value="47" data-color="#d8a43c">orange</option>
			    <option value="87" data-color="#a0ce4e">green</option>
			    ...
			    <option value="15" data-color="#c06091">pink</option>
			    <option value="24" data-color="#a73437">red</option>
			</select>
			 
			<input type="text" id="colorValueOrg" hidden />
			<input type="text" id="colorColorOrg" hidden />
			<input type="text" id="colorTitleOrg" value="blue" hidden />
			<hr/>
			<select id="imgOrgIcon" style="font-family: 'FontAwesome', Helvetica;" class="form-control" >
			     <option value="fa-adjust">&#xf042; Adjust</option>
			    <option value="fa-anchor">&#xf13d; Anchor</option>
			    <option value="fa-archive">&#xf187; Archive</option>
			    <option value="fa-area-chart">&#xf1fe; Area Chart</option>
			    <option value="fa-asterisk">&#xf069; Asterisk</option>
			</select>
			
			<hr/>
			<p>Privacy</p> 
			<small><i class="fa fa-lock"></i>&nbsp;All organizations are automatically set to Private. <a href="#">Change Privacy Setting</a></small>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-info" id="btn_ConfirmCreateOrganization">Create</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/card_functions.js"></script>
    <script src="js/wow.min.js"></script>
    
    <script language="javascript" type="text/javascript">
	$(document).ready(function() {
	    
	    // Save and create a new card
	    $(document).on('blur', "input[id^='list-header']", function () { 
		    $("[id^=list-header]").each(function () {
				
				switch(this.value)
				{
					case '':
						this.outerHTML = "<div><p>Untitled</p></div>";
						break;
					default:
						this.outerHTML = "<div>" + this.value+ "</div>";
				
				}
						
            }); 
		});
		
		// Load the 'editor' to change list title
		$(document).on('click', "h3[class^='panel-title main-title']", function () { 
		    $("[class^='panel-title main-title']").each(function () {
				this.outerHTML = "<input type='text' class='form-control js-controller' value='"+this.innerHTML+"' /><hr/><button class='btn btn-sm btn-info btn-block' id='btnSaveTitle' >Save</button>";
						
            }); 
		});
		
		$(document).on('click', 'div[class^="boardwell well"]', function(event, ui) {
		    var data_id = $(this).text();
		    alert(data_id);
		});
		
		$(document).on("click","#btnSaveTitle",function() {
			$("[class^='panel-title']").each(function () {
				this.outerHTML = '<h3 class="panel-title main-title" id="">'+this.innerHTML+'</h3>';
			});
		});
		
		$(document).on("click","#btn_CreateNewBoard",function() {
			$('#createBoard').modal('show');
			$('#txtNewBoardName').focus()
		});
		
		$(document).on("click","#btn_CreateNewOrganization",function() {
			$('#createOrganization').modal('show');
			$('#txtNewOrgName').focus()
		});
		
		$(document).on("click","#btn_SearchCord3",function() {
			$('#searchCord3').modal('show');
		});
		
		$(document).on("click","#mnu_AboutUs",function() {
			$('#aboutCord3').modal('show');
		});
		
		$(document).on("click","#mnu_ContactUs",function() {
			$('#contactCord3').modal('show');
		});
		
		$(document).on("click","#btn_ConfirmCreateBoard",function() {
			// Set some variables
			var boardName = $( "#txtNewBoardName" ).val();
			
			if(!boardName) {
				boardName = "Untitled Board";
			}
			var boardID = $( "#txtNewBoardName" ).val().replace(/ /g,'');
			var boardColor = $( "#colorTitle" ).val();
			var boardIcon = $( "#imgBoardIcon" ).val();
			
			// Add the new board to the database and return a random string which will become the data-id before prepending to boardList
			
			// Add the new board to the board list
			$("#boardList").prepend($('<div class="col-sm-3 text-center"> <div id="btn_'+boardID+'" data-id="button" class="boardwell well well-'+boardColor+'"> <p><span><i class="fa '+boardIcon+' fa-3x"></i></span><br/><br/>'+boardName+'</p> </div> </div>').fadeIn('slow'));
			
			// Hide the modal and reset the vale of #txtNewBoardName
			$('#createBoard').modal('hide');
			$('#txtNewBoardName').val('');
		});
		
	});
    </script>
    
    
    <script>
    wow = new WOW(
      {
        mobile: false // Disable on mobile
      }
    )
    wow.init();
    </script>
    
    <script>
	    $('#colorselector').colorselector({
	          callback: function (value, color, title) {
	              $("#colorValue").val(value);
	              $("#colorColor").val(color);
	              $("#colorTitle").val(title);
	          }
	    });
	 
	    $("#setColor").click(function(e) {
	      $("#colorselector").colorselector("setColor", "#008B8B");
	    });
	 
	    $("#setValue").click(function(e) {
	      $("#colorselector").colorselector("setValue", 18);
	    });
	    
	    $('#colorselectorOrg').colorselector({
	          callback: function (value, color, title) {
	              $("#colorValueOrg").val(value);
	              $("#colorColorOrg").val(color);
	              $("#colorTitleOrg").val(title);
	          }
	    });
	 
	    $("#setColorOrg").click(function(e) {
	      $("#colorselectorOrg").colorselector("setColorOrg", "#008B8B");
	    });
	 
	    $("#setValueOrg").click(function(e) {
	      $("#colorselectorOrg").colorselector("setValueOrg", 18);
	    });
	</script>
  </body>
</html>
