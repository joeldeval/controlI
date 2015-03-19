# Yii Body Classes #

This behavior makes adding CSS body classes to your layouts quite simple

## How to use ##

Unpack release in the `protected/extensions/yii-body-classes` folder.

Then add the behavior to a controller (or even better to your `components/Controller.php`):

```
public function behaviors() {
	return array(
        'BodyClassesBehavior' => array(
            'class' => 'ext.yii-body-classes.BodyClassesBehavior'
        ),
        ...
    );
}
```

In your `layouts/main.php` view, add to your body tag:

```
</head>
...
<body class="<?php echo $this->getBodyClasses(); ?>">
```

And you're done!

The idea of this code I get from this repo: https://github.com/acorncom/BodyClassBehavior