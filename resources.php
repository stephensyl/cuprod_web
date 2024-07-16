<?php include 'includes/header.php';?>

<body>

<div class="resource-container">
        <h1>Resources for Music Production and Singing</h1>
        
        <!-- CMP DAW Tutorials Section -->
        <section id="daw-tutorials">
            <h2>CMP DAW Tutorials on YouTube</h2>
            <p>Discover our comprehensive tutorials on various DAWs, available on our YouTube channel.</p>
            <div class="card-container">
                <div class="card">
                    <h3>DAW Tutorial 1</h3>
                    <a href="https://youtube.com/link-to-tutorial-1">Watch on YouTube</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <div class="card">
                    <h3>DAW Tutorial 2</h3>
                    <a href="https://youtube.com/link-to-tutorial-2">Watch on YouTube</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>
        
        <!-- Drum Kit Resources Section -->
        <section id="drum-kits">
            <h2>Drum Kit Resources</h2>
            <p>Explore a variety of drum kits to enhance your music production.</p>
            <div class="card-container">
                <div class="card">
                    <h3>Drum Kit 1</h3>
                    <a href="link-to-drum-kit-1">Download</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <div class="card">
                    <h3>Drum Kit 2</h3>
                    <a href="link-to-drum-kit-2">Download</a>
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
        
        <!-- Blog Posts Section -->
        <section id="blog-posts">
            <h2>Blog Posts: Q & A with Professionals</h2>
            <p>Read insightful blog posts featuring Q&A sessions with industry professionals and learners.</p>
            <div class="card-container">
                <div class="card">
                    <h3>Blog Post 1</h3>
                    <a href="link-to-blog-post-1">Read More</a>
                    <!-- Include a thumbnail or preview image if available -->
                </div>
                <div class="card">
                    <h3>Blog Post 2</h3>
                    <a href="link-to-blog-post-2">Read More</a>
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