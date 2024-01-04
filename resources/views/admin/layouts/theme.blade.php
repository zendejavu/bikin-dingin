<script>
    // Theme switcher

    let themeSwitcher = document.getElementById('themeSwitcher');

    const getPreferredTheme = () => {
        if (localStorage.getItem('theme') != null) {
            return localStorage.getItem('theme');
        }

        return document.documentElement.dataset.theme;
    };

    const setTheme = function(theme) {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        } else {
            document.documentElement.dataset.theme = theme;
        }

        localStorage.setItem('theme', theme);
    };

    const showActiveTheme = theme => {
        const activeBtn = document.querySelector(`[data-theme-value="${theme}"]`);

        document.querySelectorAll('[data-theme-value]').forEach(element => {
            element.classList.remove('active');
        });

        activeBtn && activeBtn.classList.add('active');

        // Set button if demo mode is enabled
        document.querySelectorAll('[data-theme-control="theme"]').forEach(element => {
            if (element.value == theme) {
                element.checked = true;
            }
        });
    };

    function reloadPage() {
        window.location = window.location.pathname;
    }


    setTheme(getPreferredTheme());

    if (typeof themeSwitcher != 'undefined') {
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (localStorage.getItem('theme') != null) {
                if (localStorage.getItem('theme') == 'auto') {
                    reloadPage();
                }
            }
        });

        window.addEventListener('load', () => {
            showActiveTheme(getPreferredTheme());

            document.querySelectorAll('[data-theme-value]').forEach(element => {
                element.addEventListener('click', () => {
                    const theme = element.getAttribute('data-theme-value');

                    localStorage.setItem('theme', theme);
                    reloadPage();
                })
            })
        });
    }
</script>

<!-- Demo script -->
<script>
    var themeConfig = {
        theme: JSON.parse('"light"'),
        isRTL: JSON.parse('false'),
        isFluid: JSON.parse('true'),
        sidebarBehaviour: JSON.parse('"fixed"'),
        navigationColor: JSON.parse('"inverted"')
    };

    var isRTL = localStorage.getItem('isRTL') === 'true',
        isFluid = localStorage.getItem('isFluid') === 'true',
        theme = localStorage.getItem('theme'),
        sidebarSizing = localStorage.getItem('sidebarSizing'),
        linkLTR = document.getElementById('stylesheetLTR'),
        linkRTL = document.getElementById('stylesheetRTL'),
        html = document.documentElement;

    if (isRTL) {
        linkLTR.setAttribute('disabled', '');
        linkRTL.removeAttribute('disabled');
        html.setAttribute('dir', 'rtl');
    } else {
        linkRTL.setAttribute('disabled', '');
        linkLTR.removeAttribute('disabled');
        html.removeAttribute('dir');
    }
</script>
