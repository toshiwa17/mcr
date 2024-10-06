<!--Navigation Bar-->
<header>
    <img class="mcrlogo" src="Picture/MCRAgriventure(white).png" alt="logo" height="50px" />
    <nav>
        <ul class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <li>
                <a href="index"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"><i class="fas fa-shopping-bag"></i> Products</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item rounded-0" href="seeds">Seeds</a>
                        <a class="dropdown-item rounded-0" href="garden-equipment">Garden Equipment</a>
                        <a class="dropdown-item rounded-0" href="pets">Pets</a>
                        <a class="dropdown-item rounded-0" href="veterinary">Veterinary</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="branches"><i class="fas fa-map-marker-alt"></i> Branches</a>
            </li>
            <li>
                <a href="News&Events"><i class="fa-regular fa-newspaper"></i> News And Events
                </a>
            </li>
            <li>
                <a href="career"><i class="fa-solid fa-suitcase"></i> Career
                </a>
            </li>
            <li>
                <a href="index#history"><i class="fas fa-info-circle"></i> About Us</a>
            </li>
        </ul>
    </nav>

    <a class="cta-nav" href="contact">
        <button><i class="fas fa-phone-alt"></i> Contact Us</button>
    </a>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</header>