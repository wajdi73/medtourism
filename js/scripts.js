$(document).ready(function(){
  $('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: false,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });
  $('.post-wrapper2').slick({
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: false,
    nextArrow: $('.next2'),
    prevArrow: $('.prev2'),
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });
  $('.post-wrapper3').slick({
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: false,
    nextArrow: $('.next3'),
    prevArrow: $('.prev3'),
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });
});

function verif(){
  var secNam = document.getElementById("SecondName");
  if (!secNam.checkValidity()) {
   document.getElementById("erreurS").innerHTML =  secNam.validationMessage;
   document.getElementById("erreurS").className="msgErr";
  } else {
    document.getElementById("erreurS").innerHTML = " ";
 }
 var firNam = document.getElementById("FirstName");
  if (!firNam.checkValidity()) {
   document.getElementById("erreurF").innerHTML =  firNam.validationMessage;
   document.getElementById("erreurF").className="msgErr";
  } else {
    document.getElementById("erreurF").innerHTML = " ";
 }
 var mob = document.getElementById("Mobile");
  if (!mob.checkValidity()) {
   document.getElementById("erreurM").innerHTML =  mob.validationMessage;
   document.getElementById("erreurM").className="msgErr";
  } else {
    document.getElementById("erreurM").innerHTML = " ";
 }
 var job = document.getElementById("Job");
  if (!job.checkValidity()) {
   document.getElementById("erreurJ").innerHTML =  job.validationMessage;
   document.getElementById("erreurJ").className="msgErr";
  } else {
    document.getElementById("erreurJ").innerHTML = " ";
 }
}

function hideList(input,id){
  var datalist  = document.querySelector("datalist."+id);
  console.log(datalist);
	if (input.value) {
		datalist.id=id;  		
	} else {
		datalist.id="";
	}
}
