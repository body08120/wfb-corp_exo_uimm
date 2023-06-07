  const cards = document.getElementsByClassName("cards");
  for (const cardsElement of cards) {
    cardsElement.onmousemove = e => {
      for (const card of cardsElement.getElementsByClassName("card")) {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        card.style.setProperty("--mouse-x", `${x}px`);
        card.style.setProperty("--mouse-y", `${y}px`);
      }
    };
  }

$(document).ready(function() {
    $("#article-carousel").owlCarousel({
        items: 3,
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
});


  
