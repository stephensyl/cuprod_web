<?php include 'includes/header.php';?>

<body>

<div id="albumtitle">
        <h1>Resources for Music Production and Singing</h1>
        <p>Welcome to the Cornell Music Production Club Resource Page! 
            This page serves as a comprehensive guide for our members and anyone interested in music production and singing. 
            Whether you're just starting out or looking to refine your skills, 
            you'll find valuable information and resources here to help you on your musical journey. Below are the sections and resources we offer</p>
        
        <!-- CMP DAW Tutorials Section -->
        <section id="daw-tutorials">
    <h2>CMP DAW Tutorials on YouTube</h2>
    <p>Explore our curated list of Digital Audio Workstation (DAW) tutorials available on YouTube. 
        These tutorials cover a range of topics from beginner basics to advanced production techniques. 
        Each tutorial is presented as a card with a brief description and a link to the video. 
        Dive in and start mastering your DAW of choice!</p>
    <div class="card-container">
        <div class="card">
            <h3>FL Studio Tutorial</h3>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/myO2o6Gcodo" 
                title="FL Studio Tutorial" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
        </div>
        <div class="card">
            <h3>Logic Tutorial</h3>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/K3WR9qnivqY" 
                title="Logic Tutorial" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
        </div>
        <!-- Add more cards as needed -->
    </div>
</section>
        
        <!-- Drum Kit Resources Section -->
        <section id="drum-kits">
            <h2>Drum Kit Resources</h2>
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
            <h2>Where to Start: Free Plugins</h2>
            <p>Start your music production journey with these free plugins.</p>
            <div class="card-container">
                <div class="card">
                    <h3>Plugin 1</h3>
                    <a href="link-to-free-plugin-1">Download</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <div class="card">
                    <h3>Plugin 2</h3>
                    <a href="link-to-free-plugin-2">Download</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>
        
        <!-- Paid Recommendations Section -->
        <section id="paid-plugins">
            <h2>Level Up: Paid Recommendations</h2>
            <p>Enhance your productions with these top-notch paid plugins and tools.</p>
            <div class="card-container">
                <div class="card">
                    <h3>Paid Plugin 1</h3>
                    <a href="link-to-paid-plugin-1">Buy Now</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <div class="card">
                    <h3>Paid Plugin 2</h3>
                    <a href="link-to-paid-plugin-2">Buy Now</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>
        
        <!-- CMP-Inspired Drum Kit Section -->
        <section id="cmp-drum-kit">
            <h2>CMP-Inspired Drum Kit</h2>
            <p>Download our specially curated drum kits inspired by CMP's work.</p>
            <div class="card-container">
                <div class="card">
                    <h3>CMP Drum Kit 1</h3>
                    <a href="link-to-cmp-drum-kit-1">Download</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <div class="card">
                    <h3>CMP Drum Kit 2</h3>
                    <a href="link-to-cmp-drum-kit-2">Download</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>
        
        <!-- Latest Sales Section -->
        <section id="latest-sales">
            <h2>Latest Sales in the Production Community</h2>
            <p>Stay updated with the latest sales and discounts on production tools.</p>
            <div class="card-container">
                <div class="card">
                    <h3>Sale 1</h3>
                    <a href="link-to-sale-1">Check it out</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <div class="card">
                    <h3>Sale 2</h3>
                    <a href="link-to-sale-2">Check it out</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>
        
        
        <!-- Suggest a Resource Section -->
        <section id="suggest-resource">
            <h2>Suggest a Resource</h2>
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

<?php include 'includes/footer.php';?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/nav-button-script.js"></script>

</html>