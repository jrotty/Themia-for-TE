//搜索
$("a#sou").click(function () {
 $('body').prop('class', 'search_bg');
    $('.search_form');
    $('div#sos').prop('class', 'sb');
    $(".search_key").focus();
    $(".search_close").click(function () {
        $('.search_form');
        $('div#sos').prop('class', '');
 $('body').prop('class', '');
    });
});

$("li#sou").click(function () {
 $('body').prop('class', 'search_bg');
    $('.search_form');
    $('div#sos').prop('class', 'sb');
    $(".search_key").focus();
    $(".search_close").click(function () {
        $('.search_form');
        $('div#sos').prop('class', '');
 $('body').prop('class', '');
    });
});

$('.postShorten-title a').each(function(){
        $(this).click(function(){
            myloadoriginal = this.text;
            $(this).text('少女正在祈祷中...');
            var myload = this;
            setTimeout(function() { $(myload).text(myloadoriginal); }, 2011);
        });
    });