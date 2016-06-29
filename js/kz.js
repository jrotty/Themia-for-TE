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
            $(this).text('正在加载中...');
            var myload = this;
            setTimeout(function() { $(myload).text(myloadoriginal); }, 2011);
        });
    });
function GenerateContentList()
{
 var mainContent = $('#mulu');
 var h1_list = $('#yl h1');　　//如果你的章节标题不是h1,只需要将这里的h1换掉即可
  var h2_list = $('#yl h2');
 if(mainContent.length < 1)
  return;
  
 if(h1_list.length>0)
 {
  var content = '';
  content += '';
  content += '<h2 id="table-of-contents">目录</h2>';
  content += '<ol class="toc">';
  for(var i=0; i<h1_list.length; i++)
  {
   var go_to_top = '<a name="_label' + i + '"></a>';
   $(h1_list[i]).before(go_to_top);
    
   var h2_list = $(h1_list[i]).nextAll("h2");
   var li2_content = '';
   for(var j=0; j<h2_list.length; j++)
   {
    var tmp = $(h2_list[j]).prevAll('h1').first();
    if(!tmp.is(h1_list[i]))
     break;
    var li2_anchor = '<a name="_label' + i + '_' + j + '"></a>';
    $(h2_list[j]).before(li2_anchor);
    li2_content += '<li class="toc-item toc-level-' + i + '_' + j + '"><a class="toc-link" href="#_label' + i + '_' + j + '"><span class="toc-text">' + $(h2_list[j]).text() + '</span></a></li>';
   }
    
   var li1_content = '';
   if(li2_content.length > 0)
    li1_content = '<li class="toc-item toc-level-' + i + '"><a class="toc-link" href="#_label' + i + '"><span class="toc-text">' + $(h1_list[i]).text() + '</span></a></li><ol class="toc-child">' + li2_content + '</ol>';
   else
    li1_content = '<li class="toc-item toc-level-' + i + '"><a class="toc-link" href="#_label' + i + '"><span class="toc-text">' + $(h1_list[i]).text() + '</span></a></li>';
   content += li1_content;
  }
if($('#mulu').length != 0 )
  {
   $($('#mulu')[0]).prepend(content);
  }
 } else{

if(h1_list.length==0&&h2_list.length>0)
 {
  var content = '';
  content += '';
  content += '<h2 id="table-of-contents">目录</h2>';
  content += '<ol class="toc">';
  for(var i=0; i<h2_list.length; i++)
  {
   var go_to_top = '<a name="_label' + i + '"></a>';
   $(h2_list[i]).before(go_to_top);
    
   var h3_list = $(h2_list[i]).nextAll("h3");
   var li3_content = '';
   for(var j=0; j<h3_list.length; j++)
   {
    var tmp = $(h3_list[j]).prevAll('h2').first();
    if(!tmp.is(h2_list[i]))
     break;
    var li3_anchor = '<a name="_label' + i + '_' + j + '"></a>';
    $(h3_list[j]).before(li3_anchor);
    li3_content += '<li class="toc-item toc-level-' + i + '_' + j + '"><a class="toc-link" href="#_label' + i + '_' + j + '"><span class="toc-text">' + $(h3_list[j]).text() + '</span></a></li>';
   }
    
   var li2_content = '';
   if(li3_content.length > 0)
    li2_content = '<li class="toc-item toc-level-' + i + '"><a class="toc-link" href="#_label' + i + '"><span class="toc-text">' + $(h2_list[i]).text() + '</span></a></li><ol class="toc-child">' + li3_content + '</ol>';
   else
    li2_content = '<li class="toc-item toc-level-' + i + '"><a class="toc-link" href="#_label' + i + '"><span class="toc-text">' + $(h2_list[i]).text() + '</span></a></li>';
   content += li2_content;
  }
if($('#mulu').length != 0 )
  {
   $($('#mulu')[0]).prepend(content);
  }
 } 
}
}
