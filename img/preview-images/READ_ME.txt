Open Graph Data
---------------


HTML
----
Our HR Tech World Congress pages contain the following Open Graph code in the header:

<!-- Open Graph data -->
<meta property="og:site_name" content="HR Tech World Congress"/>
<meta property="og:title" content="HR Tech World Congress"/>
<meta property="og:description" content="The fastest growing HR event in the world! Paris October 24 - 25"/>
<meta property="og:url" content="http://hrtechcongress.com/index">
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://hrtechcongress.com/img/preview-images/preview-image-1.jpg" />
<meta property="og:image" content="http://hrtechcongress.com/img/preview-images/preview-image-2.jpg" />
<meta property="og:image" content="http://hrtechcongress.com/img/preview-images/preview-image-3.jpg" />

Change the "og:title" to the title of the specific page.
Change the "og:url" to the URL of the specific page. For example: http://hrtechcongress.com/speakers, http://hrtechcongress.com/tickets. 
---------------------


Images and refetching
---------------------
This folder (/img/preview-images) contains 3 preview images for Facebook and other social site sharing.

To change the preview images, copy the new pictures to this folder by rename your images to one of these:
- preview-image-1.jpg
- preview-image-2.jpg
- preview-image-3.jpg

The image size must be 220x220px.

After you copied them to our server, they will not become visible yet.. because Facebook still caches the old ones.
To purge the cache and set the new preview images live, visit the Facebook Object Debugger (logging in to Facebook is required):
https://developers.facebook.com/tools/debug/og/object/

Paste the URL of the page to the Input URL text field: 
http://hrtechcongress.com/tickets
http://hrtechcongress.com/speakers
http://hrtechcongress.com/sponsors
etc.

Click on the "Fetch new scrape information" button.
If you see the new images on this preview page, the fetching was correct and the new images will be used if you share the page.

IMPORTANT!
Do the Fetching process WITH EVERY PAGE of the HR Tech World Congress site.
http://hrtechcongress.com/tickets
http://hrtechcongress.com/speakers
http://hrtechcongress.com/sponsors
etc.
----------------------------------


Sources:
--------
http://cypressnorth.com/social-network-media-marketing/how-to-customize-preview-thumbnail-images-for-pages-on-your-website/
http://stackoverflow.com/questions/1138460/how-does-facebook-sharer-select-images
https://developers.facebook.com/tools/debug/og/object/


------------
Benedek Nagy
Junior Web Developer
HRN Europe