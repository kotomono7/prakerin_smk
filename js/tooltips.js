function addLoadEvent(func) {
	var oldonload = window.onload;
	if(typeof window.onload != 'function'){
	window.onload = func;
  } 
  else{
		window.onload = function() {
		oldonload();
		func();
		}
	}
}

function prepareInputsForHints() {
	var inputs = document.getElementsByTagName("input");
	for (var i=0; i<inputs.length; i++){
		if (inputs[i].parentNode.getElementsByTagName("span")[0]) {
			inputs[i].onfocus = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
			}
			inputs[i].onblur = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "none";
			}
		}
	}
}
addLoadEvent(prepareInputsForHints);
