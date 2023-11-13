document.onload = styleActiveLink();
function styleActiveLink() {
	const navLinks = document.querySelectorAll('a.nav-link,a.navbar-brand');
	navLinks.forEach((link) => {
		if (
			link.attributes.href.value ===
			'.' + location.pathname.replace('/freelancer', '')
		) {
			link.classList.add(
				'border-bottom',
				'border-black',
				'border-3',
				'text-black'
			);
		}
	});
}
