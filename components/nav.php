<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

    /* * {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    } */

    /* body {
        z-index: 999;
        padding: 0;
        margin: 0;
        font-family: "Poppins", sans-serif;
    } */

    nav {
        /* background-color: var(--white);
         */
         background-color: var(--yellow);
        position: sticky;
        top: 10;
        padding: 12px 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
            rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        z-index: 1;
        border-radius: 5px;
    }

    nav .logo {
        display: flex;
        align-items: center;
    }

    nav .logo img {
        height: 25px;
        width: auto;
        margin-right: 10px;
    }

    nav .logo h1 {
        font-size: 1.1rem;
        /* color: var(--black); */
        background-color: var(--black);
        /* background: linear-gradient(to right, #b927fc 0%, #2c64fc 100%); */
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        cursor: pointer;
    }

    nav ul {
        list-style: none;
        display: flex;
    }

    nav ul li {
        margin-left: 1.5rem;
    }

    nav ul li a {
        text-decoration: none;
        /* color: #000; */
        color: var(--black);
        font-size: 95%;
        font-weight: 400;
        padding: 4px 8px;
        border-radius: 5px;
        transition: color 0.3s ease;
    }

    nav ul li a:hover {
        /* color: var(--yellow); */
        color: var(--white);
        /* border-bottom: 2px solid var(--yellow); */
    }

    .hamburger {
        display: none;
        cursor: pointer;
    }

    .hamburger .line {
        width: 25px;
        height: 1px;
        background-color: var(--black);
        display: block;
        margin: 7px auto;
        transition: all 0.3s ease-in-out;
    }

    .hamburger-active {
        transition: all 0.3s ease-in-out;
        transition-delay: 0.6s;
        transform: rotate(45deg);
    }

    .hamburger-active .line:nth-child(2) {
        width: 0px;
    }

    .hamburger-active .line:nth-child(1),
    .hamburger-active .line:nth-child(3) {
        transition-delay: 0.3s;
    }

    .hamburger-active .line:nth-child(1) {
        transform: translateY(12px);
    }

    .hamburger-active .line:nth-child(3) {
        transform: translateY(-5px) rotate(90deg);
    }

    .menubar {
        position: absolute;
        top: 0;
        left: -60%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        width: 60%;
        height: 100vh;
        padding: 20% 0;
        /* background: rgba(255, 255, 255); */
        background-color: var(--white);
        transition: all 0.5s ease-in;
        z-index: 999;
        /* overflow: hidden; */
    }

    .active {
        left: 0;
        position: fixed;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .menubar ul {
        padding: 0;
        list-style: none;
    }

    .menubar ul li {
        margin-bottom: 32px;
    }

    .menubar ul li a {
        text-decoration: none;
        /* color: #000; */
        color: var(--black);
        font-size: 95%;
        font-weight: 400;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .menubar ul li a:hover {
        background-color: #f5f5f5;
    }

    @media screen and (max-width: 790px) {
        .hamburger {
            display: block;
        }

        nav ul {
            display: none;
        }
    }
</style>

<body>
    <nav>
        <div class="logo">
            <img src="./images/bookicon.png" alt="logo" />
            <!-- <h1>Iconic Book Store</h1> -->
            <h1>Iconic Bookies<sup>™</sup></h1>

        </div>
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </nav>
    <div class="menubar">
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
        </ul>
    </div>

    <script>
        const mobileNav = document.querySelector(".hamburger");
        const navbar = document.querySelector(".menubar");

        const toggleNav = () => {
            navbar.classList.toggle("active");
            mobileNav.classList.toggle("hamburger-active");
        };
        mobileNav.addEventListener("click", () => toggleNav());

    </script>
</body>

</html>