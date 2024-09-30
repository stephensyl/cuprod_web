document.addEventListener('DOMContentLoaded', function () {
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container-3d', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
        loop: false, // Disable loop since not enough slides
        on: {
            slideChange: function () {
                updateArtistVisibility();
            }
        }
    });

    // Function to update visibility of bio and links
    function updateArtistVisibility() {
        const slides = document.querySelectorAll('.swiper-slide-3d');

        slides.forEach((slide, index) => {
            const bio = slide.querySelector('#bio');
            const link = slide.querySelector('.streaming-link');
            const showMoreButton = slide.querySelector('.show-more');

            // Hide all bios and links by default
            bio.style.display = 'none';
            link.style.display = 'none';
            showMoreButton.style.display = 'none';

            // Add perspective warp to out-of-focus slides
            slide.style.transform = 'perspective(1000px) rotateY(15deg)';
            slide.style.opacity = '0.5'; // Dimming the out-of-focus slides

            // If the current slide is active (in focus)
            if (swiper.realIndex === index) {
                slide.style.transform = 'none'; // Reset transformation for focused slide
                slide.style.opacity = '1'; // Bring focus to active slide
                showMoreButton.style.display = 'inline-block'; // Show "Show More" button

                // Show bio and link when "Show More" is clicked
                showMoreButton.onclick = function (e) {
                    e.stopPropagation(); // Prevent triggering the slide focus event

                    if (bio.style.display === 'none') {
                        bio.style.display = 'block';
                        link.style.display = 'block';
                        showMoreButton.textContent = 'Show Less';
                    } else {
                        bio.style.display = 'none';
                        link.style.display = 'none';
                        showMoreButton.textContent = 'Show More';
                    }
                };
            }
        });
    }

    // Allow users to manually select artist card
    const slides = document.querySelectorAll('.swiper-slide-3d');
    slides.forEach((slide, index) => {
        slide.addEventListener('click', function (e) {
            // Ignore clicks on the "Show More" button to avoid conflict
            if (!e.target.classList.contains('show-more')) {
                swiper.slideTo(index); // Move Swiper to the selected slide
                updateArtistVisibility(); // Update visibility after selection
            }
        });
    });

    // Initial run to update visibility
    updateArtistVisibility();
});