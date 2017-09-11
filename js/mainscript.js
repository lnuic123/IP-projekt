window.onload = function() {

	function getScrollTop() {
		if (typeof window.pageYOffset !== 'undefined' ) {
			// Most browsers
			return window.pageYOffset;
		}
		var d = document.documentElement;
		if (d.clientHeight) {
			// IE in standards mode
			return d.scrollTop;
		}
		// IE in quirks mode
		return document.body.scrollTop;
	}

	window.onscroll = function() {
		var box = document.getElementById('FixedDiv'),
			scroll = getScrollTop();

		if (scroll <= 195 && $(window).width() > 768) {
			box.style.top = "0px";
			if (document.getElementById('FixedDiv').parentNode == document.getElementById('leftdiv')){
				$("#FixedDiv").appendTo("#rightdiv");
			}
		}
		else if($(window).width() > 768){
			box.style.top = (scroll - 130) + "px";
			if (document.getElementById('FixedDiv').parentNode == document.getElementById('leftdiv')){
				$("#FixedDiv").appendTo("#rightdiv");
			}
		}
		else{
			if (document.getElementById('FixedDiv').parentNode == document.getElementById('rightdiv')){
				$("#FixedDiv").appendTo("#leftdiv");
			}
		}
	};

	window.onresize = function(){
		if (document.getElementById('FixedDiv').parentNode == document.getElementById('leftdiv') && $(window).width() > 768){
			$("#FixedDiv").appendTo("#rightdiv");
		}
		else if (document.getElementById('FixedDiv').parentNode == document.getElementById('rightdiv') && $(window).width() <= 768){
			$("#FixedDiv").appendTo("#leftdiv");
		}
	}

};

$( function() {
  $('td.matchlist').click( function() {
	var table = document.getElementById("matchlisttablebody");
	var rowcontent = $(this).parent();
	var matchtable = $(this).parent().parent();
	for(var i = 3; i < 9; i++){
		if($(rowcontent[0].cells[i]).css("background-color") == "rgb(173, 216, 230)"){
			$(rowcontent[0].cells[i]).toggleClass("picked-cell");
    		$(rowcontent[0].cells[i]).toggleClass("matchlist");
			for(var j = 0; j < table.rows.length; j++){
	  			if(rowcontent[0].cells[0].innerHTML == table.rows[j].cells[0].innerHTML){
	  				table.deleteRow(j);
	  				break;
	  			}
	  		}
		}
	}
  	if($(this).css("background-color") == "rgb(211, 211, 211)"){
		var col = $(this).parent().children().index($(this));
		var row = $(this).parent().parent().children().index($(this).parent());
		// Find a <table> element with id="myTable":

		// Create an empty <tr> element and add it to the 1st position of the table:
		var row = table.insertRow(table.getElementsByTagName("tr").length);

		// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);

		// Add some text to the new cells:
		cell1.innerHTML = rowcontent[0].cells[0].innerHTML;
		cell2.innerHTML = rowcontent[0].cells[1].innerHTML;
		cell3.innerHTML = rowcontent[0].cells[2].innerHTML;
		cell4.innerHTML = rowcontent[0].cells[col].innerHTML;
  	}
  	else{
  		for(var i = 0; i < table.rows.length; i++){
  			if(rowcontent[0].cells[0].innerHTML == table.rows[i].cells[0].innerHTML){
  				table.deleteRow(i);
  				break;
  			}
  		}
  	}

    $(this).toggleClass("picked-cell");
    $(this).toggleClass("matchlist");
    if($('#matchlisttablebody tr').length != 0){
    	document.getElementById("lefttext").innerHTML = "";
    	$('#table-scroll').css("height","300px");
    }
    else{
    	document.getElementById("lefttext").innerHTML = "Krenite sa odabirom";
    	$('#table-scroll').css("height","0px");
    }
    updatewin();
  } );
  function updatewin(){
  	var table = document.getElementById("matchlisttablebody");
  	var koef = document.getElementById("koeftext");
  	var win = document.getElementById("wintext");
  	var ulog = document.getElementById('ulogtxt').value;
  	var total = 1;
	for(var i = 0; i < table.rows.length; i++){
		total *= parseFloat(table.rows[i].cells[3].innerHTML);
	}
	koef.innerHTML = "Koef: " + parseFloat(total).toFixed(2);
	win.innerHTML = "Dobitak: " + parseFloat(ulog).toFixed(2) * parseFloat(total).toFixed(2) + " kn" == "Dobitak: NaN kn" ? "Dobitak: 0 kn" : "Dobitak: " + parseFloat(ulog * total).toFixed(2) + " kn";
  }
  $("#ulogtxt").keyup( function() {
  	updatewin();
});
} );