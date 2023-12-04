document.onload = styleActiveLink();
function styleActiveLink() {
	const navLinks = document.querySelectorAll('a.nav-link,a.navbar-brand');
	navLinks.forEach((link) => {
		if (
			link.attributes.href.value ===
			'.' + location.pathname.replace('/freelancer', '')
		) {
			link.classList.add(
				'border-white',
				'border-bottom',
				'border-3',
				// 'text-white'
			);
		}
	});
}
