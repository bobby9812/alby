function openModal(){document.getElementById("myModal").style.display="block"}function closeModal(){document.getElementById("myModal").style.display="none"}function plusSlides(e){showSlides(slideIndex+=e)}function currentSlide(e){showSlides(slideIndex=e)}function showSlides(e){var l,d=document.getElementsByClassName("mySlides"),n=document.getElementsByClassName("demo"),s=document.getElementById("caption");for(e>d.length&&(slideIndex=1),e<1&&(slideIndex=d.length),l=0;l<d.length;l++)d[l].style.display="none";for(l=0;l<n.length;l++)n[l].className=n[l].className.replace(" active","");d[slideIndex-1].style.display="block",n[slideIndex-1].className+=" active",s.innerHTML=n[slideIndex-1].alt}var slideIndex=1;showSlides(slideIndex);