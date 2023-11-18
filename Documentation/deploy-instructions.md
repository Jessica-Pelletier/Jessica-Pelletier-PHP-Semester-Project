Steps for Deployment of site on AWS server, cpanel
<ul>
<p>Create a database:</p>
<li>Go to PHPmy admin on local computer. Export database.</li>
<li>Go to cpanel->My SQL databases </li>
<li>Create new database, add user and grant permissions.</li>
<li>Go pack to Cpanel home -> phpmyAdmin. Then go into the new database ->import. Find file from database that you just exported a minute ago. </li>
</ul>

<ul>
<p>Move site to Server</p>
<li>Cpanel-> File Manager</li>
<li>Under public_html create new fodler. "dgl123" (if this step is already complete, enter into dgl123 folder and move to next step)</li>
<li>Go to local drive and find project files. Compress the file.</li>
<li>Go back to cpanel file manager in dgl123-> upload. Upload zipped project files.</li>
<li>Unzip files and discard zipped folder.</li>
<li>Go to config and database files in project on cpanel. and adjust the configurations. 
While doing milestone three I had to chnage username to "n0124390_Jpelletier2", localhost to "3306" to support the host where new db is sitting, and prepend "wanderwisem3" data base name to have my student id before it to match database name on cpanel. "n0124390_Wanderwisem3"
</li>
<li>Ensure photopaths are updated if needed.</li>
</ul>

Photo of my site on server:
![Wanderwise](WanderwiseOnimgd.png)






