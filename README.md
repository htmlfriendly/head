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

##### **`global.php`** - Used multiple times throughout all three page types (`website`, `webpage` and `article`)

Your Global Variables will be used across the site:

- `$siteName` = Top level name of your website/oranization
- `$logo` = Main logo for your site
- `$favicon` = 32x32px icon you'll see in the browser tab
- `$googlePlus` = The URL for your Google+ page
- `$facebookAppId` = Find your Facebook App ID in your Facebook admin
- `$facebookHandle` = The URI string following facebook.com for your organization/site (i.e. https://facebook.com/`company-url`)
- `$twitterHandle` = Find this in your Twitter URL (i.e. https://twitter.com/`htmlfriendly`
- `$phone` = You main contact phone number
- `$email` = Your main email address (should include match your website domain name)

Keep these in one place for easy access in the future.

#### JSON-LD Starter Templates

#### Page Types
