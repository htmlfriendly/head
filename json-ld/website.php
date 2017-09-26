{ 
"@context" : "http://schema.org",
"@type" : "Organization",
"name" : "<?=$siteName?>",
"url" : "<?=$url?>",
"logo" : "<?=$logo?>",
"contactPoint" : [
	{ "@type" : "ContactPoint",
	"telephone" : "<?=$phone?>",
	"email" : "<?=$email?>",
	"url" : "<?=$url?>/contact/",
	"contactType" : "Customer Service",
	"contactOption" : "TollFree",
	"areaServed" : "US" } ],
"sameAs": [
"https://www.facebook.com/<?=$facebookHandle?>",
"<?=$googlePlus?>",
"https://twitter.com/<?=$twitterHandle?>" ]
}