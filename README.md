humhub-codeit
=============

A module for administrators to edit HumHub themes online.

Note: The module is a work in progress. At the moment You can already use it, its working, but we`ve not integrated all planned features right now. There is still the syntax highliting and line numbering to do. Also, the style and the responsive feature has to be improved.

You`re welcome to help us solve the issues and to make our module pervect ;)

** The Module is for HumHub Versions 0.20+ **
<<<<<<< HEAD
=======

How to install:
---------------

1. unzip the HumHub-Codeit.zip to a folder on Your pc.

2. upload the folder "codeit" with Your FTP client into: your_humhub_installation/protected/modules/

3. upload the folder "ide" with Your FTP client into: your_humhub_installation/themes/

4. visit Your HumHub admin area modules section and look for "codeit" module and activate it. 
   If You cant see it then press F5 on Your keyboard to reload the page and try again to find and activate it.

5. Now You can see a "codeit" link in Your navigation.

6. visit the link and login with: 
   login name= admin
   login password= pass

7. You`re done - have fun with using Codeit Module :)



How to change login name and password:
--------------------------------------

1. open the file Login.php with Your Code Editor (Notepad++, Sublime etc.) in:  
   your_humhub_installation/themes/ide/

2. search for code line 28 and edit the login data. 
   Change **admin** to the name You want 
   change **pass** to the password You want

3. You`re done ;)

4. You can also setup more Codeit users. 
   Read the note at Login.php on **line 28** and follow the instructions please.



Module Info:
------------

1. The maximum upload limit is controlled by your hosting / server and not by our module.

2. The module has support for the following file extensions:
   
      css
      html
      php
      js
      less
      txt
      sql
      xml

   All other files are only called "file"

   Note: Yes, You can integrate more file extensions :)

         You have to edit the ide/open.php 
         Start at line 163 and look how its done please.
         Also edit ide/index.php
         Start at line 160 and look how its done please.

3. minimal php version is 5.3

4. yes the module is responsive (verry basic) but we have not integrated extra styles for every single mobile or desktop version. We will update the CSS in the near future.



Other Info:
-----------

If you have problems with the module please use the HumHub Community Forums (user help user). 
We do not have time to provide professional support. Of course we will try to help you, but we can not guarantee that. 
**The module is offered as it is.** Possibly minor updates will follow, and we try to fix bugs. 
We will not create a lot of new features, the module is kept deliberately simple. 

**We give no guarantees. Use at your own risk.**


Copyright 2016 by Andreas Holzer / web-crew.org  All rights reserved.


##Other Contributors

A huge **THANK YOU** to:
>>>>>>> origin/master

How to install:
---------------

<<<<<<< HEAD
1. unzip the HumHub-Codeit.zip to a folder on Your pc.

2. upload the folder "codeit" with Your FTP client into: your_humhub_installation/protected/modules/

3. upload the folder "ide" with Your FTP client into: your_humhub_installation/themes/

4. visit Your HumHub admin area modules section and look for "codeit" module and activate it. 
   If You cant see it then press F5 on Your keyboard to reload the page and try again to find and activate it.

5. Now You can see a "codeit" link in Your navigation.

6. visit the link and login with: 
   login name= admin
   login password= pass

7. You`re done - have fun with using Codeit Module :)



How to change login name and password:
--------------------------------------

1. open the file Login.php with Your Code Editor (Notepad++, Sublime etc.) in:  
   your_humhub_installation/themes/ide/

2. search for code line 28 and edit the login data. 
   Change **admin** to the name You want 
   change **pass** to the password You want

3. You`re done ;)

4. You can also setup more Codeit users. 
   Read the note at Login.php on **line 28** and follow the instructions please.



Module Info:
------------

1. The maximum upload limit is controlled by your hosting / server and not by our module.

2. The module has support for the following file extensions:
   
      css
      html
      php
      js
      less
      txt
      sql
      xml

   All other files are only called "file"

   Note: Yes, You can integrate more file extensions :)

         You have to edit the ide/open.php 
         Start at line 163 and look how its done please.
         Also edit ide/index.php
         Start at line 160 and look how its done please.

3. minimal php version is 5.3

4. yes the module is responsive (verry basic) but we have not integrated extra styles for every single mobile or desktop version. We will update the CSS in the near future.



Other Info:
-----------

If you have problems with the module please use the HumHub Community Forums (user help user). 
We do not have time to provide professional support. Of course we will try to help you, but we can not guarantee that. 
**The module is offered as it is.** Possibly minor updates will follow, and we try to fix bugs. 
We will not create a lot of new features, the module is kept deliberately simple. 

**We give no guarantees. Use at your own risk.**


Copyright 2016 by Andreas Holzer / web-crew.org  All rights reserved.


##Other Contributors

A huge **THANK YOU** to:

@petersmithcu Peter Smith (Thank You verrry much)
=======
>>>>>>> origin/master
