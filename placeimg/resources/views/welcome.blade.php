<!DOCTYPE html>
<html>
    <head>
        <title>Image place holder</title>
    </head>
    <body>
        <h1>Image place holder</h1>
        <p>Untuk menggunakan layanan ini, sertakan kode berikut dalam file HTML:</p>
        <p><code>&lt;img src=&quot;http://place.img/[width]x[height]/[format]&quot; &gt;</code> di mana <em>[width]</em>,  <em>[height]</em> dan <em>[format]</em>, masing-masing adalah nilai integer panjang, lebar dan format gambar yang diinginkan. Nilai <em>[format]</em> yang diizinkan yakni <em>jpg</em> atau <em>png</em>. Jika <em>[format]</em> tidak ditentukan, nilai defaultnya adalah <em>jpg</em></p>
        <p><code>&lt;img src=&quot;http://place.img/320x240&quot; &gt;</code></p>
        <img src="{{ url('320x240') }}" >
        <p><code>&lt;img src=&quot;http://place.img/200x200/png&quot; &gt;</code></p>
        <img src="{{ url('200x200/png') }}" >
    </body>
</html>
