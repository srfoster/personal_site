---
title: "Blog"

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 20
    pagination: false

feed:
    description: "Stephen's Stuff"
    limit: 10

pagination: true

cover: shore.jpg
---

