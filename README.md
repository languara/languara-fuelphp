Languara Plugin for FuelPHP
========================

<h3>Install</h3>

Add languara plugin information to your composer.json file:

<pre><code>
php composer.phar require languara/fuelphp
</code></pre>

or 

<pre><code>
"require": {
  "languara/fuelphp": "1.0.*@dev"
}
</code></pre>

Use composer to install this package.

<pre><code>
$ composer update
</code></pre>

<h3>Register the pakcage</h3>

Add the package to the autoload array in fuel/app/config/config.php:

<pre><code>
'always_load'  => array(
    'packages'  => array(
      // .....
      'languara'
    )
)
</code></pre>

<h3>Configure the Package</h3>
Optionally if you want to use the GUI pull and push from the GUI on http://languara.com add these 2 routes to your fuel/app/config/routes.php:

<pre><code>
'languara/push' => function(){
	return (new \Languara\Wrapper\LanguaraWrapper())->push();
},
'languara/pull' => function(){
	return (new \Languara\Wrapper\LanguaraWrapper())->pull();
},
</code></pre>

<h3>Usage</h3>

Execute this command to see a list of available commands in your commandline:

<pre><code>
$ php oil r languara
</code></pre>

--------------------

Or you can check the commands and their usage here:

<pre><code>
$ php oil r languara:translate [options]
</code></pre>

to translate the texts you already have in your lang directory. You can also select the type of translation you want to perform, Machine or Human. It's set to machine by default.

<pre><code>
$ php oil r languara:pull
</code></pre>

to download your content from Languara to your app.

<pre><code>
$ php oil r languara:push
</code></pre>

to upload your content from your app to Languara.

<pre><code>
$ php oil r languara:connect
</code></pre>

to connect your plugin with a project on languara.com


<pre><code>
$ php oil r languara:register
</code></pre>

to register a new user on languara.com
