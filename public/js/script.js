$(document).ready(function(){
  var navHeight = $('#myHeader').offset().top;
  $(window).scroll(function(){
    if ($(window).scrollTop() > navHeight) {
      $("#myHeader").addClass("fixed");
      $("#myHeader").slideDown('200');
    }
    else {
      $("#myHeader").removeClass("fixed");
    }
 });
});

var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function validasi() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;		
  if (username != "" && password!="") {
    return true;
  }else{
    alert('Username dan Password harus di isi !');
    return false;
  }
}

 

