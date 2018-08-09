let xhr = getXMLHttpRequest();

function getXMLHttpRequest() {
  let xhr = null;

	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest();
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}

	return xhr;
}

function request(method,action,params,callback) {
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			callback(xhr.responseText);
		}
	};
  if(method == "get"){
    xhr.open(method, action+"?"+params, true);
  	xhr.send();
  }else{
    xhr.open(method, action, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	xhr.send(params);
  }
}

//Fonction de callback.
function reply(htmlResponse){
  if(htmlResponse != ""){
    if(document.querySelectorAll(".main-content.removable")[0]){
      document.querySelectorAll(".main-content.removable")[0].classList.add("removed");
    }
    container.innerHTML = htmlResponse;
  }else{
    if(document.querySelectorAll(".main-content.removable")[0]){
      document.querySelectorAll(".main-content.removable")[0].classList.remove("removed");
    }
  }
}
