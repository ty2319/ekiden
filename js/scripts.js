(function($) {
		
	var cnt = true;
	
	header = function() {
		
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
		
		$('header').height($(window).height());
			
		if ($(window).width() > $('.slidebox').width() * $('.slidebox').length) {
			$('.slidebox:first').clone().appendTo('header');
			$('header').width($('header').find('.slider').length * 150);
		}
		
		$('.slider:odd').addClass('topslide');
		$('.slider:even').addClass('bottomslide');
		
		$('.topslide').each(function() {
			
			var elmT = $(this),
				ulhT = elmT.find('ul:first'),
				cntT = ulhT.find('li').length,
				hgtT = cntT * 100;
			
			if (hgtT < $(window).height()) {
				ulhT.clone().appendTo(elmT);
			}
			 
			function looptop(){
				 
				elmT.animate({top: -hgtT}, 4500*cntT ,'linear',function(){
					elmT.css('top' , 0);
					looptop();
				});
			};
			looptop();
		});
		
		$('.bottomslide').each(function() {
			
			var elmB	= $(this),
			ultB		= elmB.find('ul:first'),
			cntB		= ultB.find('li').length,
			hgtB		= cntB * 100;
			
			if (hgtB < $(window).height()) {
				ultB.clone().prependTo(elmB);
			}
			
			function loopbottom(){
				 
				elmB.css('top' , -hgtB + 'px').animate({top: 0}, 4500*cntB ,'linear',function(){
					elmB.css('top' , -hgtB + 'px');
					loopbottom();
				});
			};
			loopbottom();
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
	
	nav = function() {
		
		if($(window).width() < 700) {
			
			$('h2').hover(function() {
				$('#global').slideUp(500);
				$('#global .on').removeClass('on');
				$('#global').nextAll().removeClass('menu_open');
				$('.menu-trigger i').text('menu');
			});
				
			$('.menu-trigger:not(.on)').hover(function() {
				$('#global').slideDown(500);
				$(this).addClass('on');
				$('i' , this).text('close');
				$('.menu-trigger .new').hide();
			} , function() {
				
				$('#global').hover(function() {
					$(this).show();
					$('.menu-trigger i').text('close');
				} , function() {
					$('#global').slideUp(500);
					$('#global .on').removeClass('on');
					$('.menu-trigger i').text('menu');
					$('.menu-trigger .new').show();
				});
				
				$('h2').hover(function() {
					$('#global').slideUp(500);
					$('#global .on').removeClass('on');
					$('.menu-trigger i').text('menu');
					$('.menu-trigger .new').show();
				});
			});
			
			$('.menu-trigger').on('click' , function() {
				$('#global').slideToggle(500);
				$(this).toggleClass('on');
				$('#global').nextAll().toggleClass('menu_open');
				
				if ($('i' , this).text() == 'close'){
					$('i' , this).text('menu');
					$('.menu-trigger .new').show();
			   } else {
				   $('i' , this).text('close');
					$('.menu-trigger .new').hide();
			   }
			});
		}
		
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
			$('.menu-trigger')
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
		header();
		setting();
		tab();
		smoothScroll();
		nav();
	});	
	
	$(window).resize(function() {
		header();
	});
	
})($);// JavaScript Document