document.addEventListener('DOMContentLoaded', function() {
    const darkModeSwitch = document.getElementById('dark-mode-switch');
    const body = document.body;

    function setDarkMode(enabled) {
        body.classList.toggle('dark-mode', enabled);
        localStorage.setItem('dark-mode-enabled', enabled);
    }

    const storedDarkMode = localStorage.getItem('dark-mode-enabled');
    if (storedDarkMode) {
        darkModeSwitch.checked = storedDarkMode === 'true';
    }

    darkModeSwitch.addEventListener('change', (e) => {
        setDarkMode(e.target.checked);
    });

    setDarkMode(darkModeSwitch.checked);
});
