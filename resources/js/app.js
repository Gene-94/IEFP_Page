import './bootstrap';


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
