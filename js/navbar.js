/* bottomLine */
let getUrlString = location.href;
let url = new URL(getUrlString);
let genderClicked = url.searchParams.get('page');/* 確定目前的性別分類是哪一個 */

// 性別分類
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

let sortClicked = url.searchParams.get('mainSort');/* 確定目前的主分類是哪一個 */
console.log(sortClicked)

// 主分類
$('.sort>div>a').on('mouseover',function(){
  let next = $(this).next()
  let nextId =$(next).attr('id')
  if(sortClicked !== nextId)
  {
    $(next).css('animation','bottomLine 0.75s ease-in-out 1 forwards')
  }
})

$('.sort>div>a').on('mouseout',function(){
  let next = $(this).next()
  let nextId =$(next).attr('id')
  if(sortClicked !== nextId)
  {
    $(next).css('animation','reBottomLine 0.75s ease-in-out 1 forwards')
  }
})



/* ready */
$(document).ready(function(){
/* 判斷性別分類checked */
  if(genderClicked == 'women')
  {
    $('#womenLine').css({
      height:'1px',
      width:'100%',
      opacity:1
    });
  }

  if(genderClicked == 'men')
  {
    $('#menLine').css({
      height:'1px',
      width:'100%',
      opacity:1
    });
  }

  /* 判斷主分類checked */
  if(sortClicked != '')
  {
    $('#'+sortClicked).css({
      height:'1px',
      width:'100%',
      opacity:1
    })
  }
});



