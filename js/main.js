// FROM ORIGINAL SITE
// Fix Pager
jQuery(document).ready(function() {
    jQuery('.YouTubeEmbed').hide();
});

function PlayYouTube() {
    jQuery('.YouTubePlaceholder').hide();
    jQuery('.YouTubeEmbed').show();
    jQuery('.YouTubeEmbed').attr("src", jQuery('.YouTubeEmbed').attr("src")+'&autoplay=1');
}

$(document).ready(function(){
	var n=1;
	var divs=document.getElementsByTagName('div'),i=0,d;
	while(d=divs[i++]){
		if(d.className=='PagerControl'){
			d.className='PagerControl'+n;
			n++;
			};
		};
		
	n=5;
	divs=document.getElementsByTagName('li'),i=0,d;
	while(d=divs[i++]){
		if(d.className=='categoryLI'){
			d.className='categoryLI'+n;
			n++;
			};
		};
		
	var qsValue = getQuerystring('c');
	if (qsValue == ''){qsValue = '5'};
	
	divs=document.getElementsByTagName('li'),i=0,d;
	while(d=divs[i++]){
		if(d.className=='categoryLI'+qsValue){
			d.className='categoryLI'+'selected';
			n++;
			};
		};
	
	function getQuerystring(key, default_){
	  if (default_==null) default_="";
	  key = key.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	  var regex = new RegExp("[\\?&]"+key+"=([^&#]*)");
	  var qs = regex.exec(window.location.href);
	  if(qs == null)
		return default_;
	  else
		return qs[1];
		};
		
	divs=document.getElementsByTagName('span'),i=0,d;
	while(d=divs[i++]){
		if(d.className=='ratingStar emptyRatingStar'){
			d.className='emptyRatingStarArchives';
			};
		};
		
	divs=document.getElementsByTagName('span'),i=0,d;
	while(d=divs[i++]){
		if(d.className=='ratingStar filledRatingStar'){
			d.className='filledRatingStarArchives';
			};
		};
	});
	
function replaceQueryString(url,param,value) {
	var newURL;
	var re = new RegExp("([?|&])" + param + "=.*?(&|$)","i");
	if (url.match(re))
		newURL = url.replace(re,'$1' + param + "=" + value + '$2');
	else if (url.indexOf("?") == -1)
		newURL = url + '?' + param + "=" + value;
	else
		newURL = url + '&' + param + "=" + value;
	newURL = newURL.replace("?" + param + "=&", "?");
	newURL = newURL.replace(param + "=&", "");
	newURL = newURL.replace("&" + param + "=&", "");
	newURL = newURL.replace("&" + param + "=", "");
	newURL = newURL.replace("?" + param + "=", "");
	location.href = newURL;
};