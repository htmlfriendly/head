# Standardized `<head>`

A standardized `<head>` section tested and effective for sites with **more than 5m monthly organic visitors**. These examples integrate a "base level" [Schema Structured Data](https://developers.google.com/search/docs/guides/intro-structured-data) in the form of [JSON-LD](https://json-ld.org/) (Google's preferred flavor).

## 3 Types of `<head>`

There are (3) major types of `<head>` sections for use with:

| Type                 | Use           |
| ---------------------|---------------|
| [**WebSite**](https://github.com/htmlfriendly/head/blob/master/website.php) | Home Page Only   |
| [**WebPage**](https://github.com/htmlfriendly/head/blob/master/webpage.php) | About Us, Contact, FAQs |
| [**Article**](https://github.com/htmlfriendly/head/blob/master/article.php) | Blog, News, Articles |

### Structure

```
head
├── variables
│	├── global.php
│	├── website.php
│	├── webpage.php
│	└── article.php
├── json-ld
│	├── website.php
│	├── webpage.php
│	└── article.php
├── website.php
├── webpage.php
└── article.php
```

#### Variables

##### **`global.php`** - Used multiple times throughout all three page types (`website`, `webpage` and `article`). These will get used in `<link>` tags, `<meta>` tags and in your `JSON-LD`.

Your Global Variables will be used across the site:

- `$siteName`: Top level name of your website/oranization
- `$logo`: Main logo for your site
- `$favicon`: 32x32px icon you'll see in the browser tab
- `$googlePlus`: The URL for your Google+ page
- `$facebookAppId`: Find your Facebook App ID in your Facebook admin
- `$facebookHandle`: The URI string following facebook.com for your organization/site (i.e. https://facebook.com/`company-url`)
- `$twitterHandle`: Find this in your Twitter URL (i.e. https://twitter.com/`htmlfriendly`
- `$phone`: You main contact phone number
- `$email`: Your main email address (should include match your website domain name)

It's **important to keep these in one place** _for easy access in the future_.

-----------------

#### **`website.php`** - For use on you home page only (i.e. www.example.com)

- `$type`: `WebSite`
- `$title`: 60-70 character (or 568 pixel) title for your website
- `$description`: 156 character (or 940 pixel) description of your website
- `$robots`: For most cases this should be `index,follow`
- `$url`: Absolute URL for your website
- `$author`: For `WebSite` this will be the name of your site
- `$socialImage`: The "featured image" used in Facebook and Twitter when someone shares your page
- `$socialTitle`: The title seen by users on Facebook and Twitter (can be different than your regular `title`)
- `$socialDescription`: The description seen by users on Facebook and Twitter

------------------

#### **`webpage.php`** - Used on non-article pages (i.e. About, Contact, FAQs)

- `$type`: 'WebPage'
- `$title`: 60-70 character (or 568 pixel) title specific to your `WebPage`
- `$description`: 156 character (or 940 pixel) description specific to you `WebPage`
- `$robots`: For most cases this should be `index,follow`
- `$url`: Absolute URL for your `WebPage`
- `$author`: For `WebPage` this will be the name of your site
- `$socialImage`: The "featured image" used in Facebook and Twitter when someone shares your page
- `$socialTitle`: The title seen by users on Facebook and Twitter (can be different than your regular `title`)
- `$socialDescription`: The description seen by users on Facebook and Twitter
