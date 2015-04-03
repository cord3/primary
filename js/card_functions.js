var idNum = 0;

function createCard(propNum) {
	var idName = document.getElementsByClassName('panel-body text-left')[propNum].id;
	var curDivName = "panBody" + idNum;
	var newDivName = "card-" + idNum;
	var newListHeader = "list-header-" + idNum;
	var newWellID = "well-int-" + idNum;
	
	 
	var div = document.getElementById(idName);
	var innerDiv = document.createElement('div');
	innerDiv.setAttribute("id", newDivName);
	div.appendChild(innerDiv);
	
	var div1 = document.getElementById(newDivName);
	var innerDiv1 = document.createElement('div');
	innerDiv1.className = 'well';
	innerDiv1.setAttribute("id", newWellID);
	innerDiv1.setAttribute("onclick", "loadCard("+idNum+");");
	div1.appendChild(innerDiv1);
	
	var div2 = document.getElementById(newWellID);
	var innerDiv2 = document.createElement('input');
	innerDiv2.className = 'form-control';
	innerDiv2.setAttribute("id", newListHeader);
	div2.appendChild(innerDiv2);
	innerDiv2.focus();
	
	idNum++;
}

function loadCard(cardNum){
	alert(cardNum);
}
