<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include header -->
    @include('Components.header')

    <!-- Styles for modal and animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* Modal Background */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.8); /* Black w/ opacity */
            transition: opacity 0.3s ease-in-out;
        }

        /* Modal Content */
        .modal-content {
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            width: 80%; /* Could be more or less, depending on screen size */
            max-width: 700px;
            animation: zoomIn 0.5s; /* Animation when opening */
        }

        /* Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Animation for modal content */
        @keyframes zoomIn {
            from {
                transform: scale(0.7);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .award-image {
            width: 100%; /* Ensure the image takes the full width of the column */
            height: 200px; /* Fixed height for consistency */
            object-fit: cover; /* Cover the area and maintain aspect ratio */
            border-radius: 8px; /* Optional: Add some border radius if you like */
            cursor: pointer;
        }
    </style>
</head>

<body>
<div class="row justify-content-center text-center" style="color: white; background-color: #343a40; padding: 50px 0;">
    <div class="col-lg-10">
        <h2 class="title">Our Certifications</h2>
    </div>
</div>
    <!-- Certification Section -->
    <div class="text-box-one">
        <div class="container">
            @php
                $itemsPerRow = 3; // Number of items per row
                $totalAwards = count($awards);
                $rows = ceil($totalAwards / $itemsPerRow); // Calculate number of rows needed
            @endphp

            @for ($row = 0; $row < $rows; $row++)
                <div class="row">
                    @for ($i = 0; $i < $itemsPerRow; $i++)
                        @php
                            $index = $row * $itemsPerRow + $i;
                        @endphp
                        @if ($index < $totalAwards)
                            @php $award = $awards[$index]; @endphp
                            <div class="col-lg-4 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transition-3s">
                                    @if ($award->companyimage)
                                        <img src="{{ asset('images/' . $award->companyimage) }}" 
                                             alt="{{ $award->companyname }}" 
                                             class="img-fluid award-image"
                                             onclick="openModal('{{ asset('images/' . $award->companyimage) }}', '{{ $award->companyname }}')" />
                                        <h5 class="text-secondary hover-text-success py-3 m-0" style="background-color: white;">
                                            {{ $award->companyname }}
                                        </h5>
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            @endfor
        </div>
    </div>
    <div class="row justify-content-center text-center" style="color: white; background-color: #343a40; padding: 50px 0;">
        <div class="col-lg-10">
            <h2 class="title">Our Executives</h2>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="" style="width: 100%;" />
            <p id="modalCaption"></p>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        function openModal(imageSrc, captionText) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modalCaption').innerText = captionText;
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        // Close the modal when clicking outside of the modal content
        window.onclick = function(event) {
            if (event.target == document.getElementById('myModal')) {
                closeModal();
            }
        }
    </script>
@include('Components.footer')
    <!-- Other scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
