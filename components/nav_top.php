
<style>
    @import url(./assets/root.css);

.navtop {
        z-index: 1;
        background-color: var(--black); /* Ensure a default black color */
        height: 7vh;
        overflow: hidden;
        display: flex;
        align-items: center;
        color: #fff;
        justify-content: space-between;
        border-radius: 5px;
        padding: 0 10px; /* Add padding to ensure text isn't touching the edges */
    }

    .navtop p, .navtop span, .navtop div {
        margin: 0;
        color: var(--white);

    }

    .navtop a {
        /* color: white; */
        color: var(--white);
        text-decoration: none;
        padding: 14px 16px;

    }


    .navtop p,
    .navtop .c:hover,
    .navtop div a {

        cursor: pointer;
        transition: color 0.3s ease, background-color 0.3s ease; /* Transition added */
    }
    .navtop p,
    .navtop .c:hover,
    .navtop div a:hover {
        color: var(--yellow);
    }
    @media screen and (max-width: 1200px) {
        .navtop {
            flex-direction: row;
            height: auto;
            padding: 5px 10px;
            font-size: 16px;
        }

        .navtop a {
            padding: 10px 0;
        }

        .navtop .c {
            display: none;
        }
        .navtop .c:hover,
        .navtop div a:hover {
            /* color: var(--yellow);  */
            color: red;
            background-color: rebeccapurple;
        }

    }
    @media screen and (max-width: 900px) {
        .navtop {
            flex-direction: column;
            height: auto;
            padding: 5px 10px;
            font-size: 14px;
        }

        .navtop a {
            padding: 10px 0;
        }

        .navtop .c {
            display: none;
        }
    }

    @media screen and (max-width: 600px) {
        .navtop {
            flex-direction: column;
            height: auto;
            padding: 10px 10px;
            font-size: 14px;
        }

        .navtop .c, .navtop div {
            display: none;
        }
    }

    @media screen and (max-width: 360px) {
        .navtop {
            flex-direction: row;
            height: auto;
            padding: 10px 10px;
            font-size: 12px;
            align-items: center;
            justify-content: space-between;
        }
        .navtop .c, .navtop div {
            display: none;
        }
    }
</style>
<div class="navtop">
        <p>30 DAYS REFUND GUARANTEE</p>
        <span class="c">COUNTRYWISE DELIVERY | FREE ISLAMABAD DELIVERY</span>
        <div>
            <a href="#">| CONTACT US |</a>
            <a href="components/auth/login.php">| LOGIN |</a>
            <a href="#">| REGISTER |</a>
        </div>
</div>
