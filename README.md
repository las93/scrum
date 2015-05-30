SCRUM APP TO MANAGE YOUR SCRUM
==============================

Scrum App

Contact judicael.paquet@gmail.com pour participer au projet ou avoir plus d'information
Contact judicael.paquet@gmail.com to participate at the project or to have more informations

===================
Français
===================

Voici le Vhost apache Type à mettre en place :

<pre>
&lt;VirtualHost *:8080&gt;
     ServerName localhost
     DocumentRoot E:/scrum/public/Admin/
     &lt;Directory E:/scrum/public/Admin/&gt;
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     &lt;/Directory&gt;
&lt;/VirtualHost&gt;
</pre>

<pre>
&lt;VirtualHost *:80&gt;
     ServerName localhost
     DocumentRoot E:/scrum/public/Front/
     &lt;Directory E:/scrum/public/Front/&gt;
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     &lt;/Directory&gt;
&lt;/VirtualHost&gt;
</pre>

===================
Anglais
===================

There is Vhost apache to write in your apache2.conf (or http.conf) :

<pre>
&lt;VirtualHost *:8080&gt;
     ServerName localhost
     DocumentRoot E:/scrum/public/Admin/
     &lt;Directory E:/scrum/public/Admin/&gt;
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     &lt;/Directory&gt;
&lt;/VirtualHost&gt;
</pre>

<pre>
&lt;VirtualHost *:80&gt;
     ServerName localhost
     DocumentRoot E:/scrum/public/Front/
     &lt;Directory E:/scrum/public/Front/&gt;
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     &lt;/Directory&gt;
&lt;/VirtualHost&gt;
</pre>
