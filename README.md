# Perfecting The `<head>` of a WebPage
A standardized `<head>` section tested and effective for more than 5m monthly organic visitors.

## HEAD

Code living in the `<head>` section of a page will not be seen by users while on said page, but it's still really fucking important to include all of the tags mentioned below. There are a few important pieces of info in the head of your pages that is used by Google, Facebook, Twitter and other social networks.

When a bot (like Googlebot) is crawling your site it's the first thing it "sees" on your page so it's pretty fucking crucial.

Below you will find a short description of what each piece of your head section does. In plain fucking terms, a god damn toddler could understand. If you don't understand any of it, or would like more info, try searching the tag in Google.

If you think any of these tags are irrelevant, email me at andy@htmlfriendly.com and let's talk about this shit, motherfucker.

Ready? Let's learn how to give your pages some mindblowing `<head>`.
--------

## The Basic Tags

`<meta charset="utf-8">`

UTF-8 declares the character encoding as Unicode.

`<meta http-equiv="x-ua-compatible" content="ie=edge">`

Required to support IE 9 or IE 8

`<meta name="viewport" content="width=device-width, initial-scale=1">`

The viewport tag ensures the content on your site scales appropriately to the browser dimensions.

`<title>The Perfect SEO Head Document</title>`

Title tags are used by Google (and all search engines) to display the title of the page. It's recommended to keep all titles between 50-60 characters. If your title is longer than 60 characters (568 pixels) search engines will truncate your title. 

If the title of your page is "This Is A Bad Example Of A Title That Is Way Too Long For Google And Will Get Cut Off", Google will truncate the title and display "This Is A Bad Example Of A Title That Is Way Too Long For Go...".

Your title should be succinct, conversational in tone, and match what the user would expect to see on the page.

`<meta name="description" content="Learn how to create a head section for your website that Google loves.">`

The description tag is a brief summary that you would like Google to display under your title. It's important to know that Google doesn't _always_ display your description. 

Your description should be less than 160 characters (940 pixels) or just like your `<title>` it will be truncated. 

While your description is not something Google looks at to evaluate the content on your page, it's still **very** important for SEO. It influences your clickthrough rate (CTR). 

What's a clickthrough rate you ask? It's pretty fucking simple dude.

Let's say in one day your page pops up in Google 100 times, but only gets 10 clicks, your CTR would be 10%. This means your title and description are captivating enough to get 1 out of 10 people to click. 

Like I mentioned it still _influences_ SEO. The more people that click a search result in Google, the more Google thinks it's a good match for whatever the fuck someone is looking for. 

`<meta name="robots" content="index,follow">`

The Robots tag tells bots (like Googlebot) whether or not you would like a page indexed and the links followed. Think of it like having your book at a library, but you tell the librarian, "hey keep this shit in your desk, don't put it on a shelf (index it)".

**Robot Components**:

_index or noindex_ - Let's Google know that you would like the page indexed, or not indexed. A good example of a page you may not want indexed would be a Terms of Use page (who fucking reads those).

_follow or nofollow_ - Do you want your links on the page followed or not dude? It's generally good practice to not use _nofollow_ unless you have a really good excuse.

In general, the robots tag is only useful in cases you don't want a page indexed. 

If you want your page to act normal (get indexed and have the links followed) you can leave this one out.

`<link rel="canonical" href="https://htmlfriendly.com">`

The canonical tag let's Google know what your preferred URL is for your page. Let's say you're selling rolled tacos online and people have 3 options. i.e. There are four versions of the page (including the base page /rolled-tacos).

- saritas.com/rolled-tacos (base page for rolled tacos)
- saritas.com/rolled-tacos?cheese=cheddar
- saritas.com/rolled-tacos?cheese=fundido
- saritas.com/rolled-tacos?cheese=fresco

So I'm ordering some fucking perfectly crispy rolled tacos and I'm on the rolled tacos page (saritas.com/rolled-tacos) and I can't decide what cheese I want. If I check the "fresco" cheese option the URL changes to (/rolled-tacos?cheese=fresco), although I check the "fresco" box and the URL changes, the content does not change.

This means there are (4) URLs on saritas.com that have _the exact same content_ on them. Without a canonical tag Google's sitting there thinking, "why the fuck do these idiots (who make really good rolled tacos) have 4 fucking versions of the page, this seems like some spammy, duplicate content, bullshit dude". 

Here's where a canonical tag can save the day.

If you just set that fucking thing to `<link rel="canonical" href="https://saritas.com/rolled-tacos">` Google now knows that you only have one real version of the page, and you avoid a duplicate content issue (Google hates that shit).

## OG Tags (Open Graph Protocol)

Want your site to kick ass when users share it on Facebook? Then pay close attention motherfucker.

Open Graph Protocol simply let's sites like Facebook know what to display when someone shares the page. Don't overthink it, while they do more than that, just remember these are really fucking important to Facebook. 

Any idiot can find out if they're using these the right way by going to https://developers.facebook.com/tools/debug/ and plugging in a URL. If you have issues, this tool is going to let you know about them.

`<meta property="og:site_name" content="Saritas Taco Shop">`

Every company has a name, and that's what you put in this little fucker. If I'm Saritas Taco Shop, I'm going to put that shit right here. It **is not the name of your webpage, it's the name of your company/site as a whole**

`<meta property="og:title" content="The Best Fucking Rolled Tacos You've Ever Had">`

The OG Title is what get's displayed when someone shares one of your pages on Facebook. You're probably asking yourself, "why the fuck should this be different?". Think about this, if I'm optimizing a page for the search query "Rolled Tacos" I'd make my regular title tag `<title>Rolled Tacos</title>`, but who the fuck is going to click some boring shit like that.

Here's where the OG Title tags can help you dominate on Facebook.

Set that motherfucker to something like "The Best Fucking Rolled Tacos You've Ever Had" and get more likes, shares and people ultimately clicking the shit you share on Facebook.

`<meta property="og:description" content="">`

The OG Description tag is similar to the OG Title tag, if you want to have a more captivating title when your page is shared on Facebook. Write some catchy shit and put it in the tag.

`<meta property="og:type" content="article">`

The OG Type tag let's you specify what type of content the page contains. There are a few options here, but the two most common are "article" and "website". 

Let's say you own Saritas, and it has a blog attached to it. On blog pages you would set your OG Type to "article" (because it's a fucking article), every other page should have an OG Type of "website". 

`<meta property="og:url" content="https://saritas.com/rolled-tacos">`

The OG URL is the little URL that gets displayed when your page gets shared on Facebook. It's best practice to have your OG URL match the actual URL of the page, AND match the canonical URL. 

It's IMPORTANT that this little fucker is an absolute URL (i.e. https://saritas.com/rolled-tacos NOT /rolled-tacos) or else that shit isn't going to please the Facebook gods.

`<meta property="og:image" content="https://saritas.com/burritos.jpg">`

Probably the most important OG tag is the OG Image tag. Set this to the image you want Facebook to display when a user shares your post. If you don't declare an OG Image, Facebook is going to sift through your page and choose any random fucking image. This could include your logo which is probably going to look like shit when stretched to 750 pixels.

**The image you choose should be 1200px x 630px**

### Special Facebook Tags

`<meta property="fb:page_id" content="">`
    
 `<meta property="fb:app_id" content="">`
 
 ## Twitter Tags
 
 `<meta name="twitter:site" content="@">`
 
 `<meta property="twitter:account_id" content="">`
 
 `<meta property="twitter:title" content="">`
 
 `<meta property="twitter:description" content="">`
 
`<meta property="twitter:card" content="summary_large_image">`

`<meta property="twitter:image:src" content="ABSOLUTE URL">`

`<meta property="twitter:creator" content="@">`
