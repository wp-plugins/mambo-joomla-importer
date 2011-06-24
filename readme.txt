=== Plugin Name ===
Contributors: misterpah
Donate link: http://misterpah.com/scripts/import-mambo-into-wordpress/
Tags: import, mambo, joomla
Requires at least: 3.0.0
Tested up to: 3.0.1
Stable tag: 1.0

Import Joomla and Mambo articles and insert them into wordpress page, regardless of the location of the server.

== Description ==

Before wordpress become what it is today, many of us use mambo and joomla. Then after mambo developer stop the development, we we forced to migrate to joomla and other wordpress.
But some of us , we make so many changes to the site, its worth thousands of article; which are a burden to migrate them.


This plugin will do 2 things. By order :

* Retrieve data from the mambo / joomla database by using pure php. this data will be represented into strings which can be saved as a text-document.
* Convert the data retrieved from mambo / joomla into wordpress pages


Limitation :
* no support for media migration. no  image / document / pdf / etc  will be transfered into the wordpress site. 


in case you want to visit this plugin page on my site, click [here](http://misterpah.com/scripts/import-mambo-into-wordpress/ "import mambo joomla into wordpress")

== Installation ==

This section describes how to install the plugin and get it working. 

for joomla, just change the mambo file into joomla file.

Setup :
1. extract this zip file
1. upload showArticle-mambo.php into the root of your mambo folder. make sure that configuration.php is available on the same folder.
1. upload mamboImporter.php into your wordpress plugin folder ( wordpress/wp-content/plugin/<here>)
1. activate the plugin (Mambo Importer)


usage : 
1. Run the showArticle-mambo.php (example : www.example.com/showArticle-mambo.php )
1. You will get a page with many letters. COPY ALL OF THEM WITHOUT MISSING ANYTHING. (CTRL+A & CTRL+C)
1. Go to your wordpress , Scroll to the bottom and find mambo importer menu. click it
1. Paste what you copy from showArticle-mambo.php into the yellow box. click Import Data
1. Disable the plugin, and enjoy!


== Frequently Asked Questions ==

= When the image support will be available =

I can't be sure about that. Maybe in a few hours, maybe in a few years.

= Can we take your plugin, change it's name and make people pay for it ? =

Sure! it's GPL anyway. But make sure your client don't come to me. I dont charge anything.

= I've taken my client's money. now im stuck with this client for technical support. help me . Pretty please.  =

nope. =p



== Changelog ==

= 1.0 =
* support for joomla
* support for mambo

