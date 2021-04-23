/* wow.js */
new WOW().init();
/* bottomLine */
let getUrlString = location.href;
let url = new URL(getUrlString);
let genderClicked = url.searchParams.get('page');/* 確定目前的性別分類是哪一個 */

// 性別分類
$('.women').on('mouseover', function () {
  if (genderClicked != "women") {
    document.getElementById('womenLine').style.animation = "bottomLine 0.75s ease-in-out 1 forwards";
  }
})

$('.men').on('mouseover', function () {
  if (genderClicked != "men") {
    document.getElementById('menLine').style.animation = "bottomLine 0.75s ease-in-out 1 forwards";
  }
})

$('.women').on('mouseout', function () {
  if (genderClicked != "women") {
    document.getElementById('womenLine').style.animation = "reBottomLine 0.75s ease-in-out 1 forwards";
  }
})

$('.men').on('mouseout', function () {
  if (genderClicked != "men") {
    document.getElementById('menLine').style.animation = "reBottomLine 0.75s ease-in-out 1 forwards";
  }
})

// 確定目前的主分類是哪一個 
let sortClicked = url.searchParams.get('mainSort');

// 主分類
$('.sort>div>a').on('mouseover', function () {
  let next = $(this).next()
  let nextId = $(next).attr('id')
  if (sortClicked !== nextId) {
    $(next).css('animation', 'bottomLine 0.75s ease-in-out 1 forwards');
  }
})

$('.sort>div>a').on('mouseout', function () {
  let next = $(this).next();
  let nextId = $(next).attr('id');
  if (sortClicked !== nextId) {
    $(next).css('animation', 'reBottomLine 0.75s ease-in-out 1 forwards');
  }
})

/* sort fadeIn/fadeOut */
let genderClick = url.searchParams.get('page');
let mouseY, ndSortSt;

$('.sort>div>a').on('mouseover', function () {
  let next = $(this).next()
  let nextId = $(next).attr('id')

  $('.ndSort').fadeIn(400, () => {
    if (nextId !== ndSortSt) {
      $('.ndSortCon').fadeOut(400);
    }
  });

  setTimeout(function () {
    if (genderClick == 'home' || genderClick == null) {
      genderClick = 'men';
    } else {
      genderClicked = url.searchParams.get('page');
    }
    //產生前端元件
    $.get('./api/ndSort.php', { genderClick, nextId }, function (res) {
      $('.ndSortCon').html(res)
    })
    $('.ndSortCon').fadeIn(400)
  }, 400)
  ndSortSt = nextId;
})

$("html").mousemove(function (e) {
  mouseY = e.pageY;
  if (mouseY > 594.5 || mouseY < 79) {
    $('.ndSort').fadeOut(500);
    $('.ndSortCon').fadeOut(500);
  }
})

  //畫面重整時將rwdBar滑入
  $('.rwdBar').css({
    left: '-85%'
  })


/* ready */
$(document).ready(function () {
  // 判斷性別分類checked 
  if (genderClicked == 'women') {
    $('#womenLine').css({
      height: '1px',
      width: '100%',
      opacity: 1
    });
  }

  if (genderClicked == 'men') {
    $('#menLine').css({
      height: '1px',
      width: '100%',
      opacity: 1
    });
  }

  /* 判斷主分類checked */
  if (sortClicked != '') {
    $('#' + sortClicked).css({
      height: '1px',
      width: '100%',
      opacity: 1
    })
  }

  //rwdBar 滑出滑入動態效果
  $('.bars').on('click', function () {
    $('.rwdBar').animate({ left: 0 }, 500)
  })

  $('.x-cross').on('click', function () {
    $('.rwdBar').animate({ left: '-85%' }, 500)
  })

  //rwdBar 當畫面寬度變寬時將rwdBar滑入
  $(window).resize(function () {
    let width = $(window).width();
    if (width > 750) {
      $('.rwdBar').css({
        left: '-85%'
      })
    }
  });


  //
  $('.rwdBar-women').hide()
  $('#sort-women').hide()

  $('.rwdBar-gender').on('click',function(){
    let target = $(this)
    let targetB =$(this).siblings()
    let gender = $(this).attr('data-gender')

    $(target).css({
      border: '1px solid black',
    })

    $(targetB).css({
      border: 'none',
    })
    
    $('.rwdBar-'+gender).siblings().fadeOut(300,()=>{
      $('.rwdBar-'+gender).fadeIn(300)
    })

    if(gender=='men'){
      $('#sort-women').fadeOut(300,()=>{
          $('#sort-'+gender).fadeIn(300);
      })
    }else{
      $('#sort-men').fadeOut(300,()=>{
          $('#sort-'+gender).fadeIn(300);
      })

    }
  })
});



