Drop-a-Site
===========

"Drop-a-Site" is a simple Static-Site-Generator for small sites with URL-rewriting.

_______________________

**What do you use it for?**

Sometimes you happen to release a small site, that's too small to use a CMS or a PHP-framework, but you don't want to bother with static HTML-files as well. That's when you use "Drop-s-site".

It has a simple URL-rewriting and all your sites are represented by php-include-files.

_______________________

**When not to use "Drop-a-Site"?**

When you are building a more complex site structure and want to include a news sections, a contact form, etc, you should rather use a CMS. Extending "Drop-a-Site" would be a waste of time. Others already completed the tasks you are confronted with.

______________________

**How to use “Drop-a-Site”?**

_1. Get the files_

Download and unpack the [ZIP-File](https://github.com/herschel666/Drop-a-Site/zipball/master).

Or clone the project by typing the followinf line into your terminal:

	git clone https://github.com/herschel666/Drop-a-Site.git

_2. Edit the config file_

Open the config.php in a text editor and define the URL of your site. After that write the pages of your site with their title in the `$pages`-array. Sub-directories are no problem, regardlessly of their depth.

_3. Enter your content_

Go into the inc-directory. The structure of this directory represents the URI-structure of your site, or vice versa?! o_O The only exception is the components-directory, which is reserved for template-parts like e.g. the footer.

_4. Your site is in a sub-directory?_

If your site is not in the root but in a sub-directory, you have to make two adjustments. First you have to edit the “RewriteBase” in the .htaccess-file:

	RewriteBase /name-of-subdir/

Second you have to edit the config.php, so that the correct request-string is extracted. To achieve this, change the definition of the `$req`-variable from …

	$req = trim($_SERVER['REQUEST_URI'], '/');

to …

	$req = trim(str_replace('/name-of-subdir/', '', $_SERVER['REQUEST_URI']), '/');

Congrats, you're finished!

______________________

**What else?**

I partly rely on [HTML5 Boilerplate](http://html5boilerplate.com/) for this project. Why? Because I like it. But it's not fully integrated. Maybe I'll do this later. Maybe not …

______________________

My site: [www.emanuel-kluge.de](http://www.emanuel-kluge.de/)  
My twitter: [Herschel_R](http://twitter.com/Herschel_R)