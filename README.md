# NewdayCms - 哩呵后台管理系统

![](https://img.shields.io/github/stars/newday-me/think-cms.svg) ![](https://img.shields.io/github/forks/newday-me/think-cms.svg) ![](https://img.shields.io/github/tag/newday-me/think-cms.svg)

**演示地址：[http://cms.newday.me](http://cms.newday.me "http://cms.newday.me")。**

## 一、CMS安装

最简单的是方式是composer update。
```json
{
    "type": "project",
    "require": {
        "newday-me/think-cms-manage": "*"
    },
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/newday-me/framework.git"
        },
        {
            "type": "git",
            "url": "https://github.com/newday-me/core-lib.git"
        },
        {
            "type": "git",
            "url": "https://github.com/newday-me/think-cms-installer.git"
        },
        {
            "type": "git",
            "url": "https://github.com/newday-me/think-cms-framework.git"
        },
        {
            "type": "git",
            "url": "https://github.com/newday-me/think-cms-public.git"
        },
        {
            "type": "git",
            "url": "https://github.com/newday-me/think-cms-manage.git"
        }
    ],
    "extra": {
        "think-path": "thinkphp",
        "cms-path": "thinkcms",
        "application-path": "application",
        "extend-path": "extend",
        "public-path": "public"
    },
    "minimum-stability": "dev"
}
```

如果没有composr环境的话，可以进入 [演示地址](http://cms.newday.me "http://cms.newday.me") 下载完整代码。

## 二、设计理念

* **Model、Validate和Logic**

一个表对应一个Model、Validate和Logic。
Model、Validate和Logic的命名和路径都是统一的，主要是为了方便Logic集成Model和Validate对象。
最后结果是只要引用了一个Logic就可以调用对应的Model和Validate对象。
Model、Validate和Logic对象都是Instance化，不建议直接NEW的方式创建。

*  **管理Module化**

为了将一个功能的前后台分离，引入了Module的概念。
实现方式类似OneThink的插件，实现的效果以文章模块为例子(使用路由)。
前台地址：[http://xxx.com/blog/article/index.html](http://xxx.com/blog/article/show.html "http://xxx.com/blog/article/index.html")。
后台地址：[http://xxx.com/module/blog/article/index.html](http://xxx.com/module/blog/article/index.html "http://xxx.com/module/blog/article/index.html")。

*  **Composer**

CMS设计了模块安装器，允许用户将一个功能制作成Composer模块，方便升级、管理和迁移。

## 三、功能设计

CMS的功能设计主要参考了OneThink，并实现了以下模块：

* 用户管理
* 权限管理
* 配置管理
* 菜单管理
* 附件管理
* 数据库备份
* 缓存管理
* 文章管理
* 队列管理

## 四、表单组件化

只需要简单地配置，就可以快速生成表单项。
已支持生成的表单项有：文本、文本域、标签、时间、颜色、图片、文件、单选、多选、下拉框、编辑器、JSON。

* **文本**

```php
{:block('text', ['title' => '用户昵称', 'name' => 'user_nick', 'value' => ''])}
```

* **标签**

```php
{:block('tag', ['title' => '文章标签', 'name' => 'article_tags', 'value' => ''])}
```

* **图片**

```php
{:block('image', ['title' => '文章封面', 'name' => 'article_cover', 'value' => ''])}
```

* **下拉选择**

```php
{:block('select', ['title' => '文章分类', 'name' => 'article_cate', 'list' => $cate_list])}
```

* **编辑器**

```php
{:block('editor', ['title' => '文章内容', 'name' => 'article_content', 'value' => ''])}
```

## 五、演示截图

* **控制台**

![](https://raw.githubusercontent.com/newday-me/think-cms/master/public/image/index.png)

* **配置管理**

![](https://raw.githubusercontent.com/newday-me/think-cms/master/public/image/config.png)

* **权限管理**

![](https://raw.githubusercontent.com/newday-me/think-cms/master/public/image/auth.png)

* **菜单管理**

![](https://raw.githubusercontent.com/newday-me/think-cms/master/public/image/menu.png)

* **网站设置**

![](https://raw.githubusercontent.com/newday-me/think-cms/master/public/image/setting.png)

* **文章管理**

![](https://raw.githubusercontent.com/newday-me/think-cms/master/public/image/article.png)

## 六、写在后面

如果你对CMS有什么建议或者想法，欢迎通过邮件联系我（newday_me@163.com），谢谢！！！