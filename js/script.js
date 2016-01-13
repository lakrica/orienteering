

window.onload = function()  {
  $('a.submenu').click(function() {
    $('a.submenu').removeClass("active");
    $(this).addClass("active");
  });
  
   $('a.main').click(function() {
    $('a.main').removeClass("act");
    $(this).addClass("act");
  });
  
  
   $.lockfixed("#event-lin",{offset: {top: 0, bottom: 290 }});
   $.lockfixed(".event-menu .stick",{offset: {top: 10, bottom: 290}});


  
    $('a.gadi').click(function() {
    $('a.gadi').removeClass("active");
    $(this).addClass("active");
  });
  

			
};


$(document).ready(function() {
    $('#left').fullpage({
        //Navigation
        menu: '#submenu',
        lockAnchors: false,
        anchors:['#1', '#2', '#3', '#4', '#5', '#6', '#7', '#8', '#9', '#10', '#11', '#12'],
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['firstSlide', 'secondSlide'],
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        resize : false,
        sectionsColor : ['#ccc', '#fff'],
        paddingTop: '3em',
        paddingBottom: '10px',
        fixedElements: '#header, .footer',
        responsiveWidth: 0,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.slide',
        slideSelector: '.section',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
});
