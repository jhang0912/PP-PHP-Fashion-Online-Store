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

// 主分類
$('.sort>div>a').on('mouseover',function(){
  let next = $(this).next()
  let nextId =$(next).attr('id')
  if(sortClicked !== nextId)
  {
    $(next).css('animation','bottomLine 0.75s ease-in-out 1 forwards');
  }
})

$('.sort>div>a').on('mouseout',function(){
  let next = $(this).next();
  let nextId =$(next).attr('id');
  if(sortClicked !== nextId)
  {
    $(next).css('animation','reBottomLine 0.75s ease-in-out 1 forwards');
  }
})

/* sort fadeIn/fadeOut */
let genderClick = url.searchParams.get('page');
let mouseY,ndSortSt;

$('.sort>div>a').on('mouseover',function(){
  let next = $(this).next()
  let nextId =$(next).attr('id')

  $('.ndSort').fadeIn(400,()=>{
    if(nextId !== ndSortSt)
    {
      $('.ndSortCon').fadeOut(400);
    }
  });

  setTimeout(function(){
    if(genderClick =='home' || genderClick =='')
    {
      genderClick = 'men';
    }

    $.get('./api/ndSort.php',{genderClick,nextId},function(res){
      $('.ndSortCon').html(res)
    })
    $('.ndSortCon').fadeIn(400)
  },400)
  ndSortSt = nextId;
})

$("html").mousemove(function(e){
  mouseY = e.pageY;
  if(mouseY > 594.5 || mouseY < 79)
  {
    $('.ndSort').fadeOut(500);
    $('.ndSortCon').fadeOut(500);
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



