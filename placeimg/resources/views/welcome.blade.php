<!DOCTYPE html>
<html>
    <head>
        <title>Image place holder</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
	   <div class="container">
	    <div class="jumbotron">
         <h1>Image place holder</h1>
		</div>
		<div class="row">
		  <div class="col-sm-12">
              <p>To use this service, include following code inside a HTML document:</p>
              <p><code>&lt;img src=&quot;http://place.img/[width]x[height]/[format]&quot; &gt;</code> where <em>[width]</em>,  <em>[height]</em> and <em>[format]</em>, are width, height and format of image requested. Allowed value for <em>[format]</em> are <em>jpg</em> and <em>png</em>. If <em>[format]</em> is not defined, default value is <em>jpg</em></p>
              <p><code>&lt;img src=&quot;http://place.img/320x240&quot; &gt;</code></p>
              <img src="{{ url('320x240') }}" >
              <p><code>&lt;img src=&quot;http://place.img/200x200/png&quot; &gt;</code></p>
              <img src="{{ url('200x200/png') }}" >
		   </div>
		</div> 
	   </div>	
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>			
    </body>
</html>
