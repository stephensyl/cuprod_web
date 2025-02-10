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
        loop: false,
        on: {
            slideChange: function () {
                updateArtistVisibility();
            }
        }
    });

    // Modal elements
    const modal = document.getElementById('artistModal');
    const modalArtistName = document.getElementById('modal-artist-name');
    const modalBio = document.getElementById('modal-bio');
    const modalStreamingLink = document.getElementById('modal-streaming-link');
    const closeModal = document.querySelector('.close-modal');

    // Close modal when clicking the close button
    closeModal.onclick = function() {
        modal.style.display = "none";
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Function to update visibility of artist cards
    function updateArtistVisibility() {
        const slides = document.querySelectorAll('.swiper-slide-3d');

        slides.forEach((slide, index) => {
            const showMoreButton = slide.querySelector('.show-more');

            // Hide show more button by default
            showMoreButton.style.display = 'none';

            // Add perspective warp to out-of-focus slides
            slide.style.transform = 'perspective(1000px) rotateY(15deg)';
            slide.style.opacity = '0.5';

            // If the current slide is active (in focus)
            if (swiper.realIndex === index) {
                slide.style.transform = 'none';
                slide.style.opacity = '1';
                showMoreButton.style.display = 'inline-block';

                // Show modal when "Show More" is clicked
                showMoreButton.onclick = function(e) {
                    e.stopPropagation();
                    
                    // Get artist information from the card
                    const artistName = slide.querySelector('h3').textContent;
                    const bio = slide.querySelector('#bio').textContent;
                    const streamingLink = slide.querySelector('.streaming-link').href;

                    // Update modal content
                    modalArtistName.textContent = artistName;
                    modalBio.textContent = bio;
                    modalStreamingLink.href = streamingLink;

                    // Display the modal
                    modal.style.display = "block";
                };
            }
        });
    }

    // Allow users to manually select artist card
    const slides = document.querySelectorAll('.swiper-slide-3d');
    slides.forEach((slide, index) => {
        slide.addEventListener('click', function(e) {
            if (!e.target.classList.contains('show-more')) {
                swiper.slideTo(index);
                updateArtistVisibility();
            }
        });
    });

    // Initial run to update visibility
    updateArtistVisibility();
});