const buttons = document.querySelectorAll('.faq-question');
buttons.forEach(button => {
    button.addEventListener('click', () => {
    button.classList.toggle('active');
    const answer = button.nextElementSibling;
    answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
  });
});

// Smooth scrolling for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});







document.addEventListener('DOMContentLoaded', function () {
  const cards = document.querySelectorAll('.flavor-card');
  const popup = document.getElementById('price-popup');
  const popupImage = document.getElementById('popup-image');
  const popupTitle = document.getElementById('popup-title');
  const popupPrices = document.getElementById('popup-prices');
  const popupDescription = document.getElementById('popup-description');
  const closeBtn = document.querySelector('.popup-close');

  cards.forEach(card => {
    card.addEventListener('click', () => {
      const img = card.querySelector('img').cloneNode();
      const description = card.querySelector('.flavor-card-description').textContent || '';
      const title = card.querySelector('.flavor-card-title').textContent;
      const pricesHTML = card.querySelector('.flavor-card-footer').innerHTML;

      popupImage.innerHTML = '';
      popupImage.appendChild(img);
      popupDescription.textContent = description;
      popupTitle.textContent = title;
      popupPrices.innerHTML = pricesHTML;

      popup.style.display = 'flex';
    });
  });

  closeBtn.addEventListener('click', () => {
    popup.style.display = 'none';
  });

  window.addEventListener('click', (e) => {
    if (e.target === popup) {
      popup.style.display = 'none';
    }
  });
});


document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');

  menuToggle.addEventListener('click', function () {
    mobileMenu.classList.toggle('active');
  });
});



  const openBtn = document.getElementById("openFormBtn");
  const closeBtn = document.getElementById("closeFormBtn");
  const popup = document.getElementById("popupForm");

  openBtn.addEventListener("click", () => {
    popup.style.display = "flex";
  });

  closeBtn.addEventListener("click", () => {
    popup.style.display = "none";
  });

  // Optional: klik di luar form untuk menutup
  window.addEventListener("click", (e) => {
    if (e.target == popup) {
      popup.style.display = "none";
    }
  });

