(function($) {

	/*-------------------------------
		iPhone/iPad class
	-------------------------------*/
	var ua = navigator.userAgent.toLowerCase();
	if ( ua.indexOf('iPhone') > 0 ) {
		$("body").addClass("iPhone");
	}else if ( ua.indexOf('ipad') > -1 || ua.indexOf('macintosh') > -1 && 'ontouchend' in document ) {
		$("body").addClass("iPad");
	}

	/*-------------------------------
		ロード判定
	-------------------------------*/
	setTimeout(function() {
		$('body').addClass('js-ready');
	}, 400);
	$(window).on('load',function(){
		$('body').addClass('js-loaded');
	});
	//loading
	var webStorage = function(){
		if(sessionStorage.getItem('access')){
		} else {
			sessionStorage.setItem('access', 0);
			let body = document.body;
			body.classList.add('once');
		}
	}
	webStorage();

	/*-------------------------------
		スクロール判定
	-------------------------------*/
	$(window).on('load scroll',function(){
		var s_top = $(window).scrollTop();
		if(s_top > 0){
			$('body').addClass('js-scroll');
		}else{
			$('body').removeClass('js-scroll');
		}
	});

	/*-------------------------------
		aのクリックイベント
	-------------------------------*/
	$('body').on('click', 'a', function (e) {

		var str = this.getAttribute('href').substring(0, 1),
		$linktype = $(this).attr('target'),
			$call = this.getAttribute('href').substring(0, 3);
		$headerHeight = $('header').innerHeight();

		if (str === "#") {
			//スムーズスクロールをさせる
			if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $("[name=' + this.hash.slice(1) + ']");

				if(window.matchMedia( "(max-width: 834px)" ).matches) {
					// SP
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 600);
						return false;
					}
				} else {
					// PC
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 600);
						return false;
					}
				}

			}
		} else if ($linktype == "_blank" || $call == "tel") {
			//何もしない
		}

	});

	/*-------------------------------
		ハンバーガーメニュー
	-------------------------------*/
	const hamburger_btn = document.querySelectorAll('.-hamburger .btn');
	const hamburger_menu = document.querySelector('.hamburger');
	const hamburger_close = document.querySelector('.hamburger__menu__close');
	const hamburger_menuItem = document.querySelectorAll('.hamburger__menu__nav__list__item > *:not(.pulldownMenu)');
	for (let i = 0; i < hamburger_btn.length; i++) {
		hamburger_btn[i].addEventListener('click',function(){
			if(hamburger_menu.classList.contains('js-open')){
				hamburger_menu.classList.remove('js-open');
			}else{
				hamburger_menu.classList.add('js-open');
			}
		});
	}
	hamburger_close.addEventListener('click',function(){
		if(hamburger_menu.classList.contains('js-open')){
			hamburger_menu.classList.remove('js-open');
		}else{
			hamburger_menu.classList.add('js-open');
		}
	});
	for(let i = 0; i < hamburger_menuItem.length; i++){
		hamburger_menuItem[i].addEventListener('mouseenter',function(){
			for(let i = 0; i < hamburger_menuItem.length; i++){
				hamburger_menuItem[i].classList.add('js-hover');
			}
		});
		hamburger_menuItem[i].addEventListener('mouseleave',function(){
			for(let i = 0; i < hamburger_menuItem.length; i++){
				hamburger_menuItem[i].classList.remove('js-hover');
			}
		});
	}

	/*-------------------------------
		SPのみ順番入れ替え
	-------------------------------*/
	/*** 変数定義 ***/
	var mediaQueryList01 = window.matchMedia("(max-width:834px)");
	var mediaQueryList02 = window.matchMedia("(min-width:835px)");
	const ListItems01 = document.querySelectorAll('.hobbyList__item');
	const ListItemsArr01 = Array.prototype.slice.call(ListItems01);
	/*** イベントリスナー ***/
	var listener01 = function(event) {
		// リサイズ時に行う処理
		if (event.matches) {
			// 835px未満
			// $('.front-page .newJobs__body').after($('.front-page .newJobs__head .commonLink01'))
			ListItemsArr01.forEach(function (ListItem) {
				const Target = ListItem.querySelector('.hobbyList__imgArea');
				const Destination = ListItem.querySelector('.hobbyList__term')
				Destination.parentNode.insertBefore(Target, Destination.nextElementSibling);
			});
		}
	};
	var listener02 = function(event) {
		// リサイズ時に行う処理
		if (event.matches) {
			// 835px以上
			// $('.front-page .newJobs__head .commonHead01').after($('.front-page .commonLink01'))
			ListItemsArr01.forEach(function (ListItem) {
				const Target = ListItem.querySelector('.hobbyList__imgArea');
				const Destination = ListItem.querySelector('.hobbyList__txtArea')
				Destination.parentNode.insertBefore(Target, Destination);
			});
		}
	};
	/*** リスナー登録 ***/
	if (mediaQueryList01.addEventListener) {
		mediaQueryList01.addEventListener("change", listener01, false);
	} else if (mediaQueryList01.attachEvent) {
		mediaQueryList01.attachEvent("change", listener01);
	}
	if (mediaQueryList02.addEventListener) {
		mediaQueryList02.addEventListener("change", listener02, false);
	} else if (mediaQueryList02.attachEvent) {
		mediaQueryList02.attachEvent("change", listener02);
	}
	/*** 初期化処理 ***/
	listener01(mediaQueryList01);
	listener02(mediaQueryList02);

	/*-------------------------------
		スクロールアクション
	-------------------------------*/
	function scrollAnime() {
		const animation = document.querySelectorAll(".anime");
		const animationArray = Array.prototype.slice.call(animation, 0);

		const options = {
			root: null,
			rootMargin: "-200px 0px -200px",
			threshold: 0
		};
		const observer = new IntersectionObserver(doWhenIntersect, options);
		animationArray.forEach(function(animation) {
			observer.observe(animation);
		});

		function doWhenIntersect(entries) {
			const entriesArray = Array.prototype.slice.call(entries, 0);

			entriesArray.forEach(function(entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add("js-active");
				}
			});
		}
	}
	scrollAnime();
	//ロード時、ウィンドウ内に入っている要素は強制的に表示
	function loadActive() {
		$(".anime").each(function(){
			var targetAnime = $(this).offset().top;
			var windowHeight = $(window).height();
			if (targetAnime < windowHeight){
				$(this).addClass("js-active");
			}
		});
	}
	loadActive();

	/*-------------------------------
		文字列を分割
	-------------------------------*/
	function spanWrap(targetElm) {
		const targets = [].slice.call(document.querySelectorAll(targetElm));
		targets.forEach(function (target) {
			const nodes = [].slice.call(target.childNodes);
			let spanWrapText = '';

			nodes.forEach(function (node) {
				if (node.nodeType == 3) {
					//テキストの場合
					const text = node.textContent.replace(/\r?\n/g, ''); //テキストから改行コード削除
					//spanで囲んで連結
					spanWrapText =
						spanWrapText +
						text.split('').reduce(function (acc, v) {
							return acc + '<span>' + v + '</span>';
						}, '');
				} else {
					//テキスト以外
					//<br>などテキスト以外の要素をそのまま連結
					spanWrapText = spanWrapText + node.outerHTML;
				}
			});

			target.innerHTML = spanWrapText;
		});
	}
	spanWrap('.split');
	$('.split span').each(function () {
		var txt = $(this).html();
		$(this).html(
			txt.replace(' ', '&nbsp;')
		);
	});

})(jQuery);
