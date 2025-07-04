// Mobile navigation toggle
const navToggle = document.getElementById("nav-toggle");
const navMenu = document.getElementById("nav-menu");

navToggle.addEventListener("click", () => {
  const expanded = navToggle.getAttribute("aria-expanded") === "true" || false;
  navToggle.setAttribute("aria-expanded", !expanded);
  navMenu.classList.toggle("show");
});

// Smooth scroll and active link switch on nav clicks
document.querySelectorAll(".nav-link").forEach((link) => {
  link.addEventListener("click", (e) => {
    const href = link.getAttribute("href");
    // Only prevent default for in-page links (starting with #)
    if (href.startsWith("#")) {
      e.preventDefault();
      const targetId = href.substring(1);
      const targetSection = document.getElementById(targetId);
      if (targetSection) {
        targetSection.focus();
        targetSection.scrollIntoView({ behavior: "smooth" });
      }
      // Close nav on mobile after click
      if (navMenu.classList.contains("show")) {
        navMenu.classList.remove("show");
        navToggle.setAttribute("aria-expanded", false);
      }
      // Update active link
      document
        .querySelectorAll(".nav-link")
        .forEach((nav) => nav.classList.remove("active"));
      link.classList.add("active");
    }
    // For normal links (not starting with #), let the browser handle navigation
  });
});

// User dropdown functionality
function toggleUserDropdown() {
  const dropdown = document.querySelector(".user-dropdown");
  if (dropdown) {
    dropdown.classList.toggle("active");
  }
}

// Close dropdown when clicking outside
document.addEventListener("click", function (event) {
  const dropdown = document.querySelector(".user-dropdown");
  const userLink = document.querySelector(".user-link");

  if (dropdown && !dropdown.contains(event.target)) {
    dropdown.classList.remove("active");
  }
});
