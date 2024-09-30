<?php include 'includes/header.php'; ?>

<body>

    <div id="resource-title">
        <h2>Resources for Music Production and Singing</h2>
        <p>Welcome to the Cornell Music Production Club Resource Page!
            This page serves as a comprehensive guide for our members and anyone interested in music production and singing.
            Whether you're just starting out or looking to refine your skills,
            you'll find valuable information and resources here to help you on your musical journey. Below are the sections and resources we offer</p>
        

        <!-- CMP DAW Tutorials Section -->
        <section id="daw-tutorials">
            <h3>CMP DAW Tutorials on YouTube</h3>
            <p>Explore our curated list of Digital Audio Workstation (DAW) tutorials available on YouTube.
                These tutorials cover a range of topics from beginner basics to advanced production techniques.
                Each tutorial is presented as a card with a brief description and a link to the video.
                Dive in and start mastering your DAW of choice!</p>
            <div class="card-container">
                <div class="card">
                    <h3>FL Studio Tutorial</h3>
                    <iframe width="300" height="200" src="https://www.youtube.com/embed/myO2o6Gcodo" title="FL Studio Tutorial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <h3>Logic Tutorial</h3>
                    <iframe width="300" height="200" src="https://www.youtube.com/embed/K3WR9qnivqY" title="Logic Tutorial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">
                    <h3>Garage Band</h3>
                    <a href= "error.php"> Coming Soon</a>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>

        <!-- Drum Kit Resources Section -->
        <section id="drum-kits">
            <h3>Drum Kit Resources</h3>
            <p>Discover a variety of drum kits that can enhance your music production.
                From classic sounds to modern beats, our recommended drum kits are perfect for any genre.
                Each drum kit is showcased as a card with details on where to find them and how to use them in your productions.</p>
            <div class="card-container">
                <div class="card">
                    <h3>Drum Kit 1</h3>
                    <a href="error.php">Coming Soon</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>

        <!-- Free Plugins Section -->
        <section id="free-plugins">
            <h3>Where to Start: Free Plugins</h3>
            <p>If you're new to music production, selecting the right plugins can be overwhelming. 
                We've compiled a list of essential free plugins to get you started.
                Each plugin is featured in a card with a description, download link, and usage tips. Enhance your tracks without spending a dime!.</p>
            <div class="card-container">
                <div class="card">
                    <h4>VST</h4>
                    <a href="https://surge-synthesizer.github.io/">Surge</a>
                    <p>powerful synthesizer vst to help you make electronic sounds</p>
                    <iframe src="https://surge-synthesizer.github.io/"></iframe>

                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <div class="card">
                    <h4>VST</h4>
                    <a href="https://www.spitfireaudio.com/library-manager">Spit Fire</a>
                    <p>Get professional grade orchestra sounds for free, works well for classical composing.</p>
                    <iframe src="https://www.spitfireaudio.com/library-manager"></iframe>
                </div>
                <div class="card">
                    <h4>Effect</h4>
                    <a href="https://valhalladsp.com/shop/reverb/valhalla-supermassive/">Valhalla Supermassive</a>
                    <p>Bring atmosphere into your tracks with this Supermassive plugin</p>
                    <iframe src="https://valhalladsp.com/shop/reverb/valhalla-supermassive/"></iframe>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>


        <!-- CMP-Inspired Drum Kit Section -->
        <section id="cmp-drum-kit">
            <h3>CMP-Inspired Drum Kit</h3>
            <p>Download our specially curated drum kits inspired by CMP's work.</p>
            <div class="card-container">
                <div class="card">
                <h3>Slippery Slope Kit</h3>
                    <a href="error.php">Coming Soon</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
            </div>
        </section>

        <!-- CMP Workshop Slides -->
        <section id="cmp-slides">
            <h3>CMP-Workshop</h3>
            <p>Download and look at our workshop slides.</p>
            <div class="card-container">
                <div class="card">
                <h3></h3>
                    <a href="ehttps://docs.google.com/presentation/d/1oxu8jz_qMFNGybKuyrr_82h-ixBNTELAw4J04UEaf20/edit?usp=drive_link">Welcome G-Body Slides</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
            </div>
        </section>

        <!-- Suggest a Resource Section -->
        <section id="suggest-resource">
            <h3>Suggest a Resource</h3>
            <p>Have a resource to share? Let us know by filling out the form below.</p>
            <form action="submit-resource.php" method="post">
                <label for="resource-name">Resource Name:</label>
                <input type="text" id="resource-name" name="resource-name" required>
                <label for="resource-link">Resource Link:</label>
                <input type="url" id="resource-link" name="resource-link" required>
                <label for="resource-description">Description:</label>
                <textarea id="resource-description" name="resource-description" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </div>



</body>

<?php include 'includes/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/nav-button-script.js"></script>

</html>