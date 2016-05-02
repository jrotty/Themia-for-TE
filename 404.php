<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>404Page Not Found</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                margin: 0;
                line-height: 1.5;
            }

            html {
                color: #888;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                text-align: center;
            }

            body {
                left: 50%;
                margin: -43px 0 0 -150px;
                position: absolute;
                top: 50%;
                width: 300px;
            }

            h1 {
                color: #555;
                font-size: 2em;
                font-weight: 400;
            }

            p {
                line-height: 1.2;
            }

            @media only screen and (max-width: 270px) {

                body {
                    margin: 10px auto;
                    position: static;
                    width: 95%;
                }

                h1 {
                    font-size: 1.5em;
                }

            }

        </style>
    </head>
    <body>
        <h1>404Page Not Found</h1>
        <p>页面不存在或被管理员删除， <span id="totalSecond">3</span>秒后自动返回首页</p>
    </body>
<script language="javascript" type="text/javascript">
<!--
    var second = document.getElementById('totalSecond').textContent;
    if (navigator.appName.indexOf("Explorer") > -1)  //判断是IE浏览器还是Firefox浏览器，采用相应措施取得秒数
    {
        second = document.getElementById('totalSecond').innerText;
    } else
    {
        second = document.getElementById('totalSecond').textContent;
    }
    setInterval("redirect()", 1000);  //每1秒钟调用redirect()方法一次
    function redirect()
    {
        if (second < 0)
        {
            location.href = '<?php $this->options->siteUrl(); ?>';
        } else
        {
            if (navigator.appName.indexOf("Explorer") > -1)
            {
                document.getElementById('totalSecond').innerText = second--;
            } else
            {
                document.getElementById('totalSecond').textContent = second--;
            }
        }
    }
-->
</script>
</html>
<!-- IE requires 512+ bytes: http://www.404-error-page.com/404-error-page-too-short-problem-microsoft-ie.shtml -->
