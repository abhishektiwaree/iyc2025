<?php
include("setting.php");
page_header();
?>
<section class="gallery-section" style="
    background-image: url('./gallery/bg1.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 50px;
    color: white;" >
        <h1 style=" 
        text-align:center;
         font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">Our Event Gallery</h1>
            <div class="elementor-element elementor-element-60644f7 elementor-widget elementor-widget-heading" data-id="60644f7" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default" style="text-align:center">Home &gt; Event Gallery</p>		</div>
				</div>
					</div>
    </section>
    

<!-- Gallery -->
<style>
        .gallery img {
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row gallery" style="padding:20px;">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="./gallery/img11.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 1" onclick="openModal(0)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/img8.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 2" onclick="openModal(1)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/img2.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 3" onclick="openModal(2)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0"style="margin-top:-290px;">
            <img src="./gallery/img16.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 4" onclick="openModal(3)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0"style="margin:-290px 0px 0px 850px;">
            <img src="./gallery/img.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 5" onclick="openModal(4)">
        </div>
    </div>

    <div class="row gallery" style="padding:20px;">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="./gallery/gallery_001.png" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 6" style="height:300px;" onclick="openModal(5)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/img10.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 7" onclick="openModal(6)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/img13 (1).jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 8" style="height:300px;" onclick="openModal(7)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0"style="margin-top:-240px;">
            <img src="./gallery/img13 (2).jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 9" onclick="openModal(8)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0" style="margin:-240px 0px 0px 850px;">
            <img src="./gallery/img15.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 10" onclick="openModal(9)">
        </div>
    </div>
</div>

<!-- Bootstrap Modal with Carousel -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Event Pictures</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" id="carouselImages"></div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Array of all image paths
    const images = [
        "./gallery/img11.jpeg",
        "./gallery/img8.jpeg",
        "./gallery/img2.jpeg",
        "./gallery/img16.jpeg",
        "./gallery/img.jpeg",
        "./gallery/gallery_001.png",
        "./gallery/img10.jpeg",
        "./gallery/img13 (1).jpeg",
        "./gallery/img13 (2).jpeg",
        "./gallery/img15.jpeg"
    ];

    function openModal(index) {
        let carouselInner = document.getElementById("carouselImages");
        carouselInner.innerHTML = ""; // Clear previous images
        
        images.forEach((img, i) => {
            let activeClass = i === index ? "active" : ""; // Set active slide
            carouselInner.innerHTML += `
                <div class="carousel-item ${activeClass}">
                    <img src="${img}" class="d-block w-100" alt="Gallery Image ${i + 1}">
                </div>
            `;
        });

        var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
        myModal.show();
    }
</script>
  
  

  
</div>

	<div class="clearfix"></div>
  <?php
page_footer();
?>