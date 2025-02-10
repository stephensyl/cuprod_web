<?php include 'includes/header.php';?>
  <main>
        <section>
            <h1>Welcome to Cornell Music Production</h1>
            <p>Cornell Music Production is a club at Cornell University dedicated to exploring the world of music production and technology. Our members come from diverse backgrounds and interests, and we strive to create a supportive and inclusive community
                for anyone passionate about music and technology.</p>
            <p>We work on music projects throughout the semester and collaborate to create an album at the end of the year, showcasing our collective talents and creativity. We welcome all types of music and encourage experimentation and innovation.</p>
            <p>Join us to:</p>
            <ul id="joinus"> 
                <li>Collaborate with like-minded creatives</li>
                <li>Learn from experienced producers</li>
                <li>Showcase your musical talent</li>
                <li>Explore cutting-edge music technology</li>
            </ul>
            <a href="contact.php" class="cta-button">Join Us</a>

        </section>
        
        <div class = "image">
        <img src="images/cmpgroup.jpg" alt="" height="340">
        <img src="images/cmpgroup2.jpg" alt="" height="340">
        <img src="images/cmpgroup3.jpg" alt="" height="340">
        </div>
        
    </main>

    <div id="Album">
    <div class="album-section">
        <h2>Our Works</h2>
        <p id="albumtitle">VOLUME 1: THE CHRONICLES (Out now)</p>
        <div class="album-grid">
            <div class="album-item">
                <a href="https://open.spotify.com/album/1CKE9ma4BRWQmLTLKYTmFU?si=_ISbQgouSfacRoaFP29zOw" class="album-link">
                    <div class="album-cover">
                        <img src="images/v1cover.JPEG" alt="Volume 1 Cover">
                        <div class="play-overlay">
                            <svg viewBox="0 0 24 24" width="50" height="50">
                                <circle cx="12" cy="12" r="11" fill="white" opacity="0.9"/>
                                <path d="M9 8l8 4-8 4V8z" fill="#333"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        
            <div class="album-item">
                    <div class="album-cover">
                        <img src="images/poster1.JPEG" >
                    </div>
                </a>
            </div>
            <div class="album-item">
                    <div class="album-cover">
                        <img src="images/poster4.JPEG" >
                    </div>
                </a>
            </div>
            <div class="album-item">
                    <div class="album-cover">
                        <img src="images/poster3.JPEG">
                    </div>
                </a>
            </div>

            <!-- Additional album items would go here -->
        </div>

    </div>

    <div class="album-section">
        <p id="albumtitle">VOLUME 2: Time Waits For No One (Out now)</p>
        <div class="album-grid">
            <div class="album-item">
                <a href="https://open.spotify.com/album/54q4auaaJBplwLhUQZZZzY?si=ejC7LUHqQbKf9VRtqK0l3Q" class="album-link">
                    <div class="album-cover">
                        <img src="images/v2cover.webp" alt="Volume 2 Cover">
                        <div class="play-overlay">
                            <svg viewBox="0 0 24 24" width="50" height="50">
                                <circle cx="12" cy="12" r="11" fill="white" opacity="0.9"/>
                                <path d="M9 8l8 4-8 4V8z" fill="#333"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="album-item">
                    <div class="album-cover">
                        <img src="images/v2_viz2.JPG">
                    </div>
                </a>
            </div>
            <div class="album-item">
                    <div class="album-cover">
                        <img src="images/v2viz.JPG">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

    <?php include 'includes/footer.php';?>
</body>
<script src="js/nav-button-script.js"></script>
</html>