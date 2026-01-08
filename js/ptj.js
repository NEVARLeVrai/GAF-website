window.addEventListener('load', () => {
    setTimeout(() => {
        const loader = document.getElementById('loader-wrapper');
        loader.classList.add('loader-hidden');
        loader.addEventListener('transitionend', () => {
            loader.style.display = 'none';
        });
    }, 0);
});

const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle");
navClose = document.getElementById("nav-close");
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
} else {
  console.error("L'élément nav-close n'existe pas.");
}

/*==================== RETIRER LE MENU MOBILE ====================*/
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  // Lorsque nous cliquons sur chaque nav__link, nous retirons la classe show-menu
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));


/*======================= Modal des jobs ===================*/
const modalViews = document.querySelectorAll(".jobs__modal"),
  modalBtns = document.querySelectorAll(".jobs__button"),
  modalCloses = document.querySelectorAll(".jobs__modal-close");

let modal = function (modalClick) {
  modalViews[modalClick].classList.add("active-modal");
};

modalBtns.forEach((modalBtn, i) => {
  modalBtn.addEventListener("click", () => {
    modal(i);
  });
});

modalCloses.forEach((modalClose) => {
  modalClose.addEventListener("click", () => {
    modalViews.forEach((modalView) => {
      modalView.classList.remove("active-modal");
    });
  });
});

/*======================= Swiper des jobs ===================*/
let swiperJobs = new Swiper(".jobs__container", {
  cssMode: true,
  loop: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    disabledClass: 'swiper-button-disabled',
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  slidesPerView: 1,
  spaceBetween: 30,
  grabCursor: true,
  effect: 'slide',
  speed: 400,
  observer: true,
  observeParents: true,
  resizeObserver: true,
  updateOnWindowResize: true
});

// Mise à jour du Swiper lors du redimensionnement
window.addEventListener('resize', () => {
  swiperJobs.update();
});

/*==================== LIEN ACTIF DES SECTIONS DÉFILEMENT ====================*/
const sections = document.querySelectorAll("section[id]");

function scrollActive() {
  const scrollY = window.pageYOffset;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active-link");
    } else {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.remove("active-link");
    }
  });
}
window.addEventListener("scroll", scrollActive);

/*==================== CHANGER L'EN-TÊTE DE FOND ====================*/
function scrollHeader() {
  const nav = document.getElementById("header");
  // Lorsque le défilement est supérieur à 200 hauteurs de viewport, ajoutez la classe scroll-header à la balise d'en-tête
  if (this.scrollY >= 80) nav.classList.add("scroll-header");
  else nav.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

/*==================== MONTRER LE DÉFILEMENT ====================*/
function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  // Lorsque le défilement est supérieur à 560 hauteurs de viewport, ajoutez la classe show-scroll à la balise a avec la classe scroll-top
  if (this.scrollY >= 560) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}
window.addEventListener("scroll", scrollUp);

/*==================== DARK LIGHT THEME ====================*/
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "uil-sun";

// Sujet précédemment sélectionné (si l'utilisateur a sélectionné)
const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

// Nous obtenons le thème actuel que l'interface a en validant la classe dark-theme
const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
  themeButton.classList.contains(iconTheme) ? "uil-moon" : "uil-sun";

// Initialisation immédiate du thème pour toutes les pages
document.addEventListener('DOMContentLoaded', () => {
    // Récupérer le thème sauvegardé
    const savedTheme = localStorage.getItem("selected-theme");
    const savedIcon = localStorage.getItem("selected-icon");

    if (!savedTheme) {
        // Première visite : appliquer le thème sombre par défaut
        document.body.classList.add(darkTheme);
        themeButton.classList.remove(iconTheme);
        localStorage.setItem("selected-theme", "dark");
        localStorage.setItem("selected-icon", "uil-moon");
    } else {
        // Appliquer le thème sauvegardé et l'icône correspondante
        document.body.classList[savedTheme === "dark" ? "add" : "remove"](darkTheme);
        themeButton.classList[savedIcon === "uil-moon" ? "remove" : "add"](iconTheme);
    }

    // Vérifier si nous sommes sur la page d'accueil pour appliquer la logique spécifique
    const homeSection = document.querySelector('.home.section');
    if (homeSection) {
        handleThemeOnScroll();
    } else {
        // Sur les autres pages, s'assurer que l'icône correspond au thème
        const currentTheme = document.body.classList.contains(darkTheme) ? "dark" : "light";
        themeButton.classList[currentTheme === "light" ? "remove" : "add"](iconTheme);
    }
});

// Fonction pour gérer le thème en fonction du scroll
function handleThemeOnScroll() {
    const homeSection = document.querySelector('.home.section');
    if (homeSection) {
        const scrollPosition = window.scrollY;
        if (scrollPosition < homeSection.offsetHeight) {
            // Dans la section home : forcer le thème sombre
            document.body.classList.add(darkTheme);
            themeButton.classList.add(iconTheme);
        } else {
            // En dehors de home : revenir au thème sélectionné
            const savedTheme = localStorage.getItem("selected-theme");
            const savedIcon = localStorage.getItem("selected-icon");
            document.body.classList[savedTheme === "dark" ? "add" : "remove"](darkTheme);
            themeButton.classList[savedIcon === "uil-moon" ? "add" : "remove"](iconTheme);
        }
    }
}

// Écouter le scroll
window.addEventListener('scroll', handleThemeOnScroll);

// Activate / deactivate the theme manually with the button
themeButton.addEventListener("click", () => {
    const homeSection = document.querySelector('.home.section');
    const scrollPosition = window.scrollY;
    
    // Vérifier si on est dans la section home
    if (homeSection && scrollPosition < homeSection.offsetHeight) {
        // Ne rien faire si on est dans la section home
        return;
    } else {
        // En dehors de home : permettre le changement de thème
        document.body.classList.toggle(darkTheme);
        themeButton.classList.toggle(iconTheme);
        localStorage.setItem("selected-theme", getCurrentTheme());
        localStorage.setItem("selected-icon", getCurrentIcon());
    }
});

// Appeler handleThemeOnScroll au chargement de la page
document.addEventListener('DOMContentLoaded', handleThemeOnScroll);

/* Nouveau Swiper avec configuration distincte */
let newSwiper = new Swiper(".new-swiper-container", {
  cssMode: true,
  loop: false,
  navigation: {
    nextEl: '.new-swiper-button-next',
    prevEl: '.new-swiper-button-prev',
    disabledClass: 'new-swiper-button-disabled',
  },
  pagination: {
    el: '.new-swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },
  slidesPerView: 1,
  spaceBetween: 30,
  grabCursor: true,
  effect: 'slide',
  speed: 400,
  observer: true,
  observeParents: true,
  resizeObserver: true,
  updateOnWindowResize: true,
  preventInteractionOnTransition: true
});

// Mise à jour du nouveau Swiper lors du redimensionnement
window.addEventListener('resize', () => {
  newSwiper.update();
});

// Gestion du modal pour la galerie
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('imageModal');
    const closeBtn = document.querySelector('.modal__close');
    const galleryItems = document.querySelectorAll('.gallery__item');
    const modalImages = document.querySelectorAll('.modal__image');

    // Ouvrir le modal et charger l'image immédiatement
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            
            // Force le chargement immédiat de l'image
            setTimeout(() => {
                modalImages[index].src = modalImages[index].dataset.fullsize;
                
                // Précharge les images adjacentes
                if (index < modalImages.length - 1) {
                    modalImages[index + 1].src = modalImages[index + 1].dataset.fullsize;
                }
                if (index > 0) {
                    modalImages[index - 1].src = modalImages[index - 1].dataset.fullsize;
                }
                
                newSwiper.slideTo(index, 0);
            }, 0);
        });
    });

    // Variable pour tracker l'index (fix cssMode bug)
    let lastIndex = 0;

    // S'assurer que l'image se charge à chaque changement de slide
    newSwiper.on('slideChange', function () {
        const currentIndex = newSwiper.activeIndex;
        setTimeout(() => {
            modalImages[currentIndex].src = modalImages[currentIndex].dataset.fullsize;
        }, 0);
        lastIndex = currentIndex;
    });

    // Fermer le modal
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    });

    // Fermer le modal en cliquant en dehors
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
    });

    // Fermer avec Echap
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.style.display === 'flex') {
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
});

