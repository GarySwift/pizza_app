/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-home' : '&#xe000;',
			'icon-pencil' : '&#xe001;',
			'icon-image' : '&#xe002;',
			'icon-profile' : '&#xe003;',
			'icon-copy' : '&#xe004;',
			'icon-disk' : '&#xe005;',
			'icon-user' : '&#xe006;',
			'icon-zoom-in' : '&#xe007;',
			'icon-zoom-out' : '&#xe008;',
			'icon-search' : '&#xe009;',
			'icon-expand' : '&#xe00a;',
			'icon-contract' : '&#xe00b;',
			'icon-expand-2' : '&#xe00c;',
			'icon-contract-2' : '&#xe00d;',
			'icon-eye' : '&#xe00e;',
			'icon-plus' : '&#xe00f;',
			'icon-minus' : '&#xe010;',
			'icon-enter' : '&#xe011;',
			'icon-loop' : '&#xe012;',
			'icon-crop' : '&#xe013;',
			'icon-eye-open' : '&#xf06e;',
			'icon-quote-right' : '&#xf10e;',
			'icon-quote-left' : '&#xf10d;',
			'icon-basket' : '&#xe014;',
			'icon-paperclip' : '&#xe015;',
			'icon-calendar' : '&#xf073;',
			'icon-star' : '&#xe016;',
			'icon-html5' : '&#xe018;',
			'icon-css3' : '&#xe019;',
			'icon-paypal' : '&#xe01a;',
			'icon-checkbox-unchecked' : '&#xe01b;',
			'icon-checkbox-checked' : '&#xe01c;',
			'icon-checkbox-partial' : '&#xe01d;',
			'icon-thumbs-up' : '&#xe01e;',
			'icon-thumbs-up-2' : '&#xe01f;',
			'icon-link' : '&#xe020;',
			'icon-remove' : '&#xe021;',
			'icon-user-2' : '&#xe022;',
			'icon-menu' : '&#xe023;',
			'icon-trashcan' : '&#xe024;',
			'icon-radio-unchecked' : '&#xe025;',
			'icon-radio-checked' : '&#xe026;',
			'icon-grid' : '&#xe027;',
			'icon-book-alt2' : '&#xe028;',
			'icon-star-2' : '&#xe029;',
			'icon-calendar-2' : '&#xe02c;',
			'icon-calendar-3' : '&#xe02d;',
			'icon-users' : '&#xe02e;',
			'icon-attachment' : '&#xe02f;',
			'icon-heart' : '&#xe030;',
			'icon-heart-2' : '&#xe031;',
			'icon-close' : '&#xe032;',
			'icon-share' : '&#xe034;',
			'icon-twitter' : '&#xe035;',
			'icon-facebook' : '&#xe036;',
			'icon-twitter-2' : '&#xe037;',
			'icon-facebook-2' : '&#xe038;',
			'icon-google-plus' : '&#xe039;',
			'icon-google-plus-2' : '&#xe03a;',
			'icon-feed' : '&#xe03b;',
			'icon-feed-2' : '&#xe03c;',
			'icon-github' : '&#xe03d;',
			'icon-android' : '&#xe03e;',
			'icon-reddit' : '&#xe03f;',
			'icon-linkedin' : '&#xe040;',
			'icon-pinterest' : '&#xe041;',
			'icon-apple' : '&#xe042;',
			'icon-cog' : '&#xe017;',
			'icon-list' : '&#xe043;',
			'icon-icons' : '&#xe044;',
			'icon-camera' : '&#xf030;',
			'icon-table' : '&#xe046;',
			'icon-table-2' : '&#xe047;',
			'icon-paragraph-justify' : '&#xe048;',
			'icon-unlocked' : '&#xe049;',
			'icon-lock' : '&#xe04a;',
			'icon-wrench' : '&#xe04b;',
			'icon-cog-2' : '&#xe04c;',
			'icon-reorder' : '&#xf0c9;',
			'icon-list-ul' : '&#xf0ca;',
			'icon-list-2' : '&#xe04d;',
			'icon-list-3' : '&#xe04e;',
			'icon-file' : '&#xe04f;',
			'icon-eye-blocked' : '&#xe050;',
			'icon-tag' : '&#xe051;',
			'icon-calendar-4' : '&#xe052;',
			'icon-left-quote' : '&#xe053;',
			'icon-right-quote' : '&#xe054;',
			'icon-popout' : '&#xe055;',
			'icon-popout-2' : '&#xe056;',
			'icon-cart' : '&#xe057;',
			'icon-expand-3' : '&#xe058;',
			'icon-contract-3' : '&#xe059;',
			'icon-undo' : '&#xe05a;',
			'icon-redo' : '&#xe05b;',
			'icon-share-alt' : '&#xf064;',
			'icon-group' : '&#xf0c0;',
			'icon-laptop' : '&#xf109;',
			'icon-tablet' : '&#xf10a;',
			'icon-circle-blank' : '&#xf10c;',
			'icon-circle' : '&#xf111;',
			'icon-redo-2' : '&#xe05c;',
			'icon-forward' : '&#xe05d;',
			'icon-undo-2' : '&#xe05e;',
			'icon-reply' : '&#xe05f;',
			'icon-bubble' : '&#xe060;',
			'icon-question' : '&#xe061;',
			'icon-help' : '&#xe062;',
			'icon-info' : '&#xe064;',
			'icon-info-2' : '&#xe065;',
			'icon-info-3' : '&#xe066;',
			'icon-home-2' : '&#xe067;',
			'icon-qrcode' : '&#xe068;',
			'icon-barcode' : '&#xe069;',
			'icon-truck' : '&#xe06a;',
			'icon-desktop' : '&#xf108;',
			'icon-key' : '&#xe06c;',
			'icon-key-2' : '&#xe06f;',
			'icon-exit' : '&#xe070;',
			'icon-checkmark' : '&#xe071;',
			'icon-checkmark-2' : '&#xe072;',
			'icon-johnny_automatic_slicing_bread' : '&#xe07c;',
			'icon-book' : '&#xe07d;',
			'icon-double-angle-left' : '&#xf100;',
			'icon-double-angle-right' : '&#xf101;',
			'icon-double-angle-up' : '&#xf102;',
			'icon-double-angle-down' : '&#xf103;',
			'icon-angle-left' : '&#xf104;',
			'icon-angle-right' : '&#xf105;',
			'icon-angle-up' : '&#xf106;',
			'icon-angle-down' : '&#xf107;',
			'icon-cart-2' : '&#xe07e;',
			'icon-cart-3' : '&#xe07f;',
			'icon-envelope' : '&#xe080;',
			'icon-at' : '&#xe081;',
			'icon-github-2' : '&#xe082;',
			'icon-hash' : '&#xe083;',
			'icon-home-3' : '&#xf015;',
			'icon-star-3' : '&#xe084;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};