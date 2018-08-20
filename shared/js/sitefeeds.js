google.load("feeds", "1");

function initialize() {
	var feed = new google.feeds.Feed("http://first-f-news.seesaa.net/index.rdf");
			feed.setNumEntries(15);
			feed.load(function(result) {
				if (!result.error) {
					var container = document.getElementById("feed");
					for (var i = 0; i < result.feed.entries.length; i++) {
						var entry = result.feed.entries[i];
						var dd = new Date(entry.publishedDate); // now
						var yearNum = dd.getYear();
						if (yearNum < 2000) yearNum += 1900;
						var m = dd.getMonth() + 1;
						if (m < 10) {m = "0" + m;}
						var d = dd.getDate();
						if (d < 10) {d = "0" + d;}
						var date = yearNum + "." + m + "." + d + " ";
						container.innerHTML += "<li><span class='listma'>" + date +"</span>　<a href='" + entry.link + "' >" + entry.title + "</a></li>";
						}
					}
				});
			}
google.setOnLoadCallback(initialize); 
