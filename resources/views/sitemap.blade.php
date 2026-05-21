<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach([['',1.0,'daily'],['about',0.8,'monthly'],['services',0.9,'monthly'],['services/ai-solutions',0.8,'monthly'],['services/erp-solutions',0.8,'monthly'],['services/web-development',0.8,'monthly'],['services/mobile-development',0.8,'monthly'],['services/cloud-solutions',0.8,'monthly'],['portfolio',0.8,'weekly'],['case-studies',0.8,'monthly'],['blog',0.7,'daily'],['careers',0.7,'weekly'],['contact',0.9,'monthly']] as $url)
  <url>
    <loc>{{ url('/'.($url[0]?$url[0]:'')) }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>{{ $url[2] }}</changefreq>
    <priority>{{ $url[1] }}</priority>
  </url>
  @endforeach
</urlset>
