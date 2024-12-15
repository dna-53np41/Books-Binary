let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}


window.onscroll = () =>{
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    
}

function redirectToPage1() {
    window.location.href = "index.php"; 
}


var swiper = new Swiper(".product-slider", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides:true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
  });

  document.querySelectorAll('.cart-btn').forEach(button => {
    button.addEventListener('click', function() {
        const itemId = this.getAttribute('data-item-id');

        fetch('cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                action: 'add',
                item_id: itemId,
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Item added to cart');
            } else {
                alert('Failed to add item');
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
