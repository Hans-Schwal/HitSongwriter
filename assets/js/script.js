function disconnect(){
  alert ("Deconnexion")
  }  
  
  // Bouton "haut de page"

  // Faire apparaître le bouton une fois que l'utilisateur descend de 20px 
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// Au clic, retour en haut de page
function topFunction() {
  document.body.scrollTop = 0; // Pour Safari
  document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
} 
