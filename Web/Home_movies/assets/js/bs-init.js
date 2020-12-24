$(document).ready(function(){
	AOS.init();
});

$(document).scroll(function() {
    var $this = $(this);
    if ($this.scrollTop() >= 150) {
        $(".navbar1-1").addClass("scrolled");
    } else {
        $(".navbar1-1").removeClass("scrolled");
    };
});

