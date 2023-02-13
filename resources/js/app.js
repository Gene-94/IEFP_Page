import './bootstrap';
//import './form.js';

function openMenu(bool) {
   alert();
   menu = document.querySelector('[data-target="menu"]');
   if(bool == true){
    menu.classList.remnove("hide");
   }
   else {
    menu.classList.add("hide");
   }

}

function addOption(){
   
}

function editOption() {
   confirm();
}

function deleteOption(nome) {
   let confirm = confirm(`Tem a certeza que deseja apagar a opçao ${nome} ?`);
   if(confirm) {
      alert("Opçao apagada !");
   }
   return "submit";
}

