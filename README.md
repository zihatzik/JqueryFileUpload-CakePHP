# JqueryFileUpload - CakePHP v 0.1
---
Using the jQueryFileUpload from blueimp in CakePHP 2.1.x

You can find the documentation [here][fileupload]
[fileupload]: https://github.com/blueimp/jQuery-File-Upload


#### [Demo][]
[Demo]: http://blueimp.github.com/jQuery-File-Upload/


## Quick start

- Create a table named `users` in your database with the following structure:


<pre>CREATE TABLE users (
id int(11) NOT NULL AUTO_INCREMENT,
username varchar(255) NOT NULL,
password varchar(255) NOT NULL,
name varchar(255) NOT NULL,
role varchar(20) NOT NULL,
created datetime NOT NULL,
modified datetime NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
</pre>


- Create a table named `uploads` in your database with the following structure:

<pre>CREATE TABLE uploads (
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
size int(11) NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
</pre>


- Open the file `app/Config/database.php` and change the database information
- Change the permissions of the folder `app/tmp` to 777 ( and all the folders inside of it )


