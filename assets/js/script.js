
// Index.php javascript fullpagejs

new fullpage('#fullpage', {
    //options here
    licenseKey: 'CD50B0E4-F5FD4F8C-AF7C78F1-5B645B1D',
    slidesNavigation: true,
    scrollHorizontally: true,        
    navigation:true,
    scrollOverflow:true,
    //controlArrows:false,
    navigationTooltips: ['01', '02', '03'],
    anchors: ['', 'overview', 'section1', 'section2','section3','section4','section5','quiz']
});

//methods
fullpage_api.setAllowScrolling(true);

// Index.php custom js

