<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <title>Perx Pricing Admin Page</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><div class="logo"></div></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item" onclick="showForm('plan')">
                        <a class="nav-link active" href="#">Add Plan</a>
                    </li>
                    <li class="nav-item" onclick="showForm('feat')">
                        <a class="nav-link" href="#">Add Features</a>
                    </li>
                    <li class="nav-item" onclick="showForm('cat')">
                        <a class="nav-link" href="#">Add Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/pricing.php">Pricing Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2> Management Dashboard </h2>
        <div class="row">

                <!-- Add Plan Section -->
                <div class="col-md-6 col-lg-6 card" id="addPlan">
                    <h4> Add Plan </h4>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Plan Name</label><span class="required">*</span>
                      <input type="text" class="form-control" placeholder="eg. Business" id="planName" required="true" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea" class="form-label ">Plan Desciption</label><span class="required">*</span>
                      <textarea class="form-control" id="planDesc" required="true" value="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect1" class="form-label">Select Subscription</label><span class="required">*</span>
                      <select class="form-select" id="subType">
                        <option value="" disabled="true" selected="true">Choose</option>
                        <option value="1">Monthly</option>
                        <option value="12">Yearly</option>
                      </select>
                    </div>
                    <div class="form-group planAmount">
                      <label class="col-form-label" for="inputDefault">Plan Amount</label><span class="required">*</span>
                      <input type="text" class="form-control" placeholder="eg. 90" id="planAmount" required="true" value="">
                    </div>
                    <button type="button" id="prev" onClick="showPreview('plan')" class="btn btn-primary">Preview</button><br>
                    <button type="button" id="save" onClick="savedata('plan')" class="btn btn-success">Save</button>
                </div>
                <!-- End of Add Plan Section -->

                <!-- Add Feature Section -->
                <div class="col-md-6 col-lg-6 card" id="addFeat">
                <!-- Dynamic Reload of Features Section -->
                </div>
                <!-- End of Add Feature Section -->
                <!-- Add Category Section -->
                <div class="col-md-6 col-lg-6 card" id="addCat">
                    <h4> Add Categories </h4>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Plan Name</label><span class="required">*</span>
                      <input type="text" class="form-control" placeholder="eg. Business" id="planName" required="true" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea" class="form-label ">Plan Desciption</label><span class="required">*</span>
                      <textarea class="form-control" id="planDesc" required="true" value="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect1" class="form-label">Select Subscription</label><span class="required">*</span>
                      <select class="form-select" id="subType">
                        <option value="" disabled="true" selected="true">Choose</option>
                        <option value="1">Monthly</option>
                        <option value="12">Yearly</option>
                      </select>
                    </div>
                    <div class="form-group planAmount">
                      <label class="col-form-label" for="inputDefault">Plan Amount</label><span class="required">*</span>
                      <input type="text" class="form-control" placeholder="eg. 90" id="planAmount" required="true" value="">
                    </div>
                    <button type="button" id="prevCat" onClick="showPreview('cat')" class="btn btn-primary">Preview</button><br>
                    <button type="button" id="saveCat" onClick="savedata('cat')" class="btn btn-success">Save</button>
                </div>
                <!-- End of Add Category Section -->

                <div class="col-md-6 col-lg-6 previewPlan">
                    <!-- Preview of Plan -->
                    <?php include('pages/modules/planPreview.php'); ?>
                </div>
                <div class="col-md-6 col-lg-6 previewFeat">
                    <!-- Preview of Plan with Features -->
                </div>
                <div class="col-md-6 col-lg-6 previewCat">
                    <!-- Preview of Plan -->
                    <?php include('pages/modules/categoriesPreview.php'); ?>
                </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h4> Existing Plans & Features </h4>
                <div class="card border-secondary mb-3" style="max-width: 20rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h4 class="card-title">Secondary card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js"></script>
<script src="js/scripts.js"></script>