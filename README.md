Subdomain Wildcard is a great system for create a site, blog, and etc without add subdomain manual in your server.
Just type **anthing.example.com**

If you get project for develop site like news site with multiple canal, you can put this sistem in there for fastest your time without coding.

Example:
domain: example.com
canal: news, inet, sport, health

Your canal has own subdomain (for desktop site) and a directory (for mobile site)

Url: https://m.example.com/news
```php
array(
["subdomain"] => string(4) "news"
)
```

Url: https://news.example.com/index
```php
array(
["subdomain"] => string(4) "news"
)
```

