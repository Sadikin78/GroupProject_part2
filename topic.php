<!DOCTYPE html>
<html lang="en">

<head>
	<title>Topic</title>

    <meta charset="utf-8"/>
    <meta name="description" content="Search engine description"/>
    <meta name="keywords" content="Search engine, Google, searching"/>
    <meta name="author" content="Matthew Falcke, Camille Louis-Abeysinghe"/>

	<!-- Styling -->
	<?php
		include 'styling.inc';
	?>
</head>

<body>
    <?php
		include 'menu.inc';
	?>
	
	<header id="topic-header">
    	<h1>Topic Description</h1>
	</header>


	<div id="topic-container">
		<aside>
			<h2>Most Popular Search Engines Worldwide</h2>
			<ol class="move-inside">
				<li>Google</li>
				<li>Bing</li>
				<li>Yahoo!</li>
				<li>Baidu</li>
				<li>Yandex</li>
				<li>DuckDuckGo</li>
			</ol>
	
			<h2>Search Engine Market Share Worldwide - February 2022</h2>
			<table id="topic-table">
				<tr>
					<th>Search Engine</th>
					<th>Percentage</th>
				</tr>
				<tr>
					<td>Google</td>
					<td>92.01%</td>
				</tr>
				<tr>
					<td>Bing</td>
					<td>2.96%</td>
				</tr>
				<tr>
					<td>Yahoo!</td>
					<td>1.51%</td>
				</tr>
				<tr>
					<td>Baidu</td>
					<td>1.17%</td>
				</tr>
				<tr>
					<td>Yandex</td>
					<td>1.06%</td>
				</tr>
				<tr>
					<td>DuckDuckGo</td>
					<td>0.68%</td>
				</tr>
			</table>
	
	
			<h2>Definition List</h2>
			<ul class="move-inside">
				<li><strong>Engine:</strong> A software system used to carry out web searches via the world wide web.</li>
				<li><strong>Market share:</strong> The percentage of sales earned by a certain company within a specific industry.</li>
				<li><strong>World Wide Web:</strong> An information system accessbile through the internet.</li>
				<li><strong>Web search query:</strong> A request for information enterted into a search engine.</li>
			</ul>
		</aside>
		<main>
			<section>
				<h2>Search Engines</h2>
				<p>
					Search engines are software programs used to carry out web searches, allowing people to access information from the World Wide Web (WWW) by entering keywords or phrases. As the number of web servers joining the internet increased and the WWW was being used to access the internet, there became a call for a way to organize and navigate data files on web servers; search engines were created to carry out this role. 
				</p>
			</section>

			<section>
				<h2>History</h2>

				<p>
					The first search engine, Archie, was developed by Alan Emptage and released in 1990. Archie acted as an index of computer files on FTP servers within particular computer networks. A year later, Mark McCahill created Gopher which organized text files. Until the creation of Wandex by Matthew Gray in 1993, search engines were maintained entirely by hand.
					<br> <br>
					Many search engines were created during the 90s, the most memorable being Yahoo!, MSN Search and Google. Google, which was founded in 1997 by Larry Page and Sergey Brin rose to popularity in the early 2000s.
				</p>
				
				<figure id="topic-img">
					<img src="images/msn_search_clear.png" alt="MSN Search">
					<figcaption>MSN search, now known as Bing, was Microsoft's first entry into search engines.</figcaption>
				</figure>
			</section>

			<section>
				<h2>Growth and What the Future Holds</h2>
				<p>
					Since its release, Google's market share has steadily increased, to where it now makes up over 90% of all web searches. Some countries favour certain search engines over Google, such as Baidu in China or Yandex in Russia, however, the overwhelming popularity of Google suggests that it may remain the leading search engine well into the future. 
				</p>
			</section>

			<section>
				<h2>Related Technologies</h2>
				<p>
					Modern search engine technology allows for information to be retrieved from the WWW using web crawling, indexing and searching, which are now the three key factors of search engines. Prior to this technology being created with Wandex, search engines searched through FTP servers. The search engines created since Wandex are more efficient as they no longer need to be searched manually, which would be virtually impossible with the current and constantly growing size of the WWW. 
				</p>

				<h3>Search Engine Optimisation</h3>
				<p>
					Search Engine Optimisation (SEO) is a form of marketing which works by improving your site to ensure its visibility in web searches. SEO is used by companies in order to increase the likelihood of search engines presenting their website in response to people's web queries. 
				</p>
			</section>

			<section id="topic-sources">
				<h2>Sources</h2>
		
				<ul class="move-inside">
					<li><a href="https://www.techopedia.com/definition/12708/search-engine-world-wide-web">World Wide Web (Techopedia)</a></li>
					<li><a href="https://www.investopedia.com/terms/m/marketshare.asp">Market Share (Investopedia)</a></li>
					<li><a href="https://www.britannica.com/topic/World-Wide-Web">World Wide Web (Britannica)</a></li>
					<li><a href="https://www.sciencedaily.com/terms/web_crawler.htm">Web Crawlers (ScienceDaily)</a></li>
					<li><a href="https://www.techopedia.com/definition/28064/search-engine-query">Search Engine Queries (Techopedia)</a></li>
				</ul>
		
			</section>
		</main>


	</div>

	<?php
		include 'footer.inc';
	?>

</body>
</html>