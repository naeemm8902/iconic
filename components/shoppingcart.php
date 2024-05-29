<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Cart</title>
    <style>
        body {
            background: #ddd;
            min-height: 100vh;
            display: flex;
            font-family: 'Trebuchet MS', Arial, sans-serif;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .header .item {
            margin-bottom: 5vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header b {
            font-size: 1.5rem;
        }

        .container {
            margin: auto;
            max-width: 950px;
            width: 90%;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 1rem;
            border: transparent;
        }

        .inner-container {
            margin: 0;
            display: flex;
        }

        .cart-section {
            margin: auto;
            max-width: 950px;
            width: 90%;
            background-color: #fff;
            padding: 4vh 5vh;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem;
        }

        .book-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media screen and (max-width: 450px) {
            .header .item {
                display: grid;
                justify-content: space-between;
                align-items: center;
            }

            .header h4 b {
                font-size: 1.25rem;
            }

            .cart-section {
                width: 63%;
                padding: 4vh 2vh;
            }

            .book-item {
                display: grid;
                grid-template-columns: repeat(2, 2fr);
                align-items: center;
            }

            .quantity form {
                margin-left: 1rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: larger;
            }

            .price {
                margin-left: 1rem;
            }

            .delete-btn {
                margin-left: 2.5rem;
                width: 30px;
                height: 30px;
                padding: 5px;
                text-align: center;
            }

            .summary-section {
                width: 37%;
                background-color: #ddd;
                border-top-right-radius: 1rem;
                border-bottom-right-radius: 1rem;
                padding: 3vh;
                color: rgb(65, 65, 65);
            }

            input#promo-code {
                background-image: none;
                background-repeat: no-repeat;
                background-position-x: 95%;
                background-position-y: center;
            }
        }

        img {
            width: 3.5rem;
        }

        .img-header {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .book-img {
            margin-right: 0.3rem;
        }

        .quantity form {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: larger;
        }

        .value-btn {
            width: 20px;
            height: 20px;
            text-align: center;
            user-select: none;
        }

        .value-btn:hover {
            cursor: pointer;
        }

        input#quantity {
            text-align: center;
            border: none;
            width: 20px;
            height: 20px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .price {
            display: inline;
        }

        .delete-btn {
            width: 30px;
            height: 30px;
            padding: 5px;
            text-align: center;
        }

        .delete-btn:hover {
            background: rgb(190, 189, 189);
            color: #fff;
            border-radius: 50%;
        }

        .back-to-store {
            margin-top: 2rem;
            display: inline-block;
            font-size: small;
        }

        .back-to-store:hover {
            cursor: pointer;
        }

        .summary-section {
            width: 35%;
            background-color: #ddd;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 4vh;
            color: rgb(65, 65, 65);
        }

        .summary-section b {
            font-size: medium;
            margin-bottom: 15px;
        }

        hr {
            margin-top: 0.75rem;
            background-color: rgb(212, 212, 212);
            margin-bottom: 0.5rem;
        }

        .summary-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .summary-item {
            padding: 0 1vh;
            margin-bottom: 0.3rem;
        }

        .summary-amount {
            padding: 0 1vh;
        }

        .summary-section form {
            padding: 2vh 0;
        }

        select {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1.5vh 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        .summary-section input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .btn {
            background-color: #000;
            border-color: #000;
            color: white;
            width: 100%;
            font-size: 0.7rem;
            margin-top: 4vh;
            padding: 1vh;
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            transition: none;
        }

        .btn:hover {
            background-color: white;
            color: black;
            cursor: pointer;
            border-color: white;
            font-weight: bold;
        }

        #promo-code {
            background-image: url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center;
        }

        .summary-total {
            border-top: 1px solid rgba(0, 0, 0, .1);
            padding: 2vh 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="inner-container">
            <section class="cart-section">
                <section class="header">
                    <div class="item">
                        <div class="title">
                            <h4><b>Library Cart</b></h4>
                        </div>
                        <div class="item-count">3 items</div>
                    </div>
                </section>
                <hr>
                <section class="book-card-1">
                    <div class="book-item">
                        <div class="img-header">
                            <div class=""><img class="book-img" src="book.png"></div>
                            <div class="">
                                <div class="book-title">Book Title</div>
                                <div class="book-category">Categories</div>
                            </div>
                        </div>
                        <div class="quantity">
                            <form>
                                <div class="value-btn" id="decrement" value="Decrease Value">-</div>
                                <input type="number" id="quantity" value="1" />
                                <div class="value-btn" id="increment" value="Increase Value">+</div>
                            </form>
                        </div>
                        <div class="price">&dollar;<span>44.00</span></div>
                        <div title="Delete Icon" class="delete-btn">&#10005;</div>
                    </div>
                    <hr>
                </section>
                <section class="book-card-2">
                    <div class="book-item">
                        <div class="img-header">
                            <div class=""><img class="book-img" src="./images/book-1.png"></div>
                            <div class="">
                                <div class="book-title">Book Title</div>
                                <div class="book-category">Categories</div>
                            </div>
                        </div>
                        <div class="quantity">
                            <form>
                                <div class="value-btn" id="decrement" value="Decrease Value">-</div>
                                <input type="number" id="quantity" value="1" />
                                <div class="value-btn" id="increment" value="Increase Value">+</div>
                            </form>
                        </div>
                        <div class="price">&dollar;<span>44.00</span></div>
                        <div class="delete">
                        <div class="delete-btn">&#10005;</div>
                    </div>
                    <hr>
                </section>
                <section class="book-card-3">
                    <div class="book-item">
                        <div class="img-header">
                            <div class=""><img class="book-img" src="./images/book-1.png"></div>
                            <div class="">
                                <div class="book-title">Book Title</div>
                                <div class="book-category">Categories</div>
                            </div>
                        </div>
                        <div class="quantity">
                            <form>
                                <div class="value-btn" id="decrement" value="Decrease Value">-</div>
                                <input type="number" id="quantity" value="1" />
                                <div class="value-btn" id="increment" value="Increase Value">+</div>
                            </form>
                        </div>
                        <div class="price">&dollar;<span>44.00</span></div>
                        <div class="delete-btn">&#10005;</div>
                    </div>
                    <hr>
                </section>
                <div class="back-to-store">&leftarrow;&nbsp;Back to store</div>
            </section>
            <section class="summary-section">
                <div>
                    <p><b>Summary</b></p>
                    <hr>
                    <div class="summary-details">
                        <div class="summary-item">ITEMS-<span>200</span></div>
                        <div class="summary-amount">&dollar;<span>30000.00</span></div>
                    </div>
                    <form action="">
                        <p>SHIPPING</p>
                        <select>
                            <option class="delivery">Delivery-&dollar;10.00</option>
                        </select>
                        <p>GIVE CODE</p>
                        <input id="promo-code" placeholder="Enter your code">
                    </form>
                    <div class="summary-total">
                        <div class="total-title">TOTAL PRICE</div>
                        <div class="total-amount">&dollar; 310.00</div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                </div>
            </section>
        </div>
    </div>
</body>
<script>
    let price = document.querySelector(".price span");
    let quantity = parseInt(document.querySelector('#quantity').value);
    let countQty = document.querySelector('#quantity');
    let bookPrice = 100.00;
    let deleteItem = document.querySelector('.delete-btn');
    let decrement = document.querySelector("#decrement");
    let increment = document.querySelector("#increment");

    price.textContent = bookPrice;

    function increaseValue() {
        quantity++;
        countQty.value = quantity;
        price.innerText = bookPrice * countQty.value;
    }

    function decreaseValue() {
        quantity--;
        quantity < 1 ? quantity = 1 : '';
        countQty.value = quantity;
        price.textContent = bookPrice * countQty.value;
    }

    increment.addEventListener('click', increaseValue);
    decrement.addEventListener('click', decreaseValue);

    deleteItem.addEventListener('click', () => {
        alert("You want to remove from the cart");
    });

    const backToStore = document.querySelector('.back-to-store');
    backToStore.addEventListener('click', () => {
        alert("Back to Store");
    });
</script>
</html>
