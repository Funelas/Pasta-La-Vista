<?php 
    session_start();

    $current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="header-area header-sticky">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                        <img class= "pasta-logo" src="assets/custom-images/Pasta La Vista Logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            
                            <li class="scroll-to-section"><a href="<?php if($current_page == 'index.php'){
                                echo "index.php#top";
                            }else{
                                echo "index.php";
                            }?>" class="<?php 
                                if($current_page == 'index.php'){
                                    echo 'active';
                                }else{
                                    echo '';
                                }
                            ?>">Home</a></li>
                            <?php if($current_page == 'index.php'){ ?>
                                <li class="scroll-to-section"><a href="<?php if($current_page == 'index.php'){
                                echo "index.php#about";
                            }else{
                                echo "index.php";
                            }?>">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            
                                <li class="scroll-to-section"><a href="<?php if($current_page == 'index.php'){
                                echo "index.php#chefs";
                            }else{
                                echo "index.php";
                            }?>">Chefs</a></li> 
                                <li class="scroll-to-section"><a href="<?php if($current_page == 'index.php'){
                                echo "index.php#con-info";
                            }else{
                                echo "index.php";
                            }?>">Contact Us</a></li> 
                            <?php } ?>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            
                            <li class="scroll-to-section"><a href="menu.php" class= "<?php 
                                if($current_page == 'menu.php'){
                                    echo 'active';
                                }else{
                                    echo '';
                                }
                            ?>">Menu</a></li>
                            <?php if(isset($_SESSION)){ ?>
                            <li class="scroll-to-section"><a href="login.php" class="<?php 
                                if($current_page == 'login.php' | $current_page == 'register.php'){
                                    echo 'active';
                                }else{
                                    echo '';
                                }
                            ?>">Log in / Register</a></li>
                            <?php }else{ ?>
                            <li class="scroll-to-section"><a href="appointment.php" class="<?php 
                                if($current_page == 'appointment.php'){
                                    echo 'active';
                                }else{
                                    echo '';
                                }
                            ?>">Set an Appointment</a></li>
                            <?php } ?>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php if($current_page == 'index.php'){ ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.scroll-to-section a');

        function clearActiveLinks() {
            links.forEach(link => link.classList.remove('active'));
        }

        function highlightCurrentSection() {
            const sections = document.querySelectorAll('section[id]');
            let currentSectionId = '';

            // Special case: if user is scrolled to very top, highlight "Home"
            if (window.scrollY < 50) {
                currentSectionId = 'top';
            } else {
                // Normal section detection
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 150;
                    const sectionBottom = sectionTop + section.offsetHeight;
                    if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
                        currentSectionId = section.getAttribute('id');
                    }

                });

                if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 10) {
                currentSectionId = 'con-info';
            }
            }

            clearActiveLinks();

            if (currentSectionId) {
                const activeLink = document.querySelector(`.scroll-to-section a[href*="#${currentSectionId}"]`);
                if (activeLink) activeLink.classList.add('active');
            }
        }

        function highlightOnLoad() {
            const hash = window.location.hash;

        clearActiveLinks(); // Always clear first

        if (hash) {
            const initialLink = document.querySelector(`.scroll-to-section a[href*="${hash}"]`);
            if (initialLink) initialLink.classList.add('active');
        } else if (window.scrollY < 50 && currentPage === 'index.php') {
            // Only highlight "Home" if on index.php and at top
            const homeLink = document.querySelector('.scroll-to-section a[href*="#top"]');
            if (homeLink) homeLink.classList.add('active');
        }
        }

        window.addEventListener('scroll', highlightCurrentSection);
        window.addEventListener('hashchange', highlightOnLoad);
        highlightOnLoad();  // Run on page load
        });

    </script>
    <?php } else{ ?>
        <script>function highlightCurrentSection() {
    const sections = document.querySelectorAll('section[id]');
    let currentSectionId = '';

    if (window.scrollY < 50) {
        // Very top of page, highlight Home
        currentSectionId = 'top';
    } else {
        // Loop through sections to find which section is in view
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            const sectionBottom = sectionTop + section.offsetHeight;

            if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
                currentSectionId = section.getAttribute('id');
            }
        });

        // ✅ This part checks if the user is at the bottom of the page
        if (window.scrollY + window.innerHeight >= document.documentElement.scrollHeight - 50) {
            currentSectionId = 'con-info';
        }
    }

    clearActiveLinks();

    if (currentSectionId) {
        const activeLink = document.querySelector(`.scroll-to-section a[href*="#${currentSectionId}"]`);
        if (activeLink) {
            activeLink.classList.add('active');
        }
    }
}
</script>

    <?php } ?>