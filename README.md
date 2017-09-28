# Standardized `<head>`

A standardized `<head>` section tested and effective for sites with **more than 5m monthly organic visitors**. These examples integrate a "base level" [Schema Structured Data](https://developers.google.com/search/docs/guides/intro-structured-data) in the form of [JSON-LD](https://json-ld.org/) (Google's preferred flavor).

## 3 Types of `<head>`

There are (3) major types of `<head>` sections for use with:

| Type                 | Use           |
| ---------------------|---------------|
| [**WebSite**](https://github.com/htmlfriendly/head/blob/master/website.php) | Home Page Only   |
| [**WebPage**](https://github.com/htmlfriendly/head/blob/master/webpage.php) | About Us, Contact, FAQs |
| [**Article**](https://github.com/htmlfriendly/head/blob/master/article.php) | Blog, News, Articles |

### Extended Examples (Using `php` Templating)

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


