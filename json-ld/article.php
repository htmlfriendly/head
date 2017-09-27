{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?=$url?>"
  },
  "headline": "<?=$title?>",
  "image": [
    "<?=$socialImage?>"
   ],
  "datePublished": "<?=$datePub?>",
  "dateModified": "<?=$dateMod?>",
  "author": {
    "@type": "Person",
    "name": "<?=$author?>"
  },
   "publisher": {
    "@type": "Organization",
    "name": "<?=$siteName?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?=$logo?>"
    }
  },
  "description": "<?=$description?>"
}