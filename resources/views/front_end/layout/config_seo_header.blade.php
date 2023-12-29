@if (!empty($SEO))
    <title>{{ !empty($SEO['title']) ? replace_title($SEO['title']) : '' }}</title>
    <meta name="keyword" content="{{ !empty($SEO['meta_description']) ? replace_title($SEO['meta_keyword']) : '' }}">
    <meta name="description"
        content="{{ !empty($SEO['meta_description']) ? replace_title($SEO['meta_description']) : '' }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ !empty($SEO['meta_title']) ? replace_title($SEO['meta_title']) : '' }}" />
    <meta property="og:description"
        content="{{ !empty($SEO['meta_description']) ? replace_title($SEO['meta_description']) : '' }}" />
    <meta property="og:image" content="{{ !empty($SEO['image']) ? convertPathImage($SEO['image']) : '' }}" />
    <meta property="og:url" content="{{ !empty($SEO['url']) ? $SEO['url'] : env('APP_URL') }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{ env('APP_URL') }}" />
    <meta name="twitter:creator" content="{{ env('APP_URL') }}">
    <meta name="twitter:title" content="{{ !empty($SEO['meta_title']) ? replace_title($SEO['meta_title']) : '' }}" />
    <meta name="twitter:description"
        content="{{ !empty($SEO['meta_description']) ? replace_title($SEO['meta_description']) : '' }}" />
    <meta name="twitter:image" content="{{ !empty($SEO['image']) ? convertPathImage($SEO['image']) : '' }}" />
@else
    <title>{{ $config_seo->meta_title ?? '' }}</title>
    <meta name="keyword" content="{{ $config_seo->meta_keyword ?? '' }}">
    <meta name="description" content="{{ $config_seo->meta_description ?? '' }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $config_seo->meta_title ?? '' }}" />
    <meta property="og:description" content="{{ $config_seo->meta_description ?? '' }}" />
    <meta property="og:image" content="{{ convertPathImage($config_website->logo ?? '') }}" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{ env('APP_URL') }}" />
    <meta name="twitter:creator" content="{{ env('APP_URL') }}">
    <meta name="twitter:title" content="{{ $config_seo->meta_title ?? '' }}" />
    <meta name="twitter:description" content="{{ $config_seo->meta_description ?? '' }}" />
    <meta name="twitter:image" content="{{ convertPathImage($config_website->logo ?? '') }}" />
@endif
<meta name="robots" content="index,follow" />
<meta name="Googlebot-News" content="index,follow">
<link rel="canonical" href="{{ url()->current() }}" />
<link rel="shortcut icon" sizes="32x32" href="{{ convertPathImage($config_website->favicon ?? '') }}"
    type="images/x-icon">

<meta property="fb:app_id" content="548802530697134" />
<meta property="fb:admins" content="100036897402369" />

<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X6PXQCT8V9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X6PXQCT8V9');
</script>