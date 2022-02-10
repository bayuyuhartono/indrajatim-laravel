<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; 
    $datetime1 = new DateTime(date('Y-m-d H:i:s'));
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">
    @foreach ($posts as $post)
        <url>
            <loc>
                <![CDATA[{{ url($post->kategori_slug.'/'.$post->slug) }}]]>
            </loc>
            <news:news>
                <news:publication>
                    <news:name>
                        <![CDATA[ Indrajatim.com ]]>
                    </news:name>
                    <news:language>
                        <![CDATA[ id ]]>
                    </news:language>
                </news:publication>
                <news:publication_date>
                    <![CDATA[ {{ $datetime1->format(DATE_ATOM); }} ]]>
                </news:publication_date>
                <news:title>
                    <![CDATA[ {{ $post->judul }} ]]>
                </news:title>
                <news:keywords>
                    <![CDATA[ {{ $post->tag }} ]]>
                </news:keywords>
            </news:news>
        </url>
    @endforeach
</urlset>