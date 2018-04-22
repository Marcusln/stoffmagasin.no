Draft:

Here's 7000+ lines of code for ya.

- Google Pagespeed score: 96% (https://gtmetrix.com/reports/www.stoffmagasin.no/mbJiHxdM)
- Loads in less than 0.4 seconds: https://tools.pingdom.com/#!/dzAA6p/https://www.stoffmagasin.no/

- Code is messy, to be fixed. I solve this by washing my hands after a coding session. No but really, I was learning by doing, and the deadline was always yesterday.
- Early in the project, I messed up a media query; I forgot a closing }, so new media queries would not work as they should. I didn't figure this out until the very end, that's why there's separate code for mobile/desktop versions, solved with display:hidden for its respective device. For such short code, I would argue it does not matter much for performance.
- I've used a lot of inline CSS. Mostly because it's easier in a try-fail, learning by doing approach, but also because it can be good for performance. However, a lot of the inline CSS is duplicated and should be put in style.css.

Some cool features:
- I started with 500 articles where elements like journalist, photographer, intro, byline etc was not put in variables. A few jQuery script fetches the text inside tags. For example, articles introduction is inside h4 tags. The script removes the old formatting and uses the new. I just got an idea that the script could take the relevant text inside the tag and save it in a Advanced Custom Fields (plugin) field, and that way it will be stored in a variable. To be continued...
- I fixed the featured image layout by creating a PHP script that calculates the aspect ratio for the featured image: if the image has a aspect ratio of x, it will use the most fitting layout template. Because this calculation requires that the full image needs to be downloaded, the script was run one time, and new articles needs to set this layout manually. Reason is performance.
- By using the Wordpress API, I created my own settings panel. This theme needs one variable to be updated, the rest is automatic. The reason for this is it gives more control for the webmaster. The current issue number is updated when all the new articles are uploaded. If this was done automatically, the website would look very empty while the new articles were in the works.
- ...