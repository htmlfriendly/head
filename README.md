# seo
Standardized SEO for some real f*cking SEO

## HEAD

Code living in the `<head>` section of a page will not be seen by users while on said page, but it's still really fucking important to include all of the tags mentioned below. There are a few important pieces of info in the head of your pages that is used by Google, Facebook, Twitter and other social networks.

When a bot (like Googlebot) is crawling your site it's the first thing it "sees" on your page so it's pretty fucking crucial.

Below you will find a short description of what each piece of your head section does. In plain fucking terms, a god damn toddler could understand. If you don't understand any of it, or would like more info, try searching the tag in Google.

If you think any of these tags are irrelevant, email me at andy@htmlfriendly.com and let's talk about this shit, motherfucker.

Ready? Let's learn how to give your pages some mindblowing `<head>`.
--------


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

_follow or nofollow_ - Do you want your links on the page followed or not dude? 
