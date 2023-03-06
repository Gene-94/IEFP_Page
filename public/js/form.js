// prepare for a scenario were js is not running


let cardIndex = 0;
let navCount = 0;

// Next/previous controls
function nextSection() {
  const invalid = document.querySelectorAll("[data-invalid]");
  const input = document.querySelectorAll("[data-formulario]");
  
  for(i=0; i<input.length; i++){
    input[i].focus();
    input[i].blur();
  }

  for(let i=0; i<invalid.length; i++){
    
    
    if(!invalid[i].classList.contains("hidden")){
      return;
    }
  }
  

  if(navCount > 0) {
      navCount -= 1;
  }


  showSection(cardIndex += 1);
}

function prevSection() {
  const invalid = document.querySelectorAll("[data-invalid]");
  for(let i=0; i<invalid.length; i++){
    invalid[i].classList.add("hidden");
  }
    navCount += 1;
    showSection(cardIndex -= 1);
}

function submitWithAcc(btn) {
  validateField('password');
  const invalid = document.querySelectorAll("[data-invalid]");
  const input = document.querySelectorAll("[data-formulario]");
  
  for(i=0; i<input.length; i++){
    input[i].focus();
    input[i].blur();
  }

  for(let i=0; i<invalid.length; i++){
    
    
    if(!invalid[i].classList.contains("hidden")){
      return;
    }
  }

  form = document.querySelector('[data-target-form=formulario]');
  form.submit();


}

function confirmPassword(confirm){
  const password = document.querySelector('[data-formulario=password]');
  const invalid = document.querySelector('[data-invalid=confirm_password]');
  if(confirm.value==password.value){
    invalid.classList.add('hidden');
    confirm.classList.remove('outline', 'outline-red-600');
  }else{
    invalid.classList.remove('hidden');
    confirm.classList.add('outline', 'outline-red-600');
  }
}


function showSection(n) {
  
  const slides = document.querySelectorAll("[data-layout=formSection]");
  //const slides = document.getElementsByClassName("fomrSection");
  const btn_prev = document.querySelector("[data-layout=prevBtn]");
  const btn_next = document.querySelector("[data-layout=nextBtn]");
  const btns_submit = document.querySelector("[data-layout=submitBtns]");
  const bar = document.querySelector("[data-layout=progressBar]");
  const banner = document.querySelector("[data-layout=iefp_banner]");
  btn_prev.style.display = "block";
  btn_next.style.display = "block";
  btns_submit.style.display = "none";
  bar.style.display = "none";
  
  
  let icons = document.querySelectorAll("[data-layout=progress-icon]");
  let colors = document.querySelectorAll("[data-layout=progress-colors]");
  let text = document.querySelectorAll("[data-layout=progress-text]");
  let lines = document.querySelectorAll("[data-layout=progress-line]");


/*
let step_id_text = document.getElementById("step_id_text");
  let step_id = document.getElementById("step_id");

  step_id.classList.add('bg-teal-600 border-teal-600');
  */
  if (n >= slides.length) {cardIndex = slides.length-1;}
  if (n < 0) {cardIndex = 0}
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  if (cardIndex == 0){
    banner.style.display = "";
    btn_prev.style.display = "none";
  }
  if (cardIndex == slides.length-1){
    banner.style.display = "";
    btn_next.style.display = "none";
    btns_submit.style.display = "";
  }

 slides[cardIndex].style.display = "block";

  if(cardIndex >= 1 && cardIndex < slides.length-1) {
      
    banner.style.display = "none";
    bar.style.display = "";

    //text-white: ativo ou text-teal-600 : completado ou text-gray-500 : por fazer
    //
    // border-gray-300  ou border-teal-600-> traços
  
    //active
    icons[cardIndex-1].classList.add("bg-teal-600", "border-teal-600");  
    icons[cardIndex-1].classList.remove("border-gray-300");  
    colors[cardIndex-1].classList.add("text-white");  
    colors[cardIndex-1].classList.remove("text-gray-500"); 
    colors[cardIndex-1].classList.remove("text-teal-600"); 
    text[cardIndex-1].classList.remove("text-gray-500"); 
    text[cardIndex-1].classList.add("text-teal-600"); 
      
      
  }
    
  if (cardIndex >= 2) {
    //completed 
    icons[cardIndex-2].classList.remove("bg-teal-600");  
    colors[cardIndex-2].classList.add("text-teal-600");  
    colors[cardIndex-2].classList.remove("text-white"); 
    lines[cardIndex-2].classList.remove("border-gray-300"); 
    lines[cardIndex-2].classList.add("border-teal-600");
  }
    
  if(navCount > 0 ){
    icons[cardIndex].classList.remove("bg-teal-600", "border-teal-600");  
    icons[cardIndex].classList.add("border-gray-300");  
    colors[cardIndex].classList.remove("text-white"); 
    colors[cardIndex].classList.remove("text-teal-600");   
    colors[cardIndex].classList.add("text-gray-500"); 
    text[cardIndex].classList.add("text-gray-500"); 
    text[cardIndex].classList.remove("text-teal-600"); 
    lines[cardIndex-1].classList.add("border-gray-300"); 
    lines[cardIndex-1].classList.remove("border-teal-600");
  
  }
    
} 

function initialShow(){
  let banner = document.querySelector("[data-layout=iefp_banner]");
  banner.style.display = "";
  showSection(cardIndex);

}


function postalFocus() {
  const postal1 = document.querySelector('[data-target="postal1"]');
  const postal2 = document.querySelector('[data-target="postal2"]');
  
  postal1.addEventListener('input', (e) => {
    let length = e.target.value.length; 
    if(length >= 4){
      postal2.focus();
      e.target.value = (e.target.value).substring(0,4);
    }
  });

  postal2.addEventListener('input', (e) => {
    let length = e.target.value.length; 
    if(length >= 3){
      postal2.blur();
      e.target.value = (e.target.value).substring(0,3);
    }
  });
}

// validations

function validateField(data_name) {
  const field = document.querySelector(`[data-formulario="${data_name}"]`);
  const error_msg = document.querySelector(`[data-invalid="${data_name}"]`);
  const pattern = new RegExp(field.getAttribute('pattern'));
  //const pattern = /^[a-zA-Z]+((\s|\.)[a-zA-Z]+)+/

  //field.addEventListener('blur', (e))
  const trimmed = field.value.trim();
  
  //if(typeof pattern !== 'undefined'){
  if(pattern == "/null/"){  
    invalid = trimmed === "";
  }
  else{
    invalid = !pattern.test(trimmed);
  }
  if(invalid){
    //field.classList.remove('outline-blue-600');
    field.classList.add('outline', 'outline-red-600');
    error_msg.classList.remove('hidden');
    error_msg.classList.add('block');
    
  }else{
    field.classList.remove('outline', 'outline-red-600');
    //field.classList.add('outline-blue-600');
    error_msg.classList.add('hidden');
    error_msg.classList.remove('block');
  }
  
}

function validateOnEmployed(data_name){
  const situacao = document.querySelector('[data-layout="SitProf-selector"]');
  let tipo = situacao.value; 

  if(tipo==1){
    validateField(data_name);
  }
}

function validateRadial(){
  const nameInputs = document.getElementsByName("empregado");
  const situacao = document.querySelector('[data-layout="SitProf-selector"]');
  let tipo = situacao.value; 

  if(tipo==1){
    var error_msg1 = document.querySelector('[data-invalid="tipoEmpregado"]');
    const empregado = document.querySelectorAll('[data-formulario="tipoEmpregado"]');
    if(empregado[0].checked || empregado[1].checked){
      empregado[0].classList.remove('outline', 'outline-red-600');
      empregado[1].classList.remove('outline', 'outline-red-600');
      error_msg1.classList.add('hidden');
      error_msg1.classList.remove('block');
    }
    else{
      empregado[0].classList.add('outline', 'outline-red-600');
      empregado[1].classList.add('outline', 'outline-red-600');
      error_msg1.classList.remove('hidden');
      error_msg1.classList.add('block');
    }
  }
  else if(tipo==2){
    var error_msg2 = document.querySelector('[data-invalid="tempoDesempregado"]');
    const desempregado = document.querySelectorAll('[data-formulario="tempoDesempregado"]');
    if(desempregado[0].checked || desempregado[1].checked){
      desempregado[0].classList.remove('outline', 'outline-red-600');
      desempregado[1].classList.remove('outline', 'outline-red-600');
      error_msg2.classList.add('hidden');
      error_msg2.classList.remove('block');
    }
    else{
      desempregado[0].classList.add('outline', 'outline-red-600');
      desempregado[1].classList.add('outline', 'outline-red-600');
      error_msg2.classList.remove('hidden');
      error_msg2.classList.add('block');
    }
  }
}

function limitSize(identifier, n = 0) {
  input = document.querySelector(`[data-formulario="${identifier}"]`);
  if(n==-1){
    n = input.getAttribute('maxlength');
    alert(1);
  }
  input.addEventListener('input', (e) => {
  let length = e.target.value.length; 
    if(length >= n){
      e.target.value = (e.target.value).substring(0,n);
      postal.blur();
    }
  });
}

function mostrarConcelhos() {

  const distrito = document.querySelector('[data-formulario="distrito"]');
  const concelhos = document.querySelectorAll('[data-formulario-option="concelho"]');
    for(let i=0;i<concelhos.length;i++){
      var distrito_id = concelhos[i].getAttribute('data-target-distrito');
      if(distrito_id == distrito.value){
        concelhos[i].classList.remove('hidden');
      }
      else{
        if(!concelhos[i].classList.contains('hidden')){
          concelhos[i].classList.add('hidden');
        }
      }
    }
  const concelho = document.querySelector('[data-formulario="concelho"]');
  concelho.value = "";

  
}

/*
function sitProff_layoutListener() {
  const situacao = document.querySelector('[data-layout="SitProf-selector"]');
  situacao.addEventListener('change', (e) => {
    const layout = document.querySelectorAll('[data-layout="SitProf"]');
    let tipo = e.target.value; 
    for(var i = 0; i<layout.length; i++){
      layout[i].classList.add('hidden');
      var inputs = []
        .concat(Array.from(layout[i].getElementsByTagName('input')))
        .concat(Array.from(layout[i].getElementsByTagName('select')))
      for(var i = 0; i<inputs.length; i++) {
        inputs[i].value = ""
      }
    }
      if(tipo == 1){
        //empregado
        layout[i].classList.remove('hidden');
      }
      else if(tipo == 2) {
        //desempregado
        layout[i].classList.remove('hidden');
      }
      else if(tipo == 3) {
        //estudante
        layout[i].classList.remove('hidden');
      }
    });

}
*/

function sitProff_layoutListener() {
  const situacao = document.querySelector('[data-layout="SitProf-selector"]');
  const layout = document.querySelectorAll('[data-layout="SitProf"]');
  let tipo = situacao.value; 
  for(let i = 0; i<layout.length; i++){
    const invalidInput = layout[i].querySelectorAll('[data-invalid]');
    for(let j=0; j<invalidInput.length; j++){
      invalidInput[j].classList.add("hidden");
      invalidInput[j].classList.remove("block");
    }
    layout[i].classList.add('hidden');
    var inputs = []
      .concat(Array.from(layout[i].getElementsByTagName('input')))
      .concat(Array.from(layout[i].getElementsByTagName('select')))
      .concat(Array.from(layout[i].getElementsByTagName('textarea')));
    for(var j = 0; j<inputs.length; j++) {
      inputs[j].value = "";
      inputs[j].checked = false;
    }
  }
    if(tipo == 1){
      //empregado
      layout[0].classList.remove('hidden');
    }
    else if(tipo == 2) {
      //desempregado
      layout[1].classList.remove('hidden');
    }
    /*
    else if(tipo == 3) {
      //estudante
      layout[2].classList.remove('hidden');
    }
    */
}

function FomacaoDetails(id_formacao) {
  const formacaoInfo = document.querySelector('[data-layout="formacaoInfo"]');
  const DetalhesFormacao = document.querySelector('[data-target="DetalhesFormacao"]');
  const RegimeHorario = document.querySelector('[data-target="RegimeHorario"]');
  const RegimePresensa = document.querySelector('[data-target="RegimePresenca"]');
  const ListaRequisitos = document.querySelector('[data-target="ListaRequisitos"]');

  DetalhesFormacao.textContent = "";
  RegimeHorario.textContent = "";
  RegimePresensa.textContent = "";
  ListaRequisitos.textContent = "";



  
  // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/readystatechange_event

  fetch('form/formacao/'+id_formacao)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(formacao => {
    DetalhesFormacao.innerText = formacao.descricao;
    RegimeHorario.innerText = formacao.regime_presenca;
    RegimePresensa.innerText = formacao.regime_horario;

    ListaRequisitos.innerHTML = "";
    
		formacao.requisitos.forEach(requisito => {
        var p = document.createElement("p");
        p.classList.add("text-sm","text-gray-600", "px-2", "font-bold");
        p.innerText = "· "+requisito;
        ListaRequisitos.appendChild(p);
      });

    formacaoInfo.classList.remove("hidden");
  
  })
  .catch(error => console.error('Error:', error));
  
  

}






