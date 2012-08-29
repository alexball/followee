Follow:ee
========

Follow:ee is a very simple plugin that implements Twitter's official [Follow button](https://dev.twitter.com/docs/follow-button) into your ExpressionEngine templates. This is my first attempt at a plugin, and was inspired by a lot of encouragement from the #eecms community, including [Mike Hughes](http://twitter.com/cityzenllc).

More or less, I'm working on getting better at PHP development, and this is the first step in what I hope will be a long career in development.

** NOTE ** - In order to help me learn the process, I referenced [FocusLabLLC's](http://focuslabllc.com/) [Tweet_button plugin](https://github.com/focuslabllc/tweet_button.ee_addon). The layout of the code is strikingly similar. In no way am I claiming originality in the functionality of the code, simply trying to learn the best practices.

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