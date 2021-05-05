
/* 顯示商品 */
let text = 'Newest';
let currentNdSort = '';
$.get('./api/goods.php', { text, mainSortClicked, ndSortClicked, genderClicked }, function (res) {
  $('.goodsShow').html(res);
  $('.goodsCounts').text('all ' + $('.goods-card').length);
})

/* 顯示商品子分類 */
$.get('./api/leftMainSort.php', { mainSortClicked, genderClicked }, function (res) {
  $('#left_' + mainSortClicked).append(res)

  $('.leftNdSort').click(function () {
    ndSortClicked = $(this).text();
    $.get('./api/goods.php', { text, mainSortClicked, ndSortClicked, genderClicked }, function (res) {
      $('.goodsShow').html(res);
      $('.goodsCounts').text('all ' + $('.goods-card').length);//顯示商品數量
      currentNdSort = ndSortClicked;
      $('.goodsBreadcrumb').text(genderClicked+"／"+mainSortClicked+"／"+ndSortClicked)
    })
  })
})

/* 讓商品重新按照條件排列 */
$('.uk-nav>li>a').on('click', function () {
  let text = $(this).text();
  let ndSortClicked = currentNdSort;
  $.get('./api/goods.php', { text, mainSortClicked, ndSortClicked, genderClicked }, function (res) {
    $('.goodsShow').html(res);
    $('.goodsCounts').text('all ' + $('.goods-card').length);
  })
})
