# fb-forum
*****A truly facebook integrated forum.***** (Now with Google+, after v1.5)

[![GitHub license](https://img.shields.io/badge/license-Apache%202-blue.svg)](https://raw.githubusercontent.com/fbForum/fb-forum/master/LICENSE)

For demo, see one of our user:  https://hksickdone.com
We proudly open sources for you to improved the forum usability and maybe new function!


> What is fb-forum?

This is a php script which run a forum by using simple MariaDB instruction and intergrate facebook's social plug-in.

Thread OP is not required to register nor sign-in to keep anonymous, that's the point of this forum script, this may protect the thread starter and give them more motivation to talk.

However those replies need to login your facebook or Google account. Unlike those comments system you see elsewhere, we use official embeded plugins so no user-data , even your reply medssage are stored in the scripts. Repiles are default NOT posting to your wall unless you choose to do so.


> What's different between fb-forum and m.hkgolden.com or hkgalden.com?

* Posting are signin-free, register-free. NO ISP email, no CAPTCHA needed. We use different appoach to protect robotic form fillers, check out the codes and see how, since it's opensource :)

* We use facebook/Google+ as replies, we store NO user data. Keeping anonymous is the core-value. Also encourage whispering.

* We are the only open-source forum compare to hkgalden and hkgolden. (Except Google/Facebook plugin) This is to support recreation(二次創作).
* You can contribute to the code to improve the forum, hkgolden admin did that?



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

