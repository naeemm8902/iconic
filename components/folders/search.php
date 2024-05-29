<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url(./assets/root.css);

        .search-container {
            height: 10vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 5px;
            margin-top: 3px;
            width: 100%;
            padding: 0 10px;
        }

        /* Style the search bar */
        .search-bar {
            display: flex;
            justify-content: flex-end;
            width: 70%;
        }

        .cart-container {
            width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Style the input box */
        .search-input {
            width: 60%;
            display: flex;
            justify-content: center;
        }

        .search-input input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--yellow);
            font-size: 16px;
            outline: none;
            border-radius: 5px;
        }

        .search-input input[type="text"]:hover {
            background: #E5EFD7;
        }

        /* Style the cart icon and text */
        .cart-icon {
            color: var(--black);
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .cart-icon span {
            color: var(--yellow);
            margin-right: 5px;
        }

        .cart-icon img {
            width: 30px;
        }

        /* Toggle */
        body.light-mode {
            background-color: white;
            color: black;
        }

        body.dark-mode {
            background-color: black;
            color: white;
        }

        .cart-icon {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* The switch - the box around the slider */
        .switch {
            position: relative;
            top: -20px;
            width: 60px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .switch img {
            width: 35px;
            height: 35px;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        /* Cart items */
        .cartitems-unique {
            display: none; /* Initially hide the cart container */
            position: fixed;
            width: 100%;
            height: 80vh;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 80%;
            z-index: 9999;
        }

        .carditems-content-unique {
            text-align: center;
        }

        /* Responsive adjustments */
        @media (max-width: 900px) {
            .search-container {
                flex-direction: row;
                justify-content: space-around;
            }
            .search-bar {
                width: 40%;
                justify-content: flex-start;
            }
            .cart-container {
                width: 10%;
                justify-content: flex-start;
                margin-top: 10px;
            }
            .search-input {
                width: 100%;
                justify-content: center;
            }
            .cart-container {
                width: 35%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .switch {
                width: 40px;
            }

            .slider:before {
                height: 16px;
                width: 16px;
                left: 2px;
                bottom: 2px;
            }

            input:checked + .slider:before {
                transform: translateX(20px);
            }
        }
        @media (max-width: 768px) {
            .search-container {
                flex-direction: row;
                justify-content: space-around;
            }
            .search-bar {
                width: 40%;
                justify-content: flex-start;
            }
            .cart-container {
                width: 10%;
                justify-content: flex-start;
                margin-top: 10px;
            }
            .search-input {
                width: 100%;
                justify-content: center;
            }
            .cart-container {
                width: 35%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .switch {
                width: 40px;
            }

            .slider:before {
                height: 16px;
                width: 16px;
                left: 2px;
                bottom: 2px;
            }

            input:checked + .slider:before {
                transform: translateX(20px);
            }
        }

        @media (max-width: 506px) {
            .search-container {
                flex-direction: column;
                justify-content: center;
                margin-top: 15px;
            }
            .search-input input[type="text"] {
                margin-top: 40px;
            }
            .search-bar {
                width: 90%;
                justify-content: flex-end;
            }
            .cart-container {
                width: 90%;
                justify-content: center;
            }
            .search-input {
                width: 100%;
                justify-content: center;
            }
            .cart-icon {
                display: flex;
                align-items: center;
                gap: 10px;
                position: relative;
                top: -18px;
            }
            .cart-container {
                width: 15%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .switch {
                width: 40px;
            }

            .slider:before {
                height: 14px;
                width: 16px;
                left: 2px;
                bottom: 2px;
            }

            input:checked + .slider:before {
                transform: translateX(20px);
            }
        }
    </style>
</head>
<body>

    <div class="search-container light-mode">
        <div class="search-bar">
            <div class="search-input">
                <input type="text" placeholder="Search...">
            </div>
        </div>
        <div class="cart-container">
            <div class="cart-icon" onclick="showBookCartUnique()">
                <span>Cart</span>
                <img src="./icons/cart2.svg" alt="Cart">
                <span>0</span>

            </div>
            <div class="cart-icon">
                <span>Light</span>
                <label class="switch">
                    <input type="checkbox" id="theme-toggle">
                    <img id="theme-icon" src="./icons/off.png" alt="Theme Toggle" class="slider">
                </label>
                <span>Dark</span>
            </div>
        </div>
    </div>

    <!-- Cart container HTML (initially hidden) -->
    <!-- <div class="cartitems-unique" id="carditems-unique">
        <div class="carditems-content-unique">
            <h1>Hello</h1>
            <p>This is the cart content.</p>
            <button class="close-cart-unique" onclick="hideBookCartUnique()">Close Cart</button>
        </div>
    </div> -->
    <script>
    function showBookCartUnique() {
            document.getElementById('carditems-unique').style.display = 'block';
        }
        // Function to hide the cart
        function hideBookCartUnique() {
            document.getElementById('carditems-unique').style.display = 'none';
        }
        document.addEventListener('DOMContentLoaded', () => {
            const cartIconUnique = document.querySelector('.cart-icon');
            // Event listener for cart icon click
            cartIconUnique.addEventListener('click', showBookCartUnique);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
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
    </script>
</body>
</html>
