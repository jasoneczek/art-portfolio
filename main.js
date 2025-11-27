/***********************
 * HAMBURGER MENU
 ************************/
const hamburger = document.querySelector(".hamburger");
const linksWrapper = document.querySelector(".links");
const closeButton = document.querySelector(".menu-close");
const links = document.querySelectorAll(".links a");

if (hamburger && linksWrapper) {
  hamburger.addEventListener("click", () => {
    const isOpen = linksWrapper.classList.toggle("open");
    hamburger.classList.toggle("active", isOpen);
    hamburger.setAttribute("aria-expanded", isOpen ? "true" : "false");
  });
}

if (closeButton && linksWrapper && hamburger) {
  closeButton.addEventListener("click", () => {
    linksWrapper.classList.remove("open");
    hamburger.classList.remove("active");
    hamburger.setAttribute("aria-expanded", "false");
  });
}

/* close menu when a nav link is tapped (mobile) */
links.forEach((link) =>
  link.addEventListener("click", () => {
    linksWrapper.classList.remove("open");
    hamburger.classList.remove("active");
    hamburger.setAttribute("aria-expanded", "false");
  })
);

/***********************
 * FEATURED ARTWORK ROTATION
 ************************/

const featuredImages = [
  {
    src: "./assets/img/vincent-price.jpg",
    alt: "Black and white portrait painting of Vincent Price as the Witchfinder General",
  },
  {
    src: "./assets/img/cowboy.jpg",
    alt: "Black and white portrait painting of a rugged, bearded cowboy",
  },
  {
    src: "./assets/img/handmaid.jpg",
    alt: "Colored pencil drawing on gray toned paper of Elizabeth Moss as Offred from The Handmaid's Tale",
  },
];

let currentFeatured = 0;
const featuredImgElement = document.getElementById("featured-img");

function updateFeaturedImage() {
  currentFeatured = (currentFeatured + 1) % featuredImages.length;
  const next = featuredImages[currentFeatured];

  featuredImgElement.src = next.src;
  featuredImgElement.alt = next.alt;
}

// Change image every 4 seconds
setInterval(updateFeaturedImage, 4000);

/***********************
 * FORM VALIDATION
 ************************/

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactForm");
  const nameField = document.getElementById("name");
  const emailField = document.getElementById("email");
  const messageField = document.getElementById("message");
  const errorBox = document.getElementById("formErrors");

  form.addEventListener("submit", function (e) {
  errorBox.textContent = "";
  let errors = [];

  if (nameField.value.trim().length < 2) {
    errors.push("Name must be at least 2 characters.");
  }

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(emailField.value.trim())) {
    errors.push("A valid email is required.");
  }

  if (messageField.value.trim().length < 10) {
    errors.push("Message must be at least 10 characters.");
  }

  if (errors.length > 0) {
    e.preventDefault();
    errorBox.innerHTML = errors.join("<br>");
    return;
  }
});

});
