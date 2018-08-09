var method;
var action;
var parameters;
var container;
// Au chargement de la page, les boutons ou liens deviennent clickable.
window.onload = function() {
  // index.php
  if(document.querySelector("#room-select")){
    method = "post";
    action = "https://bienvivrechezsoi.herokuapp.com/asset/php/room.php";
    container = document.querySelector("#room-box");
    document.querySelector("#room-submit").addEventListener("click",dispatchForm);
  }
  // conseils.php
  if(document.querySelector("#table-link")){
    method = "get";
    action = "https://bienvivrechezsoi.herokuapp.com/asset/php/detailed-conseils.php";
    container = document.querySelector("#detailed-link");
    for (var i = 0; i < document.querySelectorAll(".th3 a").length; i++) {
      document.querySelectorAll(".th3 a")[i].addEventListener("click",dispatchLink);
    }
  }
}
// Fonctions d'appel AJAX
function dispatchForm(event) {
  let select = document.querySelector("#room-select");
  parameters = select.name + "="+ select.value + "&submit=true";
  event.preventDefault();
  request(method,action,parameters,reply);
}

function dispatchLink(event) {
  event.preventDefault();
  parameters = event.target.dataset.params;
  event.preventDefault();
  request(method,action,parameters,reply);
}
