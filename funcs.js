function newWin(url, name, w, h) {
	l = (screen.availWidth-10 - w) / 2;
	t = (screen.availHeight-20 - h) / 2;
	features = "width="+w+",height="+h+",left="+l+",top="+t;
	features += ",screenX="+l+",screenY="+t;
	features += ",scrollbars=1,resizable=1,location=0";
	features += ",menubar=0,toolbar=0,status=0";
	
	window.open(url, name, features);
}

$(window).load(function() { //start after HTML, images have loaded
    var InfiniteRotator =
    {
        init: function()
        {
            //initial fade-in time (in milliseconds)
            var initialFadeIn = 1000;
 
            //interval between items (in milliseconds)
            var itemInterval = 7000;
 
            //cross-fade time (in milliseconds)
            var fadeTime = 2500;
 
            //count number of items
            var numberOfItems = $('.rotating-item').length;
 
            //set current item
            var currentItem = 0;
 
            //show first item
            $('.rotating-item').eq(currentItem).fadeIn(initialFadeIn);
 
            //loop through the items
            var infiniteLoop = setInterval(function(){
                $('.rotating-item').eq(currentItem).fadeOut(fadeTime);
                if(currentItem == numberOfItems -1){
                    currentItem = 0;
                }else{
                    currentItem++;
                }
                $('.rotating-item').eq(currentItem).fadeIn(fadeTime);
            }, itemInterval);
        }
    };
    InfiniteRotator.init(); 
});
