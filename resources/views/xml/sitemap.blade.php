<?php
  header('Content-type: application/xml; charset="ISO-8859-1"',true);  
  $datetime1 = new DateTime(date('Y-m-d H:i:s'));
?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc><![CDATA[{{ url('infoterkini/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
    <sitemap>
        <loc><![CDATA[{{ url('kabarjatim/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
    <sitemap>
        <loc><![CDATA[{{ url('politik/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
    <sitemap>
        <loc><![CDATA[{{ url('budaya/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
    <sitemap>
        <loc><![CDATA[{{ url('sejarah/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
    <sitemap>
        <loc><![CDATA[{{ url('hiburan/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
    <sitemap>
        <loc><![CDATA[{{ url('catatanakhirpekan/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
    <sitemap>
        <loc><![CDATA[{{ url('tokoh/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
    <sitemap>
        <loc><![CDATA[{{ url('advertorial/sitemap.xml') }}]]></loc>
        <lastmod><![CDATA[{{ $datetime1->format(DATE_ATOM); }}]]></lastmod>
    </sitemap>
</sitemapindex>