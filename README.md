# Elkarbackup

## What is it?
Here is a FreeBSD fork of ElkarBackup, free open-source backup solution based on RSync/RSnapshot

<img src="http://elkarbackup.org/images/screenshots/eb-jobs.png" />

Credits https://groups.google.com/d/msg/elkarbackup-users/M2sozDgFboM/gAnqumq_jbAJ

Tuning:

Please install this ports: bash, rsync, sudo, rsnapshot, apache24 ( or nginx), mod_php5, php5_extensions, php5_fileinfo and mysql.

1. 1. First of all you may want to install elkarbackup on a server with linux, it will bu used as a model for installation
 
2. In the linux host check all the folders and files installed by elkarbackup package and copy exactly in the same locations within the FreeBSD.
 
3. Create the elkarbackup user with the same user properties of linux server, but use bash as user shell ( important to run the cron job )
 
4. After creating the elkarbackup database in mysql (elkarbackup database, elkarbackup user and password elkarbackup) you will need to perform this part of the scripts:

	php /usr/share/elkarbackup/app/console doctrine:migrations:migrate --no-interaction

	php /usr/share/elkarbackup/app/console elkarbackup:create_admin

	php /usr/share/elkarbackup/app/console cache:clear

	php /usr/share/elkarbackup/app/console assetic:dump

	rm -rf /var/lib/elkarbackup/sessions/*

5. Install Nginx as usual with pkg or ports. You may use nginx.conf file from this repository
   https://github.com/openbsod/elkarbackup/blob/master/nginx.conf

6. Or use Apache with conf placed at /usr/local/etc/apache24/Includes/elkarbackup.conf


## Develop

Elkarbackup is free open source software. Download the source code, make your changes and [create your own Debian package](https://github.com/elkarbackup/elkarbackup/wiki/BuildPackage)

