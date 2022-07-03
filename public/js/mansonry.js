$(".grid-gallery").imagesLoaded(function() {
    $(".grid-gallery").masonry({
      itemSelector: ".grid-gallery-item"
    });
  });