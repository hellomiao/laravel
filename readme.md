# [Laravel](http://laravel.com) - A PHP Framework For Web Artisans

登录测试 www.guo.me/login qqucx@163.com 123456 获取用户信息
```php
<?php
Auth::user()->id
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
## A Few Examples

### Hello World:

```php
<?php

Route::get('/', function()
{
	return "Hello World!";
});
```

### Passing Data To Views:

```php
<?php

Route::get('user/(:num)', function($id)
{
	$user = DB::table('users')->find($id);

	return View::make('profile')->with('user', $user);
});
```

### Redirecting & Flashing Data To The Session:

```php
<?php

return Redirect::to('profile')->with('message', 'Welcome Back!');
```

## Contributing to Laravel

Contributions are encouraged and welcome; however, please review the Developer
Certificate of Origin in the "license.txt" file included in the repository. All
commits must be signed off using the `-s` switch.

```bash
git commit -s -m "this commit will be signed off automatically!"
```

## License

Laravel is open-sourced software licensed under the MIT License.
