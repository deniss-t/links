<h1>Short link generator</h1>
<p>Simple url shortener, you don't need database, only server required</p>

<h2>Instalation</h2>
<p>1. Download files</p>
<p>2. For php developer server only need to start server in root directory</p>
<p>3. For Apache make .htacess file with this text:</p>
<p>RewriteEngine On</p>
<p>RewriteCond %{REQUEST_FILENAME} !-f</p>
<p>RewriteCond %{REQUEST_FILENAME} !-d</p>
<p>RewriteRule ^(.*)$ index.php?q=$1 [QSA,L]</p>
