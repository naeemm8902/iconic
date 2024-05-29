document.addEventListener('DOMContentLoaded', () => {
    // Inject cart HTML into the body
    const cartHtml = `
        <div class="cartitems-unique" id="carditems-unique">
            <div class="carditems-content-unique">
                <h1>Hello</h1>
                <p>This is the cart content.</p>
                <button class="close-cart-unique" onclick="hideBookCartUnique()">Close Cart</button>
            </div>
        </div>
    `;
    document.body.insertAdjacentHTML('beforeend', cartHtml);

    // Attach event listener to the cart icon
    const cartIconUnique = document.querySelector('.cart-icon');
    cartIconUnique.addEventListener('click', showBookCartUnique);

    // Theme toggle functionality
    const toggleSwitch = document.getElementById('theme-toggle');
    const body = document.body;
    const root = document.documentElement;
    const themeIcon = document.getElementById('theme-icon');

    function setLightMode() {
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
        root.style.setProperty('--black', '#1B1212');
        root.style.setProperty('--white', '#fff');
        localStorage.setItem('theme', 'light');
        themeIcon.src = './icons/off.png';
    }

    function setDarkMode() {
        body.classList.remove('light-mode');
        body.classList.add('dark-mode');
        root.style.setProperty('--black', '#fff');
        root.style.setProperty('--white', '#1B1212');
        localStorage.setItem('theme', 'dark');
        themeIcon.src = './icons/on3.png';
    }

    // Check the current theme and update the switch and root variables accordingly
    if (localStorage.getItem('theme') === 'dark') {
        toggleSwitch.checked = true;
        setDarkMode();
    } else {
        setLightMode();
    }

    toggleSwitch.addEventListener('change', () => {
        if (toggleSwitch.checked) {
            setDarkMode();
        } else {
            setLightMode();
        }
    });
});
