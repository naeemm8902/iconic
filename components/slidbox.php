<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <style>
        @import url(./assets/root.css);

        .slider-container {
            width: 100%;
            overflow: hidden;
            margin: 20px auto;
            z-index: 1;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slider {
            z-index: ;
            width: 95%;
            background-color: transparent;
            height: 100vh;
            margin-top: 20px;
        }

        .card {
            margin-top: 20px;

            height: 450px;
            width: 100%;
            margin: 0 10px;
            border: 2px solid #ddd;
            border-radius: 10px;
            background-color: var(--white);
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;
            text-align: center;
            /* padding: 10px; */
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            background-image: url(book-1.png    );
        }

       .card:hover {
            /* height: auto; */

            transform: translateY(10px); 
            box-shadow: rgba(0, 0, 0, 0.25) 0px 10px 20px;
        }
     
        .card img {
            max-width: 100%;
            /* height: 230px; */
            /* border-radius: 15px 5px 0 0; */
            object-fit: cover;
        }

        .card h2 {
            /* margin-top: 15px; */
            font-size: 20px;
            color: var(--yellow);
        }

        .card p {
            color: var(--black);
            /* line-height: 1.6; */
            font-size: 14px;
            /* margin: 10px 0; */
        }

        .slick-prev, .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 30%;
            display: block;
            width: 30px;
            height: 40px;
            padding: 0;
            transform: translate(0, -50%);
            cursor: pointer;
            color: transparent;
            border: none;
            outline: none;
            background: transparent;
            z-index: 1000;
        }

        .slick-prev:hover, .slick-next:hover, .slick-prev:focus, .slick-next:focus {
            color: transparent;
            outline: none;
            background: transparent;
        }

        .slick-prev {
            left: -25px;
        }

        .slick-next {
            right: -25px;
        }

        .slick-prev:before, .slick-next:before {
            font-family: 'slick';
            font-size: 60px;
            line-height: 1;
            opacity: .75;
            color: var(--yellow);
            margin-left: -15px;
        }

        .slick-prev:before {
            content: '←';
        }

        .slick-next:before {
            content: '→';
        }
        .card button {
            margin: 10px 0;
            padding: 10px 20px;
            font-size: 16px;
            color: var(--white);
            background-color:var(--yellow);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .card button:hover {
            background-color: var(--black);
        }
        .card .tag{
            font-size: 11px;
            color: var(--black);
        }
        .star{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 5px;
            z-index: 5;
            margin-top: 15px;
            margin-bottom: 5px;

        }
        .star img{
            width: 15px;
            height: 15px;
            margin: 2px;
            
        }
        .price-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            gap: 10px;
        }

        .price-container .original-price {
            color: #999;
            text-decoration: line-through;
            font-size: 16px;
        }

        .price-container .discounted-price {
            color: #e60000;
            font-size: 20px;
            font-weight: bold;
        }

        .price-container .currency-symbol {
            font-size: 20px;
        }
        @media only screen and (max-width: 1200px) {
            .card {
                height: auto;
            }
        }

        @media only screen and (max-width: 900px) {
            .card {
                height: 430px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card img {
                height: 250px;
                width: 90%;
            }
              .star{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 5px;
            z-index: 5;
            margin-top: 15px;
            margin-bottom: 5px;

        }
        .star img{
            width: 15px;
            height: 15px;
            margin: 2px;
            
        }   
            .slick-prev:before, .slick-next:before {
                font-size: 50px;
            }
        }

        @media only screen and (max-width: 768px) {
            .card {
                height: 430px;
                margin: 0 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card img {
                height: 250px;
                width: 90%;
            }
              .star{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 5px;
            z-index: 5;
            margin-top: 15px;
            margin-bottom: 5px;

        }
        .star img{
            width: 15px;
            height: 15px;
            margin: 2px;
            
        }
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <div class="slider">
            
           
            <div class="card" id="card">
                <img src="./images/book-2.png" alt="Image 2">
                <h2>About The First Night</h2>
                <p>Stuart Solimide</p>
                <div class="price-container">
                    <span class="currency-symbol">₨.</span>
                    <span class="discounted-price">1050</span>
                    <span class="original-price">1200</span>
                </div>
                <p class="tag">New</p>
                <div class="star">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                </div>
                <button onclick="hideBookCartUnique() id="openCartButton">Add to Basket</button>
            </div>
            <div class="card" id="card">
                <img src="./images/book-3.png" alt="Image 2">
                <h2>Open The Sky</h2>
                <p>Novalee Spicer</p>
                <div class="price-container">
                    <span class="currency-symbol">₨.</span>
                    <span class="discounted-price">700</span>
                    <span class="original-price">900</span>
                </div>
                <p class="tag">New</p>
                <div class="star">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                </div>
                <button onclick="shopping()">Add to Basket</button>
            </div>
            <div class="card" id="card">
                <img src="./images/book-4.png" alt="Image 2">
                <h2>Book Hardcover</h2>
                <p>Hegan Rovan</p>
                <div class="price-container">
                    <span class="currency-symbol">₨.</span>
                    <span class="discounted-price">850</span>
                    <span class="original-price">1000</span>
                </div>
                <p class="tag">New</p>
                <div class="star">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                </div>
                <button onclick="shopping()">Add to Basket</button>
            </div>
            <div class="card" id="card">
                <img src="./images/book-5.png" alt="Image 2">
                <h2>Big Book Of Science</h2>
                <p>Edvert Putin</p>
                <div class="price-container">
                    <span class="currency-symbol">₨.</span>
                    <span class="discounted-price">700</span>
                    <span class="original-price">800</span>
                </div>
                <p class="tag">New</p>
                <div class="star">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                </div>
                <button onclick="shopping()">Add to Basket</button>
            </div>
            <div class="card" id="card">
                <img src="./images/book-6.png" alt="Image 2">
                <h2>By The Air</h2>
                <p>Katherine Moss</p>
                <div class="price-container">
                    <span class="currency-symbol">₨.</span>
                    <span class="discounted-price">550</span>
                    <span class="original-price">600</span>
                </div>
                <p class="tag">New</p>
                <div class="star">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                </div>
                <button onclick="shopping()">Add to Basket</button>
            </div>
            <div class="card" id="card">
                <img src="./images/book-7.png" alt="Image 2">
                <h2>Murdering Last Year</h2>
                <p>James Randalph</p>
                <div class="price-container">
                    <span class="currency-symbol">₨.</span>
                    <span class="discounted-price">500</span>
                    <span class="original-price">900</span>
                </div>
                <p class="tag">New</p>
                <div class="star">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                </div>
                <button onclick="shopping()">Add to Basket</button>
            </div>
            <div class="card" id="card">
                <img src="./images/book-8.png" alt="Image 2">
                <h2>Work Out Eat Well</h2>
                <p>Mellisa Gomez</p>
                <div class="price-container">
                    <span class="currency-symbol">₨.</span>
                    <span class="discounted-price">500</span>
                    <span class="original-price">900</span>
                </div>
                <p class="tag">New</p>
                <div class="star">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                    <img src="./icons/star.svg" alt="Image 2">
                </div>
                <button onclick="shopping()">Add to Basket</button>
            </div>
            
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="bookCart.js"></script>

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: true
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 380,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.card').each(function(index) {
                $(this).delay(150 * index).fadeIn(300);
            });
        });

        // Function
        console.log("1111");
        // function shopping() {
        //     console.log("2222");
        //    // Example of calling the function on a button click
        //     let openCartButton = document.querySelector('#openCartButton');
        //     openCartButton.addEventListener('click', showBookCart);
        // }
        console.log("3333");

    </script>


</body>
</html>
