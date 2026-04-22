# Blog Integration Guide — mPanel CMS

Reusable pattern for adding a blog/articles section to any site that uses the **appworks.mpanel.app** CMS instance.

---

## API Reference

**Base URL:** `https://appworks.mpanel.app`  
**Auth header:** `Authorization: kmNTuI8dRmRX`

| Endpoint | Description |
|---|---|
| `GET /api/webV2/getArticles?articleLimit=12&page=1` | All articles, paginated |
| `GET /api/webV2/getArticles?category[]=<name>&articleLimit=12&page=1` | Filter by category name |
| `GET /api/webV2/getOneArticle/<id>` | Single article by ID |
| `GET /api/webV2/getArticlesBySlug/<slug>` | Single article by slug |

### Response shape
```json
{
  "success": true,
  "result": {
    "articles": [
      {
        "id": "...",
        "title": "...",
        "intro": "...",
        "created_at": "...",
        "category_id": "9",
        "categories": [{ "id": "9", "name": "AI" }],
        "images": {
          "medium-full": { "url": "https://..." },
          "large-full":  { "url": "https://..." }
        }
      }
    ]
  }
}
```

---

## Category IDs (appworks.mpanel.app)

| ID | Name | Site |
|---|---|---|
| 3 | Sports | app-works.app |
| 4 | Media | app-works.app |
| 9 | AI | app-works.app |
| 10 | Grant Projects | app-works.app |
| _(new)_ | Litteraworks | litteraworks.com only |
| _(new)_ | _(your-site)_ | future sites |

> **Rule:** Each site should have its own dedicated category. Never share categories between domains — duplicate content will hurt SEO on both sites.

---

## Slug generation

Used for clean `/article/<slug>` URLs:

```js
function createSlug(title) {
    return title.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .replace(/^-|-$/g, '');
}
```

Same logic in PHP (`article.php`):
```php
function createSlug($title) {
    $slug = strtolower($title);
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/\s+/', '-', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    return trim($slug, '-');
}
```

---

## Files on app-works.app (reference implementation)

| File | Role |
|---|---|
| `articles.html` | Article listing page — fetch, filter, paginate |
| `article.php` | Single article view — SSR meta tags for SEO, fetch by ID or slug |
| `sitemap.xml` (dynamic) | Auto-includes article slugs from API |

---

## Checklist for adding blogs to a new site

- [ ] Create a new category in mPanel for this site only
- [ ] Note the new category ID/name
- [ ] Build `articles.html` — copy `fetchArticles()` logic, change category filter and branding
- [ ] Build `article.php` — copy SSR meta logic, update site name/colors
- [ ] Add dynamic `sitemap.xml` — fetch article slugs from API, output `<url>` entries
- [ ] Add `robots.txt` pointing to sitemap
- [ ] Set canonical URLs to the new domain (not app-works.app)
- [ ] Add Google Analytics / Search Console for the new domain
- [ ] Submit sitemap in Google Search Console

---

## SEO rules

1. **Never publish the same article on two domains.** Google penalizes duplicate content.
2. **Use canonical tags** — `<link rel="canonical" href="https://your-domain.com/article/<slug>">` on every article page.
3. **Dynamic sitemap is required** for Google to discover articles automatically. Without it, indexing is slow.
4. **Publish consistently** — minimum 1-2 articles/week for a new site to build authority.
5. **Category-specific content** — articles in the Litteraworks category should be about Litteraworks topics (AI writing, publishing, etc.), not generic tech reposts.

---

## Minimal fetchArticles() (copy-paste ready)

```js
const API_BASE = 'https://appworks.mpanel.app/api/webV2/getArticles';
const API_AUTH = 'kmNTuI8dRmRX';
const CATEGORY = 'Litteraworks'; // change per site

async function fetchArticles(page = 1, append = false) {
    const url = `${API_BASE}?category[]=${encodeURIComponent(CATEGORY)}&articleLimit=12&page=${page}`;
    const response = await fetch(url, {
        headers: { 'Authorization': API_AUTH }
    });
    const data = await response.json();

    if (!data.success || !data.result?.articles?.length) return [];
    return data.result.articles;
}
```

---

## Dynamic sitemap entry (PHP)

```php
$apiUrl = 'https://appworks.mpanel.app/api/webV2/getArticles'
        . '?category[]=Litteraworks&articleLimit=100&page=1';
$context = stream_context_create([
    'http' => ['header' => "Authorization: kmNTuI8dRmRX\r\n"],
    'ssl'  => ['verify_peer' => false]
]);
$response = @file_get_contents($apiUrl, false, $context);
$data = json_decode($response, true);

foreach ($data['result']['articles'] as $article) {
    $slug = createSlug($article['title']);
    echo "<url><loc>https://your-domain.com/article/{$slug}</loc></url>\n";
}
```
