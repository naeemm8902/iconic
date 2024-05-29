<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <style>
@import url(./assets/root.css);
.info {
    position: -webkit-sticky; /* for Safari */
    height: 100vh; 
    position: sticky;
    top: 0;
    border-radius: 10px;
    text-align: center;
    background-image: url("./images/cov2.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    z-index: 1;
    /* overflow: hidden;  */
}

.info::before {
    content: '';
    position: absolute; 
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url("./images/cov2.jpg"); /* Use the same background image */
    background-size: cover;
    background-position: center;
    filter: blur(2px);
    z-index: -1; /* Place behind the .info content */
    border-radius: inherit; /* Match the border radius of the .info element */
}

.info-container {
    position: sticky; 
    top: 0;
    z-index: 1;
    max-width: 1200px;
    margin: 0 auto;
}

.info-subtitle {
    font-size: 18px;
    color: var(--lightyellow);
    margin-bottom: 10px;
}

.info-title {
    font-size: 32px;
    color: var(--lightyellow);
    margin-bottom: 20px;
}

.info-section-text {
    font-size: 16px;
    font-weight: 500;
    /* color: var(--lightyellow); */
    margin-bottom: 30px;
}

.info-list {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
    list-style: none;

}

.info-list {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding: 0;
    margin: 0;
}

.info-list li {
    margin: 0 10px;
    padding: 10px;
    text-align: center;
    border: 2px solid var(--lightyellow);
    border-radius: 10px;
    color: var(--lightyellow);
    font-family: 'Arial', sans-serif;
    font-size: 1.2em;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, background-color 0.3s ease;
    cursor: pointer;
}

.info-list li:hover {
    transform: translateY(-5px);
    background-color: var(--yellow);
    color: #fff;
}

/* .info-list li span {
    display: block;
    font-size: 0.8em;
    color: var(--white);
} */


.info-time {
    font-size: 24px;
    font-weight: bold;
}

.info-countdown {
    font-size: 14px;
}

.info-btn {
    display: inline-block;
    cursor: pointer;
    margin-top: 50px;
    padding: 10px 20px;
    border: 1px solid var(--white);
    color: var(--white); 
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    position: relative; 
}

.info-btn:hover {
    background-color: var(--yellow);
    color: var(--white);
}

/* Media query for responsiveness */
@media (max-width: 768px) {
        .info {
        height: 100vh; 
        position: sticky;
        top: 0;
        border-radius: 10px;
        text-align: center;
        background-image: url("./images/cov2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        z-index: 1;
        /* overflow: hidden;  */
    }

    .info::before {
        content: '';
        position: absolute; 
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("./images/cov2.jpg");
        background-size: cover;
        background-position: center;
        filter: blur(2px);
        z-index: -1; 
        border-radius: inherit; 
    }

    .info-container {
        position: relative; 
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
    }
    .info-title {
        font-size: 20px; /* Decrease font size for smaller screens */
        }

    .info-section-text {

        font-size: 12px; /* Decrease font size for smaller screens */
    }

    .info-list li {
        margin: 5px;
        font-size: 1em;
  
}
    .info-time {
        font-size: 14px;
    
    }
    .info-countdown {
        font-size: 12px;
        margin: 5px;
    }
}

    </style>
</head>
<body>
    <section class="info" aria-label="special offer">
        <div class="info-container">
            <p class="info-subtitle">Special Offers</p>
            <h2 class="info-title">All books are 50% off now! Don't miss such a deal!</h2>
            <p class="info-section-text">
                You will learn how to animate shapes like circles, lines, and polygons. You'll also learn how to animate CSS
                properties like color and size.
            </p>
            <ul class="info-list">
                <li>
                    <p class="info-time" id="days">15</p>
                    <p class="info-countdown">Days</p>
                </li>
                <li>
                    <p class="info-time" id="hours">12</p>
                    <p class="info-countdown">Hours</p>
                </li>
                <li>
                    <p class="info-time" id="minutes">1</p>
                    <p class="info-countdown">min</p>
                </li>
                <li>
                    <p class="info-time" id="seconds">40</p>
                    <p class="info-countdown">sec</p>
                </li>
            </ul>
            <a href="#" class="info-btn">Explore More</a>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const countDownDate = new Date("Jun 30, 2024 23:59:59").getTime();
            const countdownFunction = setInterval(() => {
                const now = new Date().getTime();
                const distance = countDownDate - now;
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;
                if (distance < 0) {
                    clearInterval(countdownFunction);
                    document.querySelector(".info-title").innerHTML = "The offer has ended!";
                    document.getElementById("days").innerHTML = 0;
                    document.getElementById("hours").innerHTML = 0;
                    document.getElementById("minutes").innerHTML = 0;
                    document.getElementById("seconds").innerHTML = 0;
                }
            }, 1000);
        });
    </script>
</body>
</html>
