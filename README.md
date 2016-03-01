# NOTICED GULP

<h2>INSTALLATION</h2>
<h3>First time only</h3>
<p>Make sure you have nodeJS installed.<br> 
http://nodejs.org/</p>
<p>After you have installed nodeJS, you can go and install gulp globally with following command:<br>
<code>(sudo) npm install gulp -g</code></p>
<p>Also install Bower globally:<br>
<code>(sudo) npm install bower -g</code></p>
<h3>Normal installation</h3>
<p>Download this repository and extract the contents into your theme folder.</p>
<p><strong>IMPORTANT: </strong>Move the contents of the extracted folder (typically 'noticed-gulp-master') into the parent folder (the root of your theme).</p>
<p>Now, open your terminal and go to your used theme folder and run following command to install all necessary node modules referenced in package.json file:<br>
<code>(sudo) npm install</code></p>
<p>Also get the bower components for susy(grid) and breakpoint-sass from the bower.json file.<br>
<code>(sudo) bower install</code></p>
<p>All your sass files will be compiled in the assets/css folder, so don't forget to add this to your theme settings.</p>
<h2>USING GULP</h2>
<p>Tell Gulp to watch for changes<br>
<code>gulp watch</code></p>
<p>Keep a few things in mind</p>
<ul>
<li><p>To make sure everything is compiled into a single CSS file, prefix all your .scss files with an underscore, like this:<br><code>_filename.scss</code></p></li>
<li><p>Split up your code!<br>The 'partials' subdirectories are there to give you an idea, but feel free to make more.<p></li>
<li><p>Keep your Sass variables together and easily accessible by putting them in the 'variables' directory.<p></li>
<li><p>Work <em>Mobile First</em>:<br>Susy (http://susydocs.oddbird.net/) and Breakpoint (http://breakpoint-sass.com/) are there to help you in this regard.</p></li>
<li><p>You might require additional browser plugins for Livereload to work.<br>Chrome has a wonderful extension aptly named <em>LiveReload</em>.</p></li>
<li><p>The created 'node_modules' and 'bower_components' folders are pretty big, but are only there to assist development.<br>There is no need to upload these folders when going live.</p></li>
