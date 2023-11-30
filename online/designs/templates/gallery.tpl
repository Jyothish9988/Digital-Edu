<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/carousel-08/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 09:31:43 GMT -->
<head>
	{literal}
<title>Carousel 08</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="gallery/css/owl.carousel.min.css">
<link rel="stylesheet" href="gallery/css/owl.theme.default.min.css">
<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/gallery/css/ionicons.min.css">
<link rel="stylesheet" href="gallery/css/animate.css">
<link rel="stylesheet" href="gallery/css/style.css">
<script nonce="86993225-0aa3-43d3-916d-f0e7ae1431cc">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
	<p style="background-image:url('images/no.jpeg">
<section class="ftco-section">
<div class="container">
<div class="row">

	{/literal}
<div class="col-md-12 text-center">
<h2 class="heading-section mb-5"></h2>
</div>
<div class="col-md-12">
<div class="featured-carousel owl-carousel">

{foreach from=$data item="j"}
<div class="item">
<div class="row justify-content-center">
<div class="col-md-11">
<div class="testimony-wrap d-md-flex">
<div  ><img src="uploads/{$j.gkey}/{$j.img1}" alt="" style="background-image" class="img"></div>
<div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
<div class="desc w-100">
	<p class="h2 mb-5">{$j.heading}</p>
<p class="h3 mb-5"><marquee direction="up" height="300px">{$j.subject}</marquee></p>
<div class="pt-4">
<p class="name mb-0">{$j.date}</p>
<!-- <span class="position">{$j.date}</span> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
{/foreach}




 {literal}
</div>
</div>
</section>

<center><h2>Notice</h2></center>

<section class="ftco-section">
<div class="container">
<div class="row">

	{/literal}
<div class="col-md-12 text-center">
<h2 class="heading-section mb-5"></h2>
</div>
<div class="col-md-12">
<div class="featured-carousel owl-carousel">

{foreach from=$data1 item="j"}
<div class="item">
<div class="row justify-content-center">
<div class="col-md-11">
<div class="testimony-wrap d-md-flex">
<div  ><img src="images/edu.jpeg" alt="" style="background-image" class="img"></div>
<div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
<div class="desc w-100">
	<p class="h2 mb-5">{$j.title}</p>
<p class="h3 mb-5"><marquee direction="up" height="300px">{$j.notice}</marquee></p>
<div class="pt-4">
<p class="name mb-0">{$j.date}</p>
<!-- <span class="position">{$j.date}</span> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
{/foreach}




 {literal}
</div>
</div>
</section>
<!-- <img src="images/notice.png" > -->
<script src="gallery/js/jquery.min.js"></script>
<script src="gallery/js/popper.js"></script>
<script src="gallery/js/bootstrap.min.js"></script>
<script src="gallery/js/owl.carousel.min.js"></script>
<script src="gallery/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.gallery/js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78b65171990c17b7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</div>
</body>
{/literal}
<!-- Mirrored from preview.colorlib.com/theme/bootstrap/carousel-08/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 09:32:00 GMT -->
</html>