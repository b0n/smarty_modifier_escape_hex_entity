smarty_modifier_escape_hex_entity
=================================

facebook og:title hex entity

You must entity facebook og:title.
I use smarty but escape modifier can't escape hex.

Please see this paragraph "Get Open Graph Tags" on below page.
https://developers.facebook.com/docs/reference/plugins/like/

* Sample

&lt;meta property="og:title" content="{$page_title|escape_hex_entity}" /&gt;<br>
&lt;meta property="og:type" content="article" /&gt;<br>
&lt;meta property="og:url" content="http://ja.wikipedia.org/wiki/%E5%90%BE%E8%BC%A9%E3%81%AF%E7%8C%AB%E3%81%A7%E3%81%82%E3%82%8B" /&gt;<br>
&lt;meta property="og:image" content="" /&gt;<br>
&lt;meta property="og:site_name" content="&#x543e;&#x8f29;&#x306f;&#x732b;&#x3067;&#x3042;&#x308b; - Wikipedia" /&gt;<br>
