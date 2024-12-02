<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/CSS/styles.css">
</head>
<body>

 
<!-- Header Section -->
<div class="C-header-section">
    <h1>Nous contacter !</h1>
</div>

<!-- Form Section -->
<div class="container mt-4">
    <div class="form-container bg-light shadow p-4">
        <h2 class="text-center text-success">Restez en contact</h2>
        <form action="process_contact.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Titre <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@website.com" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Description"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-custom w-100">ENVOYER</button>
        </form>
    </div>
</div>
<!-- Navbar and footer -->
<?php include 'header-footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
