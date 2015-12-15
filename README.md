# fb-forum
*****A truly facebook integrated forum.***** (Now with Google+, after v1.5)

[![GitHub license](https://img.shields.io/badge/license-Apache%202-blue.svg)](https://raw.githubusercontent.com/fbForum/fb-forum/master/LICENSE)

For demo, see one of our user:  https://hksickdone.com
We proudly open sources for you to improved the forum usability and maybe new function!


> What is fb-forum?

This is a php script which run a forum by using simple MariaDB instruction and intergrate facebook's social plug-in.

Thread OP is not required to register nor sign-in to keep anonymous, that's the point of this forum script, this may protect the thread starter and give them more motivation to talk.

However those replies need to login your facebook or Google account. Since we use official embeded plugins so no user data are stored in the scripts. Repiles are default NOT posting to your wall unless you choose to do so.

>Where will be the message , user information and others store?

The members  info and repliers are stored in facebook's servers as it use facebook's social plugin. The script never read and user information. :)

The first post which also called "OP" is stored in local database to generate the topic lists.

***v2.0 is OUT!!! We know it's still long way to improve, but this release really works.***

>What's working?

* All function you expected in (http://m.hkgolden.com)
* BBCode
* SQL injection and XSS proof now working.

***Welcome to contribute your code and please fork me!***

**External libraries and plug-in we used**
* jBBCode for the BBCode parser
* SCEditor for the text editor
* jQueryUI for some UI elements

*****(Note : jQuery is included in this repo but actually we are using Google as CDN since it's a good practice to offload those common libraries, you might like to use M$'s CDN if you perfer, just change it in view.php and newpost.php.)*****

