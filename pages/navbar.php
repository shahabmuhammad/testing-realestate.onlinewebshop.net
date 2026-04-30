<header class="header" id="header">
    <div class="logo">
        <a href="/">
            <img
                src="assets/img/Paragon-Heights-Logo-01-updated.png"
                alt="Logo">
        </a>
    </div>
    <div class="menu">
        <ul class="menu_list">
            <li class="header_menu">
                <a href="properties-listing.php">Properties</a>
                <ul class="_dropdown">
                    <li class="_dropdown-item">
                        <a href="properties-listing.php" data-uw-original-href="properties-listing.php">Land Opportunities</a>
                    </li>
                    <li class="_dropdown-item">
                        <a>Property Block Categories</a>
                    </li>
                </ul>
            </li>
            <li class="header_menu"><a href="#">Prime Location</a></li>
            <li class="header_menu"><a class="openModal" type="button">Contact Us</a></li>
            <li class="header_menu"><a href="tel:+92-332-7272448">0332 7272448</a></li>
            <li class="hamburger-menu-icon"><a onclick="toggleMenu()">&#9776;</a></li>
        </ul>
    </div>
</header>

<div class="sidebar-menu" id="sidebarMenu">
    <div class="close-icon" onclick="toggleMenu()">&#10005;</div>
    <ul class="extended-menu">
        <li><a href="/">Home</a></li>
        <li><a href="#">Why Paragon</a></li>
            <li><a href="#">Our Vision</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Why Gwadar</a></li>
        <li><a href="#">Our Services</a></li>
    </ul>
</div>

<script>
        function toggleMenu() {
    const sidebarMenu = document.getElementById("sidebarMenu");
    sidebarMenu.classList.toggle("open");
}

        
        let lastScrollTop = 0;
            const header = document.getElementById("header");

            window.addEventListener("scroll", function () {
                let scrollTop = window.scrollY || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    // Scroll Down: Hide Header
                    header.classList.add("hidden");
                } else {
                    // Scroll Up: Show Header & Make Dark
                    header.classList.remove("hidden");
                    header.classList.add("dark");
                }

                // Back to top: Make Transparent Again
                if (scrollTop === 0) {
                    header.classList.remove("dark");
                }

                lastScrollTop = scrollTop;
            });        
</script>