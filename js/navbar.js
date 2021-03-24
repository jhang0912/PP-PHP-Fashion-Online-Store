/* bottomLine */
let getUrlString = location.href;
let url = new URL(getUrlString);
let genderClicked = url.searchParams.get('page');/* 確定目前的性別分類是哪一個 */

$('.women').on('mouseover',function(){
  if(genderClicked != "women"){
    document.getElementById('womenLine').style.animation="bottomLine 0.75s ease-in-out 1 forwards";
  }
})

$('.men').on('mouseover',function(){
  if(genderClicked != "men"){
    document.getElementById('menLine').style.animation="bottomLine 0.75s ease-in-out 1 forwards";
  }
})

$('.women').on('mouseout',function(){
  if(genderClicked !="women"){
    document.getElementById('womenLine').style.animation="reBottomLine 0.75s ease-in-out 1 forwards";
  }
})

$('.men').on('mouseout',function(){
  if(genderClicked !="men"){
    document.getElementById('menLine').style.animation="reBottomLine 0.75s ease-in-out 1 forwards";
  }
})


/* ready */
$(document).ready(function(){

  if(genderClicked == "women"){
    $('#womenLine').css({
      height:'1px',
      width:'100%'
    });
  }

  if(genderClicked == "men"){
    $('#menLine').css({
      height:'1px',
      width:'100%'
    });
  }
});



