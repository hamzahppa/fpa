function addInput(divName){
	var counter = 1;
	var newdiv = document.createElement('div');
	newdiv.innerHTML = "<div class='mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col'><input class='mdl-textfield__input' type='text' id='"+(divName)+(counter)+"' name='"+(divName)+"[]'><label class='mdl-textfield__label' for='"+(divName)+(counter)+"'>"+(divName)+"</label></div>";
	document.getElementById(divName).appendChild(newdiv);
	counter++;
}