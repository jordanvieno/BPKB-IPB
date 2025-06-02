const sidebar = document.querySelector(".sidebar");
const toggle = document.querySelector(".toggle");
const contentArea = document.getElementById("content-area");

// Sidebar toggle
toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
  document.querySelector(".home").classList.toggle("shrinked");
});

// Load page function
function loadPage(page) {
  fetch(`pages/${page}.html`)
    .then((res) => res.text())
    .then((html) => {
      contentArea.innerHTML = html;

      // Event initializer berdasarkan halaman
      if (page === "berita") initBeritaEvents();
      if (page === "documentation") initDocumentationEvents();

      updateActiveLink(page);
    });
}

// Removed event listeners that prevent default navigation on sidebar and bottom links

// Khusus Berita
function initBeritaEvents() {
  const addBtn = document.querySelector(".add-news");
  if (addBtn) {
    addBtn.addEventListener("click", () => loadPage("create-news"));
  }
  const editButtons = document.querySelectorAll(".edit-btn");
  editButtons.forEach((btn) => {
    btn.addEventListener("click", () => loadPage("edit-news"));
  });
}

//untuk documentation
function initDocumentationEvents() {
  const addDocBtn = document.querySelector(".fab-add");
  if (addDocBtn) {
    addDocBtn.addEventListener("click", () => loadPage("create-documentation"));
  }

  const editButtons = document.querySelectorAll(".edit-btn");
  editButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      loadPage("edit-documentation");
    });
  });
}

// Active Link Highlighter
function updateActiveLink(activePage) {
  document.querySelectorAll(".menu-links a").forEach((link) => {
    const page = link.getAttribute("data-page");
    if (page === activePage) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
}

// Load default page
// loadPage("dashboard");
