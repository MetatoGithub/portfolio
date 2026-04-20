const NAV_ITEMS = [
    { href: "index.html", label: "Quick Info" },
    { href: "projects.html", label: "Projects" },
    { href: "template-a.html", label: "Template A" },
    { href: "template-b.html", label: "Template B" },
    { href: "template-c.html", label: "Template C" },
    { href: "contact.html", label: "Contact" }
];

function getCurrentPage() {
    const path = window.location.pathname;
    const file = path.split("/").pop();
    return file && file.length > 0 ? file : "index.html";
}

function renderNavbar() {
    const slot = document.getElementById("site-header-slot");
    if (!slot) {
        return;
    }

    const currentPage = getCurrentPage();
    const brand = document.body.dataset.brand || "tim@portfolio:~$";

    const navLinks = NAV_ITEMS.map((item) => {
        const activeClass = item.href === currentPage ? " class=\"active\"" : "";
        return `<a${activeClass} href="${item.href}">${item.label}</a>`;
    }).join("");

    slot.innerHTML = `
        <header class="site-header">
            <div class="brand">${brand}</div>
            <nav class="site-nav" aria-label="Main navigation">
                ${navLinks}
            </nav>
        </header>
    `;
}

window.addEventListener("DOMContentLoaded", renderNavbar);
