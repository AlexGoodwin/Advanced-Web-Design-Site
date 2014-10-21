<? include('head.php');?>
<body class="">
    
    <div id="banner" class="grid-100 grid-parent" style="background-image: url('img/bigBeach.jpg');">
    	<h1>beach.</h1>
    	
    	<div class="grid-100 center">
    		<a href="javascript: scrollToElement('#html5Syntax');" class="scrollDown"></a>
    	</div>
    </div>
    
    <div class="grid-100 grid-parent">
    
	<? include('nav.php');?>

	<section class="grid-parent" id="html5Syntax">
		<header class="grid-100 center">
			<h2 class="title">HTML5 Syntax - Semantic Usage</h2>
		</header>
		
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Time</h3>
			<aside class="grid-50">
				<? date_default_timezone_set('America/Denver');
				$currentTime = date("Y-m-d").'T'.date("h:i:s").'-07:00';
				$formattedTime = date("M d, Y");?>
				<pre>&lt;time datetime="<?echo $currentTime;?>"&gt;<?echo $formattedTime;?>&lt;/time&gt;</pre>
			</aside>
			<div class="grid-50">
				<p><time datetime="<?echo $currentTime;?>"><?echo $formattedTime;?></time></p>
			</div>
			<div class="grid-100">
				<p>I was born on <time datetime="1994-02-10T06:34:00">February 10, 1994 at 6:34am</time>. It was not much of a surprise for my parents. Probably was for me.</p>
			</div>
		</div>
		
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Strong and Emphasize</h3>
			<aside class="grid-50">
				<pre>&lt;p&gt;Note: if you &lt;em&gt;really&lt;/em&gt; want to emphasize something, &lt;strong&gt;TRY YELLING!&lt;/strong&gt;&lt;/p&gt;</pre>
			</aside>
			<div class="grid-50">
				<p>Note: if you <em>really</em> want to emphasize something, <strong>TRY YELLING!</strong></p>
			</div>
		</div>
			
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Abbreviations</h3>
			<aside class="grid-50">
				<pre>&lt;p&gt;Growing up, my LL Bean backpack totally had &lt;abbr title=&quot;Alexander James Goodwin&quot;&gt;AJG&lt;/abbr&gt; embroidered on it.&lt;/p&gt;</pre>
			</aside>
			<div class="grid-50">
				<p>Growing up, my LL Bean backpack totally had <abbr title="Alexander James Goodwin">AJG</abbr> embroidered on it.</p>
			</div>
		</div>
		
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Definitions</h3>
			<aside class="grid-50">
				<pre>&lt;details&gt;
&lt;summary&gt;What's a &lt;dfn&gt;super secret fact&lt;/dfn&gt; about me?&lt;/summary&gt;
&lt;p&gt;I'm allergic to fluoride.&lt;/p&gt;
&lt;/details&gt;</pre>
			</aside>
			<div class="grid-50">
				<details>
					<summary>What's a <dfn>super secret fact</dfn> about me?</summary>
					<p>I'm allergic to fluoride.</p>
				</details>
			</div>
		</div>
				
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Semantic Highlight (Mark)</h3>
			<aside class="grid-50">
				<pre>&lt;p&gt;If I ever wrote an autobiography, it's probably have lots of boring details in it, sprinkled with the occasional interesting fact. A good example might be that &lt;mark&gt;dueling is legal in paraguay, as long as both parties are registered blood donors.&lt;/mark&gt;&lt;/p&gt;</pre>
			</aside>
			<div class="grid-50">
				<p>If I ever wrote an autobiography, it's probably have lots of boring details in it, sprinkled with the occasional interesting fact. A good example might be that <mark>dueling is legal in paraguay, as long as both parties are registered blood donors.</mark></p>
			</div>
		</div>
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Blockquote and Cite</h3>
				<div class="grid-100">
					<p>There's this book, <strong>"The 2,548 Best Things Anybody Ever Said"</strong>, selected and compiled by Robert Byrne. It's got tons of great quotes in it, like...</p>
				</div>
				<aside class="grid-50">
					<pre>&lt;blockquote&gt;
&lt;p&gt;
&lt;q&gt;I used to work in a fire hydrant factory. You couldn't park anywhere near the place.&lt;/q&gt;
&lt;/p&gt;
&lt;footer&gt;
— &lt;cite&gt;&lt;a href="http://www.brainyquote.com/quotes/quotes/s/stevenwrig117739.html"&gt;Steven Wright&lt;/a&gt;&lt;/cite&gt;
&lt;/footer&gt;
&lt;/blockquote&gt;</pre>
				</aside>
				<div class="grid-50">
					<blockquote>
						<p>
							<q>I used to work in a fire hydrant factory. You couldn't park anywhere near the place.</q>
						</p>
						<footer>
						— <cite><a href="http://www.brainyquote.com/quotes/quotes/s/stevenwrig117739.html">Steven Wright</a></cite>
						</footer>
					</blockquote>
				</div>
		</div>
			
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Meter and Progress bars</h3>
			<aside class="grid-100">
				<pre>&lt;p class=&quot;center&quot;&gt;Birth &lt;progress max=&quot;77.4&quot; value=&quot;20.58&quot;&gt;26.58%&lt;/progress&gt; Expected Death&lt;/p&gt;</pre>
				<p class="center">Birth <progress max="77.4" value="20.58">26.58%</progress> Expected Death</p>
				<p>I'm 20.58 years old. Male life expectancy in the united states is 77.4 years, according to <a href="http://en.wikipedia.org/wiki/List_of_countries_by_life_expectancy" target="_top">Wikipedia</a>. That puts me at 26.59% of the way there. <em>Yikes</em>.</p>
			</aside>
			<div class="grid-100">
				<pre>&lt;meter value="0.827"&gt;Top 17.3%&lt;/meter&gt;</pre>
				<p class="center">Unlucky <meter value="0.8">Top 17.3%</meter> Lucky</p>
				<p>On the brighter side, I'm lucky enough to live in the country with the 34th best life expectancy- that's the top 17% of the world. So there's that.
			</div>
		</div>
		
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Insert, Delete, and Strike</h3>
			<aside class="grid-50">
				<pre>&lt;p&gt;&lt;ins&gt;Since being published, Alex has become 20.59 years old. Article originally stated 20.58 years, but that's old news now.&lt;/ins&gt;&lt;/p&gt;
				&lt;p&gt;&lt;del&gt;Alex used to be 20.58 years old&lt;/del&gt;&lt;/p&gt;
				&lt;p&gt;&lt;s&gt;Alex is 72 years old.&lt;/s&gt;&lt;/p&gt;</pre>
			</aside>
			<div class="grid-50">
				<p><ins>Since being published, Alex has become 20.59 years old. Article originally stated 20.58 years, but that's old news now.</ins></p>
				<p><del>Alex used to be 20.58 years old</del></p>
				<p><s>Alex is 72 years old.</s></p>
			</div>
		</div>
		
		<div class="grid-80 prefix-10 suffix-10 syntaxElement">
			<h3>Subscript and Superscript</h3>

			<div class="grid-100">
				<p>The HTML5 spec doesn't allow for <sub>sub</sub> and <sup>sup</sup> to be used for purely presentational purposes. In fact, <a href='http://www.w3.org/html/wg/drafts/html/master/text-level-semantics.html#the-sub-and-sup-elements'>w3.org</a> states:</p>
				<blockquote>
					<p><q>These elements must be used only to mark up typographical conventions with specific meanings, not for typographical presentation for presentation's sake.</q></p>
					- <cite title="http://www.w3.org/html/wg/drafts/html/master/text-level-semantics.html#the-sub-and-sup-elements">w3.org</cite>
				</blockquote>
				<p>So let's do some math.</p>
			</div>
			<aside class="grid-50">
				<pre>&lt;p&gt;10&lt;sup&gt;2&lt;/sup&gt; = 100&lt;/p&gt;
&lt;p&gt;7log&lt;sub&gt;8&lt;/sub&gt; = 6.321629909&lt;/p&gt;
&lt;p&gt;Fascinating.&lt;/p&gt;</pre>
			</aside>
			<div class="grid-50">
				<p>10<sup>2</sup> = 100</p>
				<p>7log<sub>8</sub> = 6.321629909</p>
				<p>Fascinating.</p>
			</div>
		</div>
		
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Figure & Figcaption</h3>
			<aside class="grid-50">
				<pre>&lt;figure class=&quot;center&quot;&gt;
&lt;img src=&quot;img/cusnowboarding.png&quot; alt=&quot;cu snowboarding&quot;&gt;
&lt;figcaption&gt;I like to &lt;a href=&quot;http://www.cusnowboardteam.com/&quot; target=&quot;_top&quot;&gt;snowboard&lt;/a&gt;.&lt;/figcaption&gt;
&lt;/figure&gt;</pre>
			</aside>
			<div class="grid-50">
				<figure class="center">
					<img src="img/cusnowboarding.png" alt="cu snowboarding" style="max-width: 60%; margin-bottom: 20px;">
					<figcaption>I like to <a href="http://www.cusnowboardteam.com/" target="_top">snowboard</a>.</figcaption>
				</figure>
			</div>
		</div>
		
		<div class="grid-80 prefix-10 suffix-10 mobile-grid-100 syntaxElement">
			<h3>Section & Article</h3>
			<aside class="grid-50">
				<pre>&lt;section&gt;
&lt;header&gt;&lt;h3&gt;Some Articles&lt;/h3&gt;&lt;/header&gt;
&lt;article&gt;
&lt;h3&gt;News Item 1&lt;/h3&gt;
&lt;/article&gt;
&lt;article&gt;
&lt;h3&gt;News Item 12&lt;/h3&gt;
&lt;/article&gt;
&lt;article&gt;
&lt;h3&gt;News Item 3&lt;/h3&gt;
&lt;/article&gt;
&lt;/section&gt;</pre>
			</aside>
			<div class="grid-50">
				<section>
					<header><h3>Life Accomplishments</h3></header>
					<article>
						<h4>2nd Grade Soccer Ends</h4>
						<p>Better have an extensive awards ceremony.</p>
					</article>
					<article>
						<h4>Most Improved: Freshman Basketball Team</h4>
						<p>Thanks?</p>
					</article>
					<article>
						<h4>Students Successfully Navigate Moodle and D2L</h4>
						<p><abbr tile="Laugh Out Loud">lol</abbr>, just kidding.</p>
					</article>
				</section>
			</div>
		</div>

	</section>
	
    <? include('footer.php');?>
    
    </body>
</html>