# yii2-galleria-widget
===
```
https://github.com/aino/galleria
```

### composer.json
---
```json
"require": {
    "xj/yii2-galleria-widget": "~1.0.0"
},
```

### Themes
```php
\xj\galleria\themes\DefaultAssets::register($this);
\xj\galleria\themes\TwelveAssets::register($this);
```

### BasicAssets
```php
\xj\galleria\GalleriaAssets::register($this);
```

### With Html Tag
---
```css
#galleria{ width: 700px; height: 400px; background: #000 }
```
```html
<div id="galleria">
    <img src="<?= Yii::getAlias('@web/images/hoverzoom/1.jpg'); ?>" alt="" />
    <img src="<?= Yii::getAlias('@web/images/hoverzoom/3.jpg'); ?>" alt="" />
    <img src="<?= Yii::getAlias('@web/images/nivoslider/1.jpg'); ?>" alt="" />
</div>
```
```php
\xj\galleria\themes\DefaultAssets::register($this);
xj\galleria\Galleria::widget([
    'selector' => '#galleria',
]);
```

### With Html Data Tag
---
```css
#gallery{ width: 700px; height: 400px; background: #000 }
#source{display:none;}
```
```html
<div id="gallery"></div>
<div id="source">
    <a href="<?= Yii::getAlias('@web/images/hoverzoom/1.jpg'); ?>"><img src="<?= Yii::getAlias('@web/images/hoverzoom/1.jpg'); ?>" alt="" /></a>
    <a href="<?= Yii::getAlias('@web/images/hoverzoom/3.jpg'); ?>"><img src="<?= Yii::getAlias('@web/images/hoverzoom/3.jpg'); ?>" alt="" /></a>
    <a href="<?= Yii::getAlias('@web/images/nivoslider/1.jpg'); ?>"><img src="<?= Yii::getAlias('@web/images/nivoslider/1.jpg'); ?>" alt="" /></a>
</div>
```
```php
\xj\galleria\themes\DefaultAssets::register($this);
xj\galleria\Galleria::widget([
    'selector' => '#gallery',
    'jsOptions' => [
        'dataSource' => '#source',
        'keepSource' => false,
    ]
]);
```

### With Javascript Data
---
```css
#gallery{ width: 700px; height: 400px; background: #000 }
```
```html
<div id="gallery"></div>
```
```php
\xj\galleria\themes\DefaultAssets::register($this);
xj\galleria\Galleria::widget([
    'selector' => '#gallery',
    'jsOptions' => [
        'dataSource' => [
            ['image' => Yii::getAlias('@web/images/hoverzoom/1.jpg')],
            ['image' => Yii::getAlias('@web/images/hoverzoom/3.jpg')],
            ['image' => Yii::getAlias('@web/images/nivoslider/1.jpg')],
        ],
        'keepSource' => false,
    ]
]);
```