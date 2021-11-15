# ti-theme-helloworld

This repository is practice of tastyigniter theme.

https://github.com/tastyigniter/TastyIgniter

# How to install this theme

Copy this into your theme folder as /theme/helloworld.

# How to create this theme

https://tastyigniter.com/docs/customize/themes

## 1. Create theme.json

```json
{
  "code": "helloworld",
  ...
}
```

code の設定値は theme のディレクトリ名と揃える必要があります。

## 2. Create Pages

### Get Data From DB

データ取得には Extentions の component を作成し、code 名で呼び出す必要があります。

- Extention 側

```php : Extension.php
...
public function registerComponents()
    {
        return [
            'Igniter\Demo\Components\Block' => [
                'code' => 'block',
                'name' => 'lang:igniter.demo::default.text_component_title',
                'description' => 'lang:igniter.demo::default.text_component_desc',
            ],
        ];
    }
...
```

- Theme 側

```php : home.blade.php
---
...
'[block]':
    code: block
...
---
...
@component('block');
```

https://tastyigniter.com/docs/customize/components
