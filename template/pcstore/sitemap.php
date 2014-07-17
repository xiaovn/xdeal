<?php
	header('Content-type: text/xml');
		echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
<title>Gia Lai Camera - Giai Phap An Ninh Chuyen Nghiep Gia Re</title>
<description>GiaLaiCamera thiet bi an ninh, vien thong chuyen nghiep gia re.</description>
<link>http://gialaicamera.com</link> 
<copyright>Xiao Media JSC</copyright>
<atom:link href="http://gialaicamera.com/sitemap/" rel="self" type="application/rss+xml" />
<?php   foreach($list as $product)
{
	$des = preg_replace("/\s|&nbsp;/",' ',strip_tags($product->product_description));
?>
<item>
<title><?php echo $product->product_title;?></title>
<description><?php echo $des;?></description>
<link><?php echo sitesystem::getInstance()->permalink($product->productid,"product");?></link>
<pubDate><?php echo $product->product_addtime; ?></pubDate>
<guid><?php echo sitesystem::getInstance()->permalink($product->productid,"product");?></guid>
</item>
<?php    
}    ?>
</channel>
</rss><?php    $db->close();    ?>