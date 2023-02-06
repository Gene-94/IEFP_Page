
let cardIndex = 0;
let navCount = 0;

// Next/previous controls
function nextSection() {
    if(navCount > 0) {
        navCount -= 1;
    }
    showSection(cardIndex += 1);
}
function prevSection() {
    navCount += 1;
    showSection(cardIndex -= 1);
}


function showSection(n) {
  //document.querySelector("[data-layout=formSection]")
  const slides = document.getElementsByClassName("fomrSection");
  const btn_prev = document.getElementById("prevBtn");
  const btn_next = document.getElementById("nextBtn");
  const bar = document.getElementById("progressBar");
  const banner = document.getElementById("iefp_banner");
  btn_prev.style.display = "block";
  btn_next.style.display = "block";
  bar.style.display = "none";
  

  let icons = document.getElementsByClassName("progress-icon");
  let colors = document.getElementsByClassName("colors");
  let text = document.getElementsByClassName("progress-text");
  let lines = document.getElementsByClassName("progress-line");



/*
  let step_id_text = document.getElementById("step_id_text");
  let step_id = document.getElementById("step_id");

  step_id.classList.add('bg-teal-600 border-teal-600');
  */
  //let dots = document.getElementsByClassName("dot"); // replace dor for each progress-item
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
  }

  /*
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  */
 
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

    

      
     
  //dots[cardIndex-1].className += " active";
} 

function initialShow(){
    let banner = document.getElementById("iefp_banner");
    banner.style.display = "";
    showSection(cardIndex);
}


function postalFocus() {
  const postal1 = document.querySelector('[data-target="postal1"]');
  const postal2 = document.querySelector('[data-target="postal2"]');
  
  postal1.addEventListener('input', (e) => {
    let length = e.target.value.length 
    if(length >= 4){
      postal2.focus();
      e.target.value = (e.target.value).substring(0,4);
    }
  });

  postal2.addEventListener('input', (e) => {
    let length = e.target.value.length 
    if(length >= 3){
      postal2.blur();
      e.target.value = (e.target.value).substring(0,3);
    }
  });
}


