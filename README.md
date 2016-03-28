# Themia-for-TE
针对typecho优化的Themia模板

下载后上传到typecho模板目录解压，将解压后的目录重命名为Themia，即可使用

2016-03-28

3.2.0版更新与改变内容

1，跨屏浏览二维码生成功能增加jiathis和bshare生成方式，优点是模板无需加载js等，缺点是依赖第三方api，也不能算是缺点，本模板的分享功能就是依赖的jiathis，也可以选择引用js生成的方式，默认是引用js生成，优点是稳定，缺点是模板需要多加载个js。(jiathis和bshare的api生成二维码速度也很快，直观上感觉不到差异。)

2，文章中返回顶部按钮，增加过度效果。

3，删除自带的代码高亮功能（久经思考还是决定删除了！还是建议用这个插件<a href="https://github.com/WiseClock/Prismjs" target="_blank">Prismjs插件</a>有什么问题可以直接与作者反馈，这样方便插件作者更新！因为代码高亮输入格式都是一样的！所以安装了插件也不用去挨个修改旧的文章）。

3.1.0版更新与改变内容

1，修正模板某个自定义的样式与分享组件矛盾导致的显示错乱。(这个是最初弄模板时留下的问题，才发现问题所在，汗死)。

2，分享组件，国内化，改为微博分享，人人网分享，QQ空间分享。

3，修复图片与打赏组件直接接触会导致打赏插件会错乱。

4，blockquote样式优化，感谢KohinataMiku建议。

详细介绍看下面的链接，github我比较迷茫所有有问题也去下面的链接评论

http://qqdie.com/archives/with-the-help-of-themia-subject-to-update-the-manual/
