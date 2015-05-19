Languara Plugin for FuelPHP
========================

<h3>Install</h3>

Add languara plugin information to your composer.json file:

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
    //
      'languara'
    )
)
</pre></code>

<h3>Configure the Package</h3>

.....

<h3>Usage</h3>

Execute this command to see a list of available commands in your commandline:

<pre><code>
$ php oil r languara
</code></pre>

--------------------

Or you can check the commands and their usage here:

<pre><code>
$ php oil r languara:translate
</code></pre>

to translate the texts you already have in your lang directory.

<pre><code>
$ php oil r languara:pull
</code></pre>

to download your content from Languara to your app.

<pre><code>
$ php oil r languara:push
</code></pre>

to upload your content from your app to Languara.


<pre><code>
$ php oil r languara:register
</code></pre>

to register a new user on languara.com
