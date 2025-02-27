<?php include 'includes/header.php'; ?>

<body>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/swiper3d.js"></script>
    <main>
        <div id="lineup-intro">
            <h2>The Club Artists</h2>
        
            <p>Every year, we welcome a diverse group of individuals into our music production club.
                From those just starting their musical journey to seasoned artists with an established fanbase,
                our community is enriched by the talents and passions of our members.
                Whether you're a beginner looking to learn the basics of music production or an experienced musician eager to share your skills and grow your audience, we are honored to have you join our ranks.
                <br>
                <br>
                Together, we create a supportive environment where creativity flourishes, and everyone has the opportunity to develop their unique sound.
                We are proud to introduce the following artists who have left their mark in our vibrant community.</p>
                <br>
                <br>
                <br>
                <section id="artists1"><h2>Our Artists:</h2>

        <div class="swiper-container-3d">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide-3d">
                    <div class="artist-card">
                        <img src="images/Eric_kizu_lineup.jpg" alt="KIZU - Eric Yen">
                        <h3>KIZU - Eric Yen</h3>
                        <p id="bio">My music is a collage of underground genres, gathering inspiration from artists like Bixby, Ericdoa, Wolfacejoeyy, Avenoire, and more. I started making music as a hobby in high school and haven’t been able to stop since. I will be on the upcoming album, both as a producer and an artist so stay tuned!!</p>
                        <a href="https://open.spotify.com/artist/2yzj0lHJMj8qYsULVAJOLq?si=nbiFNgyZS9C1e6om0hgTLA" class="streaming-link">Listen on Spotify</a>
                        <button class="show-more">Show More</button>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide-3d">
                    <div class="artist-card">
                        <img src="images/Escape2Eclipse_lineup.jpg" alt="Escape2eclipse - Naomi Boyd">
                        <h3>Escape2eclipse - Naomi Boyd</h3>
                        <p id="bio">My love for music began when I was kid, always singing songs around the house and playing piano as a child. However, my real love for music started when I had torn my ACL and taught myself to play guitar out of boredom. Just like my music taste, my music is all over the place - it can be sad and emo or really upbeat music. Most of my songs start with poems I write while delirious which inspires my craziest ideas. This year I’ll be releasing an album, “The Way It Is,” which displays my dark-moody side, inspired by artists like Billie Eilish, Orla Gartland, Jade LeMac and others. Look out for my song on the CMP album, Numbing!</p>
                        <a href="https://open.spotify.com/artist/4xJNPHipKVP89MtWOW0s5Q?si=DZ1Ba_G6Sum6TDdXSYLDRQ" class="streaming-link">Listen on Spotify</a>
                        <button class="show-more">Show More</button>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide-3d">
                    <div class="artist-card">
                        <img src="images/timo_lineup.jpg" alt="Timo Isreb">
                        <h3>Timo Isreb</h3>
                        <p id="bio">I started making music because I had to- it’s my method of processing life. When you listen to one of my songs, you're being placed inside the mind of a character, and asked to judge what you hear. My shit's cerebral & psychedelic but it's also very groovy and not too self-serious. It's a hard balance to strike, but I have fun striking it! Fun fact: I studied film for 7 years before realizing I liked music production more. I plan to be on the upcoming album!</p>
                        <a href="https://open.spotify.com/artist/4Pa2J7y19WBiedG0JnsSC7?si=RmD15Jd0QfKipY0_r7iRmw" class="streaming-link">Listen on Spotify</a>
                        <button class="show-more">Show More</button>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide-3d">
                    <div class="artist-card">
                        <img src="images/Elise_lineup.png" alt="Akemi Elise">
                        <h3>Akemi Elise</h3>
                        <p id="bio">Describing my music is as hard as describing emotion. It’s ethereal, it's dark, and it's romantic. I consider myself genre-less, experimenting with different sounds and collaborating with different producers and artists. I started making music for all the same reasons as anyone else, “bringing my visions to life.” I just want to give all the little passion projects in my head a home. If you want a taste of my music go listen to the newest CMP album, where I’m featured on 4 tracks.</p>
                        <a href="https://open.spotify.com/artist/6CuKwcsvq6rXS1DW99hF7Y?si=ovcDwCHgTbGfojdosJU9zw" class="streaming-link">Listen on Spotify</a>
                        <button class="show-more">Show More</button>
                    </div>
                </div>
            </div>
<br>
<br>

    <div class="interested">
        <p> Are you interested in joining our community of artists? We are always looking for new members to join our club and share their unique sound with us. 
            Whether you are a beginner looking to learn the basics of music production or an experienced musician eager to grow your audience, we welcome you to apply to join our lineup. 
            To apply, please fill out the form below and <strong> submit a contact, artist name, spotify link and a picture to showcase yourself. </strong> We look forward to hearing from you!</p>
        <br>
            <a class="streaming-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfPxegoL3H7tE3PUVxFPZ-9bsZVwbz1QxCvqhH2a7kJyouP6A/viewform?usp=sf_link">Apply to Join</a>
            <!-- Add Pagination -->
            <!-- <div class="swiper-pagination"></div> -->
            <!-- Add Navigation -->
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-scrollbar"></div> -->
        </div> 

        
        <div id="artistModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h3 id="modal-artist-name"></h3>
        <p id="modal-bio"></p>
        <a id="modal-streaming-link" class="streaming-link" target="_blank">Listen on Spotify</a>
    </div>
</div>

</section>
        </div>

       

    </main>
    <?php include 'includes/footer.php'; ?>
</body>
<script src="js/nav-button-script.js"></script>
<script src="js/swiper3d.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>