Follow:ee
========

Follow:ee is a very simple plugin that implements Twitter's official Follow button into your ExpressionEngine templates. This is my first attempt at a plugin, and was inspired by a lot of encouragement from the #eecms community.

More or less, I'm working on getting better at PHP development, and this is the first step in what I hope will be a long career in development.

Installation
------------

Follow:ee is an ExpressionEngine plugin. To install

- Copy the `followee/pi.followee.php` folder to your `system/expressionengine/third_party` directory

Plugin Usage
------------

Follow:ee creates the official Follow button in your templates. To include, simply add the standard tag to your template.

	{exp:followee username=""}
	
It is important that you specify a username, otherwise everyone will just start following me.

Support
-------

As I mentioned before, I'm just learning how to do this type of development. This probably won't require much 'support' but if you want to leave comments on here, go for it.

Changelog
---------

**August 29, 2012** - First push to GitHub.

### Roadmap ###

- Add support for other default options like langauge, swapping out 'Follow' word, and adding follow count