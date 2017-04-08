# placeimg

What
----

Image place holder web application.

Features
--------

Generate random image based on given width and height.

How
---

<ul>
<li><em>HTTP GET</em> on http://[a domain name]/ will display help page.</li>
<li><em>HTTP GET</em> on http://[a domain name]/{width}x{height} will retrieve width and height, validates it and then output JPEG image.</li>
<li><em>HTTP GET</em> on http://[a domain name]/{width}x{height}/jpg will retrieve width and height, validates it and then output JPEG image.</li>
<li><em>HTTP GET</em> on http://[a domain name]/{width}x{height}/png will retrieve width and height, validates it and then output PNG image.</li>
</ul>

For example:
<em>http://place.img/200x300</em> will output JPEG image with 200 x 300 resolution.

Installation
------------

<ul>
 <li>Clone this repository and then <code>cd placeimg/placeimg</code></li>
 <li>Make sure you have <a href="https://getcomposer.org">Composer</a> installed somewhere.</li>
 <li>Run <code>composer install</code> to install all software packages dependencies.</li>
 <li>Create a virtual host on your web server then point <em>public</em> directory as Document Root.</li>
 <li>From shell run <code>composer dumpautoload</code> to generate autoload file (optional).</li>
</ul>

Info
----

Application is built on top of Laravel framework 5.1 and Intervention Image (<a href="http://image.intervention.io">http://image.intervention.io</a>)

That's it. If you add new cool features, please feel free to submit PR.


Zamrony P. Juhara
zamronypj@yahoo.com
<a href="https://twitter.com/zpjuhara">@zpjuhara</a>
