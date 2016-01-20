(function($) {
// Settings for the lightbox
	var cbSettings = {
	   rel: 'cboxElement',
	   width: '95%',
	   height: 'auto',
	   maxWidth: '660',
	   maxHeight: 'auto',
	   title: function() {
	     return $(this).find('img').attr('alt');
	   }
	}        
   
// Initialize jQuery Colorbox   
   $('.gallery a[href$=".jpg"], .gallery a[href$=".jpeg"], .gallery a[href$=".png"], .gallery a[href$=".gif"]').colorbox(cbSettings);  

// Keep lightbox responsive on screen resize
   $(window).on('resize', function() {
      $.colorbox.resize({
   	   width: window.innerWidth > parseInt(cbSettings.maxWidth) ? cbSettings.maxWidth : cbSettings.width
      }); 
   });     
})(jQuery);

// gallery-item.colorbox(); 