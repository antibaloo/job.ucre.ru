/* ========================================================================= */
/*	Preloader
/* ========================================================================= */

jQuery(window).load(function(){

	$("#preloader").fadeOut("slow");

});


$(document).ready(function(){

	/* ========================================================================= */
	/*	Menu item highlighting
	/* ========================================================================= */

	jQuery('#nav').singlePageNav({
		offset: jQuery('#nav').outerHeight(),
		filter: ':not(.external)',
		speed: 1200,
		currentClass: 'current',
		easing: 'easeInOutExpo',
		updateHash: true,
		beforeStart: function() {
			console.log('begin scrolling');
		},
		onComplete: function() {
			console.log('done scrolling');
		}
	});
	
    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#navigation").css("background-color","#0EB493");
        } else {
            $("#navigation").css("background-color","rgba(16, 22, 54, 0.2)");
        }
    });
	
	/* ========================================================================= */
	/*	Fix Slider Height
	/* ========================================================================= */	

	var slideHeight = $(window).height();
	
	$('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height',slideHeight);

	$(window).resize(function(){'use strict';
		$('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height',slideHeight);
	});
	
	
	/* ========================================================================= */
	/*	Portfolio Filtering
	/* ========================================================================= */	
	
	
    // portfolio filtering

    $(".project-wrapper").mixItUp();
	
	
	$(".fancybox").fancybox({
		padding: 0,

		openEffect : 'elastic',
		openSpeed  : 650,

		closeEffect : 'elastic',
		closeSpeed  : 550,

		closeClick : true,
	});
	
	/* ========================================================================= */
	/*	Parallax
	/* ========================================================================= */	
	
	$('#facts').parallax("50%", 0.3);
	
	/* ========================================================================= */
	/*	Timer count
	/* ========================================================================= */

	"use strict";
    $(".number-counters").appear(function () {
        $(".number-counters [data-to]").each(function () {
            var e = $(this).attr("data-to");
            $(this).delay(6e3).countTo({
                from: 50,
                to: e,
                speed: 3e3,
                refreshInterval: 50
            })
        })
    });
	
	/* ========================================================================= */
	/*	Back to Top
	/* ========================================================================= */
	
	
    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#back-top").fadeIn(200)
        } else {
            $("#back-top").fadeOut(200)
        }
    });
    $("#back-top").click(function () {
        $("html, body").stop().animate({
            scrollTop: 0
        }, 1500, "easeInOutExpo")
    });
	
});

function countDown(second,endMinute,endHour,endDay,endMonth,endYear) {
var now = new Date();
second = (arguments.length == 1) ? second + now.getSeconds() : second;
endYear =  typeof(endYear) != 'undefined' ?  endYear : now.getFullYear();            
endMonth = endMonth ? endMonth - 1 : now.getMonth();  //номер месяца начинается с 0   
endDay = typeof(endDay) != 'undefined' ? endDay :  now.getDate();    
endHour = typeof(endHour) != 'undefined' ?  endHour : now.getHours();
endMinute = typeof(endMinute) != 'undefined' ? endMinute : now.getMinutes();   
//добавляем секунду к конечной дате (таймер показывает время уже спустя 1с.) 
var endDate = new Date(endYear,endMonth,endDay,endHour,endMinute,second+1); 
var interval = setInterval(function() { //запускаем таймер с интервалом 1 секунду
    var time = endDate.getTime() - now.getTime();
    if (time < 0) {                      //если конечная дата меньше текущей
        clearInterval(interval);
        alert("Неверная дата!");            
    } else {            
        var days = Math.floor(time / 864e5);
        var hours = Math.floor(time / 36e5) % 24; 
        var minutes = Math.floor(time / 6e4) % 60;
        var seconds = Math.floor(time / 1e3) % 60;  
        var digit='<div style="width:70px;float:left;text-align:center">'+
        '<div style="font-family:Stencil;font-size:65px;">';
        var text='</div><div>'
        var end='</div></div><div style="float:left;font-size:45px;">:</div>'
        document.getElementById('mytimer').innerHTML = '<div>До окончания приема резюме осталось: </div>'+
        digit+days+text+'Дней'+end+digit+hours+text+'Часов'+end+
        digit+minutes+text+'Минут'+end+digit+seconds+text+'Секунд';
        if (!seconds && !minutes && !days && !hours) {              
            clearInterval(interval);
            //alert("Время вышло!");              
        }           
    }
    now.setSeconds(now.getSeconds() + 1); //увеличиваем текущее время на 1 секунду
}, 1000);
}
