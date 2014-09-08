 ![](http://root-image.luke.sx/c37a.png) ImageShare
==========

This is the server side code for running my image uploader. Content in this repository has been developed by [Luke Brown](http://luke.sx) for personal use only. Written permission from myself is required for any third-party use of any materials contained herein.




Please Note
-------
- **demo.luke.sx** is where the upload program sends the files. The next directory called **/backend-upload** is actually a 40 character long directory name for securetly.
- The same is true for the file inside that directory, redacted to just **upload.php**.
- **/root-image** is an empty directory which is where the images are finally saved to, this folder requires 777 perms (you must add write permission for that directory) in order for the images to save.
- **/i.luke.sx** is the public directory that a .htaccess file will parse the **.png** image into a **.php** web page for your pleasure. 
- However, this been said the raw image can be accessed in **/root-image** and can that directory is public be default. It is possible to change this directory so no hot-linking apart from on the local machine is available.
