var bannerSelector = '.banner .blocks-gallery-grid';

if (document.querySelector(bannerSelector)) {
    tns({
        container: bannerSelector,
        items: 1,
        slideBy: 'page',
        nav: false,
        speed: 300,
    });
}