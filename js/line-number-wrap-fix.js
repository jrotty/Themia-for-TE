function sizeLinebox(codebox)
{
    var lines = codebox.innerHTML.split('\n');
    codebox.innerHTML = codebox.innerHTML + '<div id="lnfix"></div>';
    var lnbox = codebox.getElementsByClassName('line-numbers-rows')[0];
    var lnboxList = lnbox.children;
    var lnfix = document.getElementById('lnfix');
    for (var j = 0; j < lines.length - 1; j++)
    {
        lnfix.innerHTML = lines[j];
        if (lnfix.innerText == '')
            lnfix.innerHTML = ' ';
        var lnheight = lnfix.clientHeight;
        lnboxList[j].style.height = lnheight + 'px';
    };
    var node = document.getElementById('lnfix');
    node.parentNode.removeChild(node);
}

function resizeBox()
{
    var pres = document.getElementsByTagName('pre');
    for (var i = 0; i < pres.length; i++)
    {
        if (pres[i].className.indexOf('language-') > -1)
        {
            var codes = pres[i].getElementsByTagName('code');
            for (var j = 0; j < codes.length; j++)
            {
                sizeLinebox(codes[j]);
            };
        }
    };
}

window.addEventListener('resize', function()
{
    resizeBox();
});

Prism.hooks.add('complete', function (env)
{
    if (env.code.split('\n').length > 1)
    {
        for (var i = 0; i < Prism.hooks.all.complete.length - 1; i++)
            Prism.hooks.all.complete[i](env);
        sizeLinebox(env.element);
    }
});
