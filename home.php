<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>URL Shortener</title>
</head>

<body>
    
    <header>
        <img id="logo" src="images/logo.svg" alt="logo">
        <div class="left">
            <ul class="nav-menu">
                <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Resource</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacts</a></li>

            </ul>
        </div>

        <div class="right">
            
            <?php 
            
                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_id = $result['Id'];
                }
            
                echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
                ?>

                <a href="php/logout.php"> <button id="btn">Log Out</button> </a>
            
        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </header>

<!--Main content of Web Page-->
    <main>
        <section>
            <div class="content"> 
                <h1>Simple and fast URL shortener!</h1>
                <p>Free URL Shortener for transforming long, ugly links into nice, memorable 
                    and trackable short URLs. Use it to shorten links for any social media platforms, 
                    blogs, SMS, emails, ads, or pretty much anywhere else you want to share them. 
                </p>
                <button class="btn">Get Started</button>
            </div>
        </section>

        <section class="link-input">
            <form class="input-container">
                <input type="text" placeholder="Enter the link here" required>
                <button class="input-btn" type="submit">Shorten URL</button>
            </form>
        </section>
        <div class="result">

        </div> 
        <section class="services">
            <h3>Building with</h3>
            <div class="card-container">
            
                <div class="card">
                    <img src="images/html.png" alt="html">
                    <h3>HTML 5</h3>
                    <p>The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed 
                        in a web browser.</p>
                    <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/HTML" class="btn">Learn more</a>
                </div>
        
                <div class="card">
                    <img src="images/css.png" alt="css">
                    <h3>CSS 3</h3>
                    <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written 
                        in a markup language such as HTML.</p>
                    <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS" class="btn">Learn more</a>
                </div>
        
                <div class="card">
                    <img src="images/js.png" alt="js">
                    <h3>JavaScript</h3>
                    <p>JavaScript often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, 
                        alongside HTML and CSS.</p>
                    <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" class="btn">Learn more</a>
                </div>
        
            </div>
        
            </div>

        </section>
        <section class="body">
            <h2 class="title">FAQs</h2>
            <h3>Frequently Asked Questions</h3>
            <div class="faq">
                <div class="question">
                    <h3>What is a URL shortener?</h3>
                    <svg width="18" height="12" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"\/>
                    </svg>
                </div>
                <div class="answer">
                    <p> A URL shortener, also known as a link shortener, seems like a simple tool, but it is a service that can have a dramatic impact on your marketing efforts.</p>

                    <p> Link shorteners work by transforming any long URL into a shorter, more readable link. When a user clicks the shortened version, they’re automatically forwarded to the destination URL.</p>

                    <p> Think of a short URL as a more descriptive and memorable nickname for your long webpage address. You can, for example, use a short URL like bit.ly/CelebrateBitly so people will have a good idea about where your link will lead before they click it.</p>

                    <p>If you’re contributing content to the online world, you need a URL shortener.

                    Make your URLs stand out with our easy to use free link shortener above. </p>
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Benefits of a short URL</h3>
                    <svg width="18" height="12" viewBox="0 0 42 25">
                        <path 
                            d="M3 3L21 21L39 3" 
                            stroke="white" 
                            stroke-width="7" 
                            stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                    How many people can even remember a long web address, especially if it has tons of characters and symbols? A short URL can make your link more memorable. Not only does it allow people to easily recall and share your link with others, it can also dramatically improve traffic to your content.

                    On a more practical side, a short URL is also easier to incorporate into your collateral – whether you’re looking to engage with your customers offline or online.

                    Bitly is the best URL shortener for everyone, from influencers to small brands to large enterprises, who are looking for a simple way to create, track and manage their links.
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>How do I change a long URL to a short URL?</h3>
                    <svg width="18" height="12" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="answer">
                    <p>
                    To shorten a URL, you'll need a service like Shortly. First, copy the long URL you want to shorten. Then, access the URL shortener tool. 
                    Paste your long URL into the appropriate field, then click "Shorten URL." Shortly will instantly 
                    generate a shortened version of your original URL, which leads to the same page when clicked.
                    </p>
                </div>
            </div>
        </section>
        
    </main>
    

    
<!--Footer of Web Page-->
    <footer>
        
        <ul class="footer-links">
            <li>Features</li>
            <li>Link Shortening</li>
            <li>Branded links</li>
            <li>Analytics</li>
        </ul>
        <ul class="footer-links">
            <li>Resources</li>
            <li>Blogs</li>
            <li>Developers</li>
            <li>Support</li>
        </ul>
        <ul class="footer-links">
            <li>Company</li>
            <li>About</li>
            <li>Our Team</li>
            <li>Careers</li>
            <li>Contacts</li>
        </ul>
      <div class="footer-social">
        <a target="_blank" href="https://facebook.com">
            <img src="./images/icon-facebook.svg" alt="facebook" class="social-links"/>
        </a>
        <a target="_blank" href="https://twitter.com">
            <img src="./images/icon-twitter.svg" alt="twitter" class="social-links"/>
        </a>
        <a target="_blank" href="https://instagram.com">
            <img src="./images/icon-instagram.svg" alt="instagram" class="social-links"/>
        </a>
        <a target="_blank" href="https://pinterest.com">
            <img src="./images/icon-pinterest.svg" alt="pinterest" class="social-links"/>
        </a>
      </div>
    
      
    </footer>
    
    <div class="footer-bottom">
        <div class="row">
            <p>Copyright &copy; 2023<p>
            <p> All right reserved</p>
        </div>
    </div>
    <script src="./src/script.js"></script>
    <script src="./src/reload.js"></script>
    <script src="./src/app.js"></script>
</body>
</html>