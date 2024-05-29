<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 @import url(./assets/root.css);

.main_cover {
    max-width: 1200px;
    margin: 20px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.cover {
    height: 400px;
    width: 30%;
    margin-bottom: 20px;
    border: 2px solid #ddd;
    border-radius: 10px;
    /* background-color: #fff; */
    background-color: var(--white);
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
    cursor: pointer;
}

.cover:hover {
    transform: translateY(-10px);
}

.cover img {
    max-width: 100%;
    height: 250px;
    border-radius: 10px 10px 0 0;
}

.cover h2 {
    margin-top: 0;
    font-size: 24px;
    /* color: #333; */
    color: var(--yellow);
}

.cover p {
    color: var(--black);
    line-height: 1.6;
}

/* Media query for smaller screens */
/* Media query for smaller screens */
@media only screen and (max-width: 900px) {
    .main_cover {
        flex-direction: row;
        align-items: center;
    }

    .cover {
        width: calc(30%);
        margin-right: 0;
        height: 60vh; 
    }

    .cover img {
        object-fit: cover;
        width: 100%;
        height: 150px; /* Adjust the height of the image on smaller screens */
    }
  
}
@media only screen and (max-width: 768px) {
    .main_cover {
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .cover {
        width: calc(100% - 40px);
        margin-right: 0;
        height: auto; /* Set height to auto for smaller screens */
    }

    .cover img {
        width: 100%;
        object-fit: cover;
        height: 250px; /* Adjust the height of the image on smaller screens */
    }
        /* .highlights {
        overflow-y: scroll;
    } */
}

/* @media only screen and (max-width: 380) {
    .main_cover {
        flex-direction: column;
        align-items: center;
        height: 100vh;
    }

    .cover {
        width: calc(100% - 40px);
        margin-right: 0;
    }
} */

    </style>
</head>
<body>
    <div class="main_cover">
        <div class="cover" onclick="go()">
            <img src="./images/cover1.png" alt="Image 1">
            <h2>Travel And Guides</h2>
            <p>Provides information and advice on destinations, travel tips, and itineraries to help plan trips..</p>
        </div>
    
        <div class="cover" onclick="go()">
            <img src="./images/cover2.png" alt="Image 2">
            <h2>Fiction And Fantacy</h2>
            <p>Sci-fi/Fantasy books: Escape reality, explore wonders.</p>
        </div>
    
        <div class="cover" onclick="go()">
            <img src="./images/cover3.png" alt="Image 3">
            <h2>Novels And Stories</h2>
            <p>Novels & stories: Dive into worlds, experience emotions.</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function go(){
            console.log("goo");
            window.location.href = "components/travel.php"; // Replace with the URL of the next page

        }
    </script>
    <script >$(document).ready(function() {
        $('.cover').each(function(index) {
            $(this).delay(150 * index).fadeIn(300);
        });
    });
    </script>
</body>
</html>
