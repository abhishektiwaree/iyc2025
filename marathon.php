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
         font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">Marathon of Cooperation </h1>
            <div class="elementor-element elementor-element-60644f7 elementor-widget elementor-widget-heading" data-id="60644f7" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default" style="text-align:center">Home &gt; Event </p>		</div>
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
            <img src="./gallery/gallery_008.png" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 1" onclick="openModal(0)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/gallery_003.png" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 2" onclick="openModal(1)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/gallery_004.png" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 3" onclick="openModal(2)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/gallery_005.png" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 4" onclick="openModal(3)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/gallery_007.png" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 5" onclick="openModal(4)">
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="./gallery/gallery_006.png" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery Image 5" onclick="openModal(4)">
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
<title>Marathon: "Run for Cooperation" in IYC-2025</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .event-section {
            max-width: 1500px;
            margin: 40px 0px 0px ;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .event-title {
            font-size: 28px;
            font-weight: bold;
            color: #232341;
            margin-bottom: 15px;
        }

        .event-details {
            background:#ffab01;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .event-details p {
            margin: 5px 0;
            font-size: 16px;
        }

        .event-content {
            font-size: 16px;
            line-height: 1.6;
        }

        .event-content strong {
            color: #d9233c;
        }

        .icon {
            margin-right: 10px;
            color: #d9233c;
        }

        @media (max-width: 768px) {
            .event-section {
                padding: 20px;
                margin: 20px;
            }

            .event-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>

<div class="event-section col-md-12" >
    <h2 class="event-title"> Marathon: "Run for Cooperation" in IYC-2025</h2>
    
    <div class="event-details">
        <p><strong>📅 Date:</strong> January , 2025</p>
        <p><strong>⏰ Time:</strong> 10:00 AM - 1:00 PM</p>
       
    </div>

    <div class="event-content">
        <p><strong>About the Event:</strong></p>
        <p>Under the   <strong>Run for Cooperation</strong>this marathon will witness the participation of<em>over 10,000 people</em>from diverse backgrounds,including <strong>sports enthusiasts, students from schools and colleges, members</strong> of various organizations, and representatives of cooperative institutions.</p>

        <p><strong>Key Highlights:</strong></p>
        <ul>
            <li>🔹The Hon’ble Chief Minister will flag off the marathon.</li>
            <li>🔹  The event will be held in the presence of the Hon’ble Cooperative Minister, other ministers,
                 and senior officials of the Government of Uttar Pradesh.</li>
            <li>🔹NABARD, UPCB, all cooperative institutions, corporations, RCS, sponsors.</li>
            <li>🔹Promote awareness about cooperatives and their vital role in society.</li>
            <li>🔹Foster a spirit of cooperation among citizens.</li>
        </ul>

        <p>This marathon symbolizes a strong commitment to <strong>unity and cooperation</strong>, inspiring collective growth and   <strong>  community engagement </strong> active participation.</p>    </div>
</div>
  

  
</div>

	<div class="clearfix"></div>
  <?php
page_footer();
?>