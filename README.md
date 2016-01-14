# placeimg

<h2>What</h2>
Place image holder web application.

<h2>Features</h2>
<ol>
<li>Generate random image based on given width and height.</li>
</ol>

<h2>How</h2>
<ul>
<li><em>HTTP GET</em> on http://[a domain name]/ will display help page.</li>
<li><em>HTTP GET</em> on http://[a domain name/{width}x{height} will retrieve width and height, validates it and then output JPEG image.</li>
<li><em>HTTP GET</em> on http://[a domain name/{width}x{height}/jpg will retrieve width and height, validates it and then output JPEG image.</li>
<li><em>HTTP GET</em> on http://[a domain name/{width}x{height}/png will retrieve width and height, validates it and then output PNG image.</li>
</ul>
<h2>Info</h2>
Application is built on top of Laravel framework 5.1 and Intervention Image (<a href="http://image.intervention.io">http://image.intervention.io</a>

That's it.


Zamrony P. Juhara
zamronypj@yahoo.com
<a href="https://twitter.com/zpjuhara">@zpjuhara</a>
