## WordPress Theme Development

First we need to have a Design (Like in Figma Design) to convert into WordPress theme (Classic theme)

## File and Folder Structure

WP theme needs several folder and files to have it's directory. Here is the Template Hierarchy strucuture. 

![Template Hierarchy](assets/images/template-hierarchy.png)

The file and folder structure of WP theme like this;

<pre>
theme-name
|
|---📁assets
|    |
|    |----📁css
|	 |	 |----bootstrap.min.css
|    |   |----main.css
|    |
|    |----📁js
|	 |	 |----bootstrap.min.js
|    |   |----main.js
|
|----📁inc
|
|----📁language
|
|----📁template-parts
|    |
|    |----📁post
|    |   |
|	 |	 |----content-none.php
|    |   |----content.php
|
|----📁templates
|
|----functions.php
|
|----index.php
|
|----header.php
|
|----footer.php
|
|----author.php
|
|----category.php
|
|----page.php
|
|----single.php
|
|----search.php
|
|----404.php
</pre>

## style.css & Index.php

the `style.css` and `index.php` files are very important files for WordPress. By these filea WP can recognize this theme directory as WP theme. In `style.css` file we need to have several lines of important comment. 

```css
/*
Theme Name: Codegnet
Theme URI: https://codegnet.com/
Author: Codegnet
Author URI: https://codegnet.com/
Description: WordPress theme from codegnet.
Tags: blog
Version: 0.1
Requires at least: 6.0
Tested up to: 6.0
Requires PHP: 8.0
License: GNU v3 oe Later.
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: Codegnet
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
```

We also need to have theme **screenshot**, but this is not required to activate and run the theme. 


## index.php

We need to include `header.php` and `footer.php` in `index.php`. 

```php

get_header()

get_footer()
```

## functions.php

The `functions.php` is one of the important file in theme where we declare various important functions and logic. 


----

## Resources 

[WordPress Theme Development Tutorial in Bangla](https://www.youtube.com/playlist?list=PLFsAA7EWSBTIwbqnhws0RHDidE3vne41k)
