<?php include 'includes/header.php';?>
<body>

<div id="resource-title">
<h2>Reach Out to Us</h2>
</div>

<p>We'd love to connect with you! Join our community on Discord, stay updated through our GroupMe, follow us on Instagram, or simply send us an email. Your engagement means a lot to us.</p>

<div class="social-media" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
    <div class="platform" style="text-align: center;">
        <a href="https://discord.gg/dCE9ZdqUsc">
        <img src="images/discord.png" alt="Join our Discord" style="max-width: 100px; max-height: 100px;">
        </a>
        <p style="display: none;">Join our Discord to chat with other members and stay updated on the latest news.</p>
    </div>
    <div class="platform" style="text-align: center;">
        <a href="https://groupme.com/join_group/96453448/SjjkKIJP">
        <img src="images/groupme.png" alt="Join our GroupMe" style="max-width: 100px; max-height: 100px;">
        </a>
        <p style="display: none;">Stay in the loop with our GroupMe group for quick updates and discussions.</p>
    </div>
    <div class="platform" style="text-align: center;">
        <a href="https://www.instagram.com/cornellmusicproduction/">
        <img src="images/instagram.png" alt="Follow us on Instagram" style="max-width: 100px; max-height: 100px;">
        </a>
        <p style="display: none;">Follow us on Instagram for behind-the-scenes content and updates.</p>
    </div>
    <div class="platform" style="text-align: center;">
        <a href="mailto:cornellmusicproduction@gmail.com">
            <img src="images/email_icon.png" alt="Send us an email" style="max-width: 100px; max-height: 100px;">
        </a>
        <p style="display: none;">Have any questions? Send us an email and we'll get back to you as soon as possible.</p>
    </div>
</div>

<!-- Common display area -->
<div id="info-display" style="margin-top: 20px; padding: 10px; border: 1px solid #ccc; background: white; text-align: center;">
    Hover over a platform to see more information here.
</div>


<script>
    const infoDisplay = document.getElementById('info-display');

document.querySelectorAll('.platform').forEach(platform => {
    platform.addEventListener('mouseenter', () => {
        // Get the <p> content from the hovered platform and show it in the common display area
        const infoText = platform.querySelector('p').textContent;
        infoDisplay.textContent = infoText;
    });

    platform.addEventListener('mouseleave', () => {
        // Optionally, clear or reset the text when mouse leaves
        infoDisplay.textContent = 'Hover over a platform to see more information here.';
    });
});
</script>
    
</body>

<?php include 'includes/footer.php';?>
<script src="js/nav-button-script.js"></script>

</html>