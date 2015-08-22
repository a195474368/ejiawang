$(document).ready(function(){
			$(".search .search_cont").mouseover(function(){
						$(this).find(".search_cont_bt").show();
					
					}).mouseleave(function(){
						$(this).find(".search_cont_bt").hide();
					
					})
            $(".search .search_cont_bt a").click(function(){
                $(".search .search_cont #top_select").html($(this).text()+'<span class="search_ico"></span>');
                $(".search form").attr('action',$(this).attr('rel'));
                $(".search .search_cont_bt").hide();
            });        
			$(".banner_lt_b a").mouseover(function(){
				$(this).addClass("on");
				$(this).siblings().removeClass("on");
				})
			$(".banner_lt_b a").eq(0).mouseover();
			
			
			$(".wenda_title p a").mouseover(function(){
					 var index = $(this).index();
					 $(".wenda_title p a").each(function(a){
						 if(a == index){
							 $(this).addClass('on');
							 $(".nd_deco_part2_rt_cont").eq(a).show();
						 }else{
							 $(this).removeClass('on');
							  $(".nd_deco_part2_rt_cont").eq(a).hide();
						 }
					 });
				});
			$(".wenda_title p a").eq(0).mouseover();
			
			$(".main_1f ul li").mouseover(function(){
					$(this).addClass("on");							   
					$(this).siblings().removeClass("on");
			
			 })
 			$(".main_1f ul li").eq(0).mouseover();
			
			 $(".main_sub_nav_2f a").mouseover(function(){
					 var index = $(this).index();
					 $(".main_sub_nav_2f a").each(function(a){
						 if(a == index){
							 $(this).addClass('on');
							 $(".main_2f_lt ul").eq(a).show();
						 }else{
							 $(this).removeClass('on');
							  $(".main_2f_lt ul").eq(a).hide();
						 }
					 });
				});
				$(".main_sub_nav_2f a").eq(0).mouseover();
				
				$(".main_sub_nav_3f a").mouseover(function(){
					 var index = $(this).index();
					 $(".main_sub_nav_3f a").each(function(a){
						 if(a == index){
							 $(this).addClass('on');
							 $(".main_3f_lt .main_3f_myhome").eq(a).show();
						 }else{
							 $(this).removeClass('on');
							  $(".main_3f_lt .main_3f_myhome").eq(a).hide();
						 }
					 });
				});
				$(".main_sub_nav_3f a").eq(0).mouseover();
				
				$(".main_5f_lt ul li").mouseover(function(){
					 var index = $(this).index();
					 $(".main_5f_lt ul li").each(function(a){
						 if(a == index){
							 $(".main_5f_hidden").eq(a).show();
						 }else{
							$(".main_5f_hidden").eq(a).hide();
						 }
					 });
				});
				$(".main_5f_lt ul li").eq(0).mouseover();
				
				$("ul.nav_rt li").mouseover(function(){
						$(this).find("ul.sub_nav").show();
				 }).mouseleave(function(){
						$(this).find("ul.sub_nav").hide();
				})
				
				
				$('.online_open').animate({
				right: -104
					}, 0);
				$('.online_close a.online_fuwu').mouseover(function(event) {
					$('.online_open').animate({
						right: 0
					}, 100);
					$('.online_close').animate({
						right: -42
					}, 100);
				});
				$('.online_open a.closeAll').click(function(event) {
					$('.online_open').animate({
						right: -104
					}, 100);
					$('.online_close').animate({
						right: 0
					}, 100);
					return false;
				});
				$('.online_open .rt_top a,.online_close a.top').click(function(event) {
					$('html,body').animate({
						scrollTop: 0
					}, 200);
					return false;
				});

				$(".footer_fixed_cont span.rt").click(function(){
					$(".footer_fixed").hide();								   
				})
				
    $(".need_decorate_part6 ul li").hover(function () {
        $(this).find(" p.txt span").addClass('on');
        $(this).css("border-top", "2px solid #07c1d5");
    }, function () {
        $(this).find(" p.txt span").removeClass('on');
        $(this).css("border-top", "2px solid #F0F0F0");
    });

    $('.nd_deco_part4_cont li').hover(function () {
        var index = $(this).index() + 1;
        $(this).find('a').addClass('liucheng_' + index);
    }, function () {
        $(this).find('a').removeClass();
    });
 })