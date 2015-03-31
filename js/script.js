$(window).load(function() {
	$('#container').masonry({
		columnWidth: 200,
		itemSelector: '.itm',
		isFitWidth: true,
		gutter: 10,
		isAnimated: !Modernizr.csstransitions
	}).imagesLoaded(function() {
		$(this).masonry('reload');
	});

});