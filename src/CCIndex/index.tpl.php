<h2>Index Controller</h2>
<p>Welcome to Mad index controller.</p>

<h2>Download</h2>
<p>You can download Mad from github.</p>
<blockquote>
<code>git clone git://github.com/madnezdesign/comingsoon.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/madnezdesign/comingsoon.git'>https://github.com/madnezdesign/comingsoon.git</a></p>

<h2>Installation</h2>
<p>First you have to create the site/data-directory and make it writable. This is the place where Mad needs to be able to write and create files.</p>
<blockquote>
<code>cd mad; mkdir site/data<br />
chmod 777 site/data</code>
</blockquote>

<p>Second, Mad has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote> 