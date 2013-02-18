# [guodouya](http://guodouya.com) - this is a test

登录测试 www.guo.me/login qqucx@163.com 123456 获取用户信息
```php
<?php

$id=Auth::user()->id
$email = Auth::user->email;
?>
```
[Official Website & Documentation](http://laravel.com)

## 控制器过滤器

```php
<?php
 public function __construct() {
        $this->filter('before', 'auth')->only(array('index', 'home'));
    }
?>
```

###获取域名 Config::get('application.url')
