<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <!-- <link rel="stylesheet" href="footer.css" /> -->
    <style>
   @import url(./assets/root.css);

  
  .footer {
    /* background-color: black; */
    /* color: #fefefe; */
    /* background-color: beige; */
    background-color: var(--white);
    /* color: black; */
    color: var(--black);
    /* position: fixed; */
    width: 100%;
    bottom: 0;
    left: 0;
    height: 100vh;
  }
  
  .footer .heading {
    /* color: #fefefe; */
    /* color: black; */
    color: var(--black);

    max-width: 1010px;
    width: 90%;
    text-transform: uppercase;
    margin: 0 auto;
    margin-bottom: 3rem;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  }
  
  .footer .content {
    display: flex;
    justify-content: space-evenly;
    margin: 1.5rem;
  }
  
  .footer .content p {
    margin-bottom: 1.3rem;
  }
  
  .footer .content a {
    text-decoration: none;
    /* color: #fefefe; */
    /* color: black; */
    color: var(--black);

  }
  
  .footer .content a:hover {
    border-bottom: 1px solid #971717;
  }
  
  .footer .content h4 {
    margin-bottom: 1.3rem;
    font-size: 19px;
  }
  
  footer {
    text-align: center;
    margin-bottom: 2rem;
  }
  
  footer hr {
    margin: 2rem 0;
  }
  
  @media (max-width: 767px) {
    .footer .content {
      display: flex;
      flex-direction: column;
      font-size: 14px;
    }
  
    .footer {
      position: unset;
    }
  }
  
  @media (min-width: 768px) and (max-width: 1024px) {
    .footer .content,
    .footer {
      font-size: 14px;
    }
  }
  
  @media (orientation: landscape) and (max-height: 500px) {
    .footer {
      position: unset;
    }
  }
  .new_footer_area {
    /* background: #fbfbfd; */
    background-color: var(--white);

    
}
.new_footer_top {
    padding: 120px 0px 270px;
    position: relative;
      overflow-x: hidden;
      display: flex;

}
.new_footer_area {
    background-color: beige;

    /* background: #fbfbfd; */
    background-color: var(--white);

    /* background-color: rgb(39, 37, 37); */

}

  .footer_bg {
    position: absolute;
    bottom: 0;
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEigB8iI5tb8WSVBuVUGc9UjjB8O0708X7Fdic_4O1LT4CmLHoiwhanLXiRhe82yw0R7LgACQ2IhZaTY0hhmGi0gYp_Ynb49CVzfmXtYHUVKgXXpWvJ_oYT8cB4vzsnJLe3iCwuzj-w6PeYq_JaHmy_CoGoa6nw0FBo-2xLdOPvsLTh_fmYH2xhkaZ-OGQ/s16000/footer_bg.png") no-repeat scroll center 0;
    width: 100%;
    height: 266px;
}

.footer_bg .footer_bg_one {
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEia0PYPxwT5ifToyP3SNZeQWfJEWrUENYA5IXM6sN5vLwAKvaJS1pQVu8mOFFUa_ET4JuHNTFAxKURFerJYHDUWXLXl1vDofYXuij45JZelYOjEFoCOn7E6Vxu0fwV7ACPzArcno1rYuVxGB7JY6G7__e4_KZW4lTYIaHSLVaVLzklZBLZnQw047oq5-Q/s16000/volks.gif") no-repeat center center;
    width: 330px;
    height: 105px;
  background-size:100%;
    position: absolute;
    bottom: 0;
    left: 30%;
    -webkit-animation: myfirst 22s linear infinite;
    animation: myfirst 22s linear infinite;
}

 .footer_bg .footer_bg_two {
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhyLGwEUVwPK6Vi8xXMymsc-ZXVwLWyXhogZxbcXQYSY55REw_0D4VTQnsVzCrL7nsyjd0P7RVOI5NKJbQ75koZIalD8mqbMquP20fL3DxsWngKkOLOzoOf9sMuxlbyfkIBTsDw5WFUj-YJiI50yzgVjF8cZPHhEjkOP_PRTQXDHEq8AyWpBiJdN9SfQA/s16000/cyclist.gif") no-repeat center center;
    width: 88px;
    height: 100px;
  background-size:100%;
    bottom: 0;
    left: 38%;
    position: absolute;
    -webkit-animation: myfirst 30s linear infinite;
    animation: myfirst 30s linear infinite;
}

@-moz-keyframes myfirst {
    0% {
      left: -25%;
    }
    100% {
      left: 100%;
    }
  }
  
  @-webkit-keyframes myfirst {
    0% {
      left: -25%;
    }
    100% {
      left: 100%;
    }
  }
  
  @keyframes myfirst {
    0% {
      left: -25%;
    }
    100% {
      left: 100%;
    }
  }
  

    </style>
    <script
      src="https://kit.fontawesome.com/66aa7c98b3.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="footer">
      <div class="heading">
        <h2>Iconic Bookies<sup>™</sup></h2>
      </div>
      <div class="content">
        <div class="services">
          <h4>Services</h4>
          <p><a href="#">App development</a></p>
          <p><a href="#">Web development</a></p>
          <p><a href="#">DevOps</a></p>
          <p><a href="#">Web designing</a></p>
        </div>
        <div class="social-media">
          <h4>Social</h4>
          <p>
            <a href="#"
              ><i class="fab fa-linkedin"></i> Linkedin</a
            >
          </p>
          <p>
            <a href="#"
              ><i class="fab fa-twitter"></i> Twitter</a
            >
          </p>
          <p>
            <a href="https://github.com/farazc60"
              ><i class="fab fa-github"></i> Github</a
            >
          </p>
          <p>
            <a href="https://www.facebook.com/codewithfaraz"
              ><i class="fab fa-facebook"></i> Facebook</a
            >
          </p>
          <p>
            <a href="https://www.instagram.com/codewithfaraz"
              ><i class="fab fa-instagram"></i> Instagram</a
            >
          </p>
        </div>
        <div class="links">
          <h4>Quick links</h4>
          <p><a href="#">Home</a></p>
          <p><a href="#">About</a></p>
          <p><a href="#">Blogs</a></p>
          <p><a href="#">Contact</a></p>
        </div>
        <div class="details">
          <h4 class="address">Address</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur <br />
            adipisicing elit. Cupiditate, qui!
          </p>
          <h4 class="mobile">Mobile</h4>
          <p><a href="#">+923-405939713</p>
          <h4 class="mail">Email</h4>
          <p><a href="#">naeemm@gmail.com</a></p>
        </div>
      </div>
      
    <div>
        <footer class="new_footer_area bg_color">
                <div class="new_footer_top">
                    
                    <div class="footer_bg">
                        <div class="footer_bg_one"></div>
                        <div class="footer_bg_two"></div>
                    </div>
                </div>
        </footer>
    </div>
    <footer>
        <hr />
        © 2024 innovation Technologies.
      </footer>
    </div>

  </body>
</html>