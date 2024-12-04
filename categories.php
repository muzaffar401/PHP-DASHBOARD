<?php
include("components/header.php");
?>
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row bg-light rounded mx-0">
        <div class="text-end">
            <button class="btn btn-danger p-2 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Category</button>
        </div>
        <div class="col-md-12">
            <h3 class="px-3 py-3">This is blank page</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>jhon@email.com</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>mark@email.com</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>jacob@email.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Blank End -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="categoryForm" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName">
                        <span id="nameError" class="text-danger small"></span>
                    </div>
                    <div class="mb-3">
                        <label for="categoryImage" class="form-label">Category Image</label>
                        <input type="file" class="form-control" id="categoryImage" name="categoryImage">
                        <span id="imageError" class="text-danger small"></span>
                    </div>
                    <button type="submit" class="btn btn-primary" name="AddBtn">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const nameInput = document.getElementById("categoryName");
        const imageInput = document.getElementById("categoryImage");
        const nameError = document.getElementById("nameError");
        const imageError = document.getElementById("imageError");


        const nameRegex = /^[a-zA-Z\s]{3,50}$/;
        const imageRegex = /\.(jpg|jpeg|png|gif)$/i;


        nameInput.addEventListener("keyup", function() {
            if (nameRegex.test(nameInput.value)) {
                nameError.textContent = "";
            } else {
                nameError.textContent = "Name must be 3-50 characters and only letters or spaces.";
            }
        });


        imageInput.addEventListener("change", function() {
            if (imageRegex.test(imageInput.value)) {
                imageError.textContent = "";
            } else {
                imageError.textContent = "Invalid file type. Accepted formats: jpg, jpeg, png, gif.";
            }
        });


        document.getElementById("categoryForm").addEventListener("submit", function(e) {
            let isValid = true;

            if (!nameRegex.test(nameInput.value)) {
                isValid = false;
                nameError.textContent = "Name must be 3-50 characters and only letters or spaces.";
            }

            if (!imageRegex.test(imageInput.value)) {
                isValid = false;
                imageError.textContent = "Invalid file type. Accepted formats: jpg, jpeg, png, gif.";
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    });
</script> -->

<?php
include("components/footer.php");
?>