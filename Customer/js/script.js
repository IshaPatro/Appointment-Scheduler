$(window).scroll(function ()

    {
        if ( $(window).scrollTop() > 50)
        {
            $("#NavBar").addClass("fixed-top");
        }
        else  if ($(window).scrollTop() < 50)
        {
            $("#NavBar").removeClass("fixed-top");
        }
    });

// ------------------------------------------------------------------Login Page--------------------------------------------------------------------------------
$(function() {
  $(".CustomerBox-btn").click(function() {
   $(".w40").addClass("active");
   $(".CustomerBox-btn").addClass("active");
   $(".ClientBox-btn").removeClass("active");
   $(".CustomerBox").removeClass("active");
   $(".ClientBox").addClass("active");
   $(".w40").removeClass("shift-left");
   $(".w60").removeClass("shift-right");
   $(".w60").addClass("active");
   $(".new-account-section").addClass("active");
   $(".sign-in-section").addClass("active");
  });
});
$(function() {
  $(".ClientBox-btn").click(function() {
   $(".CustomerBox-btn").removeClass("active");
   $(".ClientBox-btn").addClass("active");
   $(".w40").removeClass("active");
   $(".w40").addClass("shift-left");
   $(".CustomerBox").addClass("active");
   $(".ClientBox").removeClass("active");
   $(".w60").removeClass("active");
   $(".w60").addClass("shift-right");
   $(".new-account-section").removeClass("active");
   $(".sign-in-section").removeClass("active");
  });
});

$(document).ready(function(){
    var $signin = $('#signin-btn');
    var $signup = $('#signup-btn');
    var $frmSignup = $('#frm-signup');
    var $frmSignin = $('#frm-signin');

    $signin.click(function(){
      $frmSignup.hide();
      $frmSignin.fadeIn();
      $signup.removeClass('active');
      $(this).addClass('active');
    });
    $signup.click(function(){
      $frmSignin.hide();
      $frmSignup.fadeIn();
      $signin.removeClass('active');
      $(this).addClass('active');
    });
  });

  var x = document.getElementById("login");
  var y = document.getElementById("register");
  var z = document.getElementById("login-signup");

  function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
  }
  function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
  }


// ------------------------------------------------------------------Department Filtering----------------------------------------------------------------------
// Show filtered elements
function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

function ChangeDepartment() {
  var x, i, c, department;
  department = document.getElementById("department");
  c = department.options[department.selectedIndex].value;
  x = document.getElementsByClassName("filterDiv");
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}
//--------------------------------------------------------------- FAQ-----------------------------------------------------------
const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }

  });
});
