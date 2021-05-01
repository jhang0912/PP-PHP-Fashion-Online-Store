
  let text = '';
  $.get('./api/goods2.php', { text, mainSortClicked, ndSortClicked }, function (res) {
    $('.goodsShow').html(res);
  })


$('.uk-nav>li>a').on('click', function () {
  let text = $(this).text();
  $.get('./api/goods2.php', { text, mainSortClicked, ndSortClicked }, function (res) {
      $('.goodsShow').html(res);
  })
})



