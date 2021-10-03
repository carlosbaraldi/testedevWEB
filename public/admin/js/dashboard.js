/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })


})();


var btn_add = document.getElementById('add');
var btn_buy = document.getElementById('buy');

var box = document.getElementById('box');

var contador = 2;

btn_add.addEventListener('click', function () {
  contador++;

  if (contador <= 10) {
    createDiv();
  } else {

    document.getElementById('add').disabled = true;

  }
});


// <div class="alert alert-primary" role="alert">
function createDiv() {




  var elementoDiv = document.createElement('div');
  elementoDiv.setAttribute('class', 'alert alert-primary');
  elementoDiv.setAttribute('role', 'alert');

  var elementoLabel = document.createElement('label');
  elementoLabel.setAttribute('for', 'resposta_' + contador);
  elementoLabel.textContent = 'Resposta: ';

  var elementoInput = document.createElement('input');
  elementoInput.setAttribute('class', 'col-sm-11');
  elementoInput.setAttribute('type', 'text');
  elementoInput.setAttribute('resposta', 'resposta_' + contador);
  elementoInput.setAttribute('id', 'resposta_' + contador);
  elementoInput.setAttribute('name', 'resposta[]');
  elementoInput.setAttribute('autocomplete', 'off');

  elementoDiv.appendChild(elementoLabel);

  elementoDiv.appendChild(elementoInput);

  box.appendChild(elementoDiv)



}


