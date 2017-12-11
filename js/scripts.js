(function($) {
		
	var cnt = true;
	
	ie = function() {
		var ua = navigator.userAgent;
		var isIE = ua.match(/msie/i),
		isIE8 = ua.match(/msie [8.]/i)
		if (isIE) {
		$("html").addClass('ie');
			if (isIE8) {
				$("html").addClass('ie8');
			} 
		}
	},
	
	header = function() {
		
		$('header').height($(window).height());
		
		if (cnt == true) {
			
			$('header').append('<div class="slidebox">');
	 
			for (var ul_num = 1; ul_num < 8; ul_num++) {
				$('.slidebox').append('<div class="slider"><ul class="' + ul_num + '">');
			
				for (var li_num = 6; li_num >= 0; li_num--) {
					$('ul.'+ ul_num).append('<li><img src="img/' + ((ul_num*7) - li_num) + '.jpg">');
				}
				
				$('ul.'+ ul_num).clone().appendTo($('ul.'+ ul_num).parent());
			}
		
			cnt = false;
		}
			
		if ($(window).height() > $('.slidebox').height() * $('.slidebox').length) {
			$('.slidebox:first').clone().appendTo('header');
		}
		
		$('.slider:odd').addClass('leftslide');
		$('.slider:even').addClass('rightslide');
		
		$('.leftslide').each(function() {
			
			var elmL = $(this),
			ulwL	 = elmL.find('ul:first'),
			cntL	 = ulwL.find('li').length,
			wthL	 = cntL * 150;
			
			if (wthL < $(window).width()) {
				ulwL.clone().appendTo(elmL);
			}
			 
			function loopleft(){
				 
				elmL.animate({left: -wthL}, 4500*cntL ,'linear',function(){
					elmL.css({left:'0'});
					loopleft();
				});
			};
			loopleft();
		});
		
		$('.rightslide').each(function() {
			
			var elmR	= $(this),
			ulwR		= elmR.find('ul:first'),
			cntR		= ulwR.find('li').length,
			wthR		= cntR * 150;
			
			if (wthR < $(window).width()) {
				ulwR.clone().prependTo(elmR);
			}
			
			var allw	  = elmR.find('li').length * 150,
				rightside = allw - $(window).width();
			
			function loopright(){
				 
				elmR.css('left' , -rightside).animate({left: -rightside + wthR}, 4500*cntR ,'linear',function(){
					elmR.css({left: -rightside});
					loopright();
				});
			};
			loopright();
		});
	},

	setting = function() {
		$('header , article').addClass('box');
		$('section ul li a').append('<i class="fa fa-angle-double-down fa-2x">');
		$('dd a:not(#info a,#news a) , #info > a').append(' ≫');
	},
	
	tab = function() {
		//まず、00番目より後の.contentsをdisplay:none;で全て非表示にする
		$('.contents:gt(0)').hide();
		
		//#tabの中のliタグがクリックされた時にfunctionの中身を実行してね
		$('#tab li a').click(function() {
			$(this).parent().siblings().children().removeClass('current');
			$(this).addClass('current');
			$('.contents').hide();
			$($(this).attr("href")).fadeToggle();
			return false;
		});
	},
	
	//navi scroll
	navScroll = function() {
		$(window).scroll(function(){
			if ($(window).scrollTop() > $(window).height() / 1.5) {
				$('nav').addClass('ver2');
				$('h2 img').attr('src' , 'img/logo2.png');
			} else {
				$('nav').removeClass('ver2');
				$('h2 img').attr('src' , 'img/logo.png');
			}
		});
	},
	
	// SmoothScroll
	smoothScroll = function() {
		$('a[href^=#]:not(#tab a)').click(function(){
			$('html, body').animate({scrollTop : $($(this).attr('href')).offset().top}, 500, "swing");
			return false;
		});
		
		var set = 1;
		var boxTop = new Array;
		var current = -1;
		
		//各要素の位置
		var callback = function () {
			$('.box').each(function(i) {
				boxTop[i] = $(this).offset().top - 1;
				
				if ($('section#2').outerHeight() < $(window).height()) {
					boxTop[i] = boxTop[i] - 230
				}
				
			});	
		}
		
		$(window).scroll(callback);
		$('#tab li a').resize(callback);
		
		//最初のliにclass='cu'
		changeBox(0);
		
		//スクロールしたときの処理
		$(window).scroll(function(){
			for (var i = boxTop.length - 1 ; i >= 0; i--) {
				if ($(window).scrollTop() >= boxTop[i]) {
					if (i != 0) {
						$('#prev').fadeIn();
					} else {
						$('#prev').fadeOut();
					}
					
					if (i == boxTop.length - 1) {
						$('#next').fadeOut();
					} else {
						$('#next').fadeIn();
					}
					
					$('#prev a').attr('href' , '#' + i);
					$('#next a').attr('href' , '#' + (i + 2));
					changeBox(i);
					break;	
				}
			};
		});
		
		//ナビの処理
		function changeBox(secNum) {
			if(secNum != current) {
				current = secNum;
				secNum2 = secNum + 1;
				$('#global li').removeClass('cu');
				$('#global li:nth-child(' + secNum2 +')').addClass('cu');
			}
		}
	}
	
	$(document).ready(function() {
		ie();
		header();
		setting();
		tab();
		smoothScroll();
		navScroll();
	});	
	
	$(window).resize(function() {
		header();
	});
	
})($);// JavaScript Document