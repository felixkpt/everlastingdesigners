<div class="h-max-content">
    <div class="sidenav-inner">
        <script>
            const url = window.location.href.split('?')[0].split('#')[0];
            let links = document.getElementById('left-nav-menu').getElementsByClassName('link');
            for (let i = 0; i < links.length; i++) {
                let link = links[i];
                href = link.getAttribute('href');
                if (url == href) {
                    link.classList.add('active');
                }
            }
            links = document.getElementById('primary-nav').getElementsByClassName('link');
            for (let i = 0; i < links.length; i++) {
                let link = links[i];
                href = link.getAttribute('href');
                if (url == href || url == href + '/') {
                    link.classList.add('active');
                    link.setAttribute('aria-current', 'page')
                }
            }
        </script>
    </div>
    <!-- Sidebar End component -->
</div>