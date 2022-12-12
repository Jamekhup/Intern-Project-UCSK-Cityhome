$(document).ready(function(){

  var navbar = $('.mynav');

  $(window).scroll(function(){
    if($(document).scrollTop() <= 120){
      navbar.removeClass('navbar-scroll');
    } else {
      navbar.addClass('navbar-scroll');
    }
  });


 document.getElementById('sr').addEventListener('change',getPrice);

 function getPrice(){
      let price = document.getElementById('sr').value;
      
      if(price == "rent"){
          document.getElementById('cp').innerHTML ="";
          document.getElementById('cp').removeAttribute('disabled');
          
          let rentPrice = ['- For Rent Price -','5-10 lakhs','10-20 lakhs','20-30 lakhs','30-40 lakhs','40-50 lakhs','50-80 lakhs','80-100 lakhs','100 lakhs and above'];
          for(let i = 0; i<rentPrice.length; i++){
              document.getElementById('cp').innerHTML += ('<option value="'+rentPrice[i]+'">'+rentPrice[i]+'</option>');
              
          }
         
      }
      
      else if(price == "sale"){
          document.getElementById('cp').innerHTML ="";
           document.getElementById('cp').removeAttribute('disabled');
          
          let rentPrice = ['- For Sale Price -','1000-2000 lakhs','2000-3000 lakhs','3000-4000 lakhs','4000-5000 lakhs','5000-6000 lakhs','6000-7000 lakhs','7000-8000 lakhs','8000-9000 lakhs','9000-10000 lakhs','10000 lakhs and above'];
          for(let i = 0; i<rentPrice.length; i++){
              document.getElementById('cp').innerHTML += ('<option value="'+rentPrice[i]+'">'+rentPrice[i]+'</option>');
              
          }
      }else{
          console.log('blank');
      }
 }



});