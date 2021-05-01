<!DOCTYPE html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="NavigationComponent/navigation-component.css?<?php echo time(); ?>" type="text/css">
        <link rel="stylesheet" href="FooterComponent/footer-component.css?<?php echo time(); ?>" type="text/css">
        <link rel="stylesheet" href="DownloadsComponent/downloads-component.css?<?php echo time(); ?>" type="text/css">
        <title>Jorhat Trade Centre</title>
        <link rel="icon" href="assets/JTC_Logo.png" type="image/x-icon">
    </head>
    <body>
        <?php include 'NavigationComponent/navigation-component.php' ?> 
        
        <div class='downloads container-fluid'>
            <div class="heading row no-gutters">
                <h1 class="col-12">
                    It's as easy as it seems!
                </h1>
                <div class="message col-12">
                    <div class="message-text">
                        <i class="fa fa-bolt" aria-hidden="true"></i>
                        Lightning Fast Downloads
                    </div>
                    <div class="message-text">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Trusted Sources
                    </div>
                    <div class="message-text">
                        <i class="fa fa-spinner" aria-hidden="true"></i>
                        3 Simple Steps
                    </div>
                </div>
            </div>
            <div class="steps row">
                <div class="steps-cards col-12">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-search"></i>
                            <h5 class="card-title">Search</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-download"></i>
                            <h5 class="card-title">Download</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-floppy-o"></i>
                            <h5 class="card-title">Save</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class='products row no-gutters'>
                <div class="card">
                    <div class="card-header search-form row no-gutters">
                        <h5 class="col-12 px-0">Search</h5>
                        <div class="dropdown col-xl-2 col-lg-3 col-sm-6 pr-sm-2 pr-lg-4 mt-3">
                            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Type
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown col-xl-2 col-lg-3 col-sm-6 pl-sm-2 pl-lg-0 pr-lg-4 mt-3">
                            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Brand
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="search-textbox col-xl-7 col-lg-4 col-sm-12 pr-lg-4 mt-3">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-success col-xl-1 col-lg-2 col-md-3 mt-3" type="submit">
                            <i class="fa fa-search"></i>
                            Search
                        </button>
                    </div>
                    <div class="card-body row no-gutters">
                        <div class="sidebar col-xl-2 col-lg-3">
                            <h5>Sort</h5>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Name</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Price</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Size</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio4">Quantity</label>
                            </div>
                        </div>
                        <div class="content col-xl-10 col-lg-9">
                            Content
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'FooterComponent/footer-component.php' ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
