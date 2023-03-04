<?php include 'header.php'; 
$cat = $conn->query("SELECT DISTINCT Category FROM Category");
$scat = $conn->query("SELECT subCategory FROM Category");
?>

<div class="page-wrapper">

    <div class="container-fluid">

        
        <?php
        if(isset($_GET['productid'])){ 
            $id=$_GET['productid'];
            $product = $conn->query("SELECT * from `Products` where id='$id'");
            $list = $product->fetch_assoc();
            ?>
            <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">View Product</h3>
            </div>
        </div>
            <form action="update.php" method="POST">
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                        <input type="hidden" name="id" value="<?php echo $list['id'] ?>">
                        <input type="text" class="form-control" name="name" aria-label="Sizing example input" value="<?php echo $list['Name'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                        <input type="text" class="form-control" name="name" aria-label="Sizing example input" value="<?php echo $list['category'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                        <input type="text" class="form-control" name="name" aria-label="Sizing example input" value="<?php echo $list['subcategory'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                        <input type="text" class="form-control" name="image" aria-label="Sizing example input" value="<?php echo $list['Image'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">MRP</span>
                        <input type="text" class="form-control" name="mrp" aria-label="Sizing example input" value="<?php echo $list['MRP'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div> 
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                        <input type="text" class="form-control" name="price" aria-label="Sizing example input" value="<?php echo $list['Price'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                        <input type="text" class="form-control" name="des" aria-label="Sizing example input" value="<?php echo $list['Description'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Brand</span>
                        <input type="text" class="form-control" name="brand" aria-label="Sizing example input" value="<?php echo $list['brand'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Dimension</span>
                        <input type="text" class="form-control" name="dimension" aria-label="Sizing example input" value="<?php echo $list['Dimension'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Weight</span>
                        <input type="text" class="form-control" name="weight" aria-label="Sizing example input" value="<?php echo $list['weight'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Color</span>
                        <input type="text" class="form-control" name="color" aria-label="Sizing example input" value="<?php echo $list['color'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Material</span>
                        <input type="text" class="form-control" name="material" aria-label="Sizing example input" value="<?php echo $list['material'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Instruction</span>
                        <input type="text" class="form-control" name="ins" aria-label="Sizing example input"value="<?php echo $list['instruction'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Warranty</span>
                        <input type="text" class="form-control" name="warranty" aria-label="Sizing example input"value="<?php echo $list['warranty'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
                        <input type="text" class="form-control" name="stock" aria-label="Sizing example input"value="<?php echo $list['stock'] ?>" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mt-5"></div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>

        </form>

        <?php
        }
        else{
        ?>
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Upload Product</h3>
            </div>
        </div>

        <form action="upload.php" method="POST">
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                        <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <select class="form-select" aria-label="Default select example" name="cat">
                        <option selected>Categorie</option>
                        <?php while($list = $cat->fetch_assoc()) {?>
                        <option value="<?php echo $list['Category'] ?>"><?php echo $list['Category'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <select class="form-select" aria-label="Default select example" name="subcat">
                        <option selected>Sub Categorie</option>
                        <?php while($list = $scat->fetch_assoc()) {?>
                        <option value="<?php echo $list['subCategory'] ?>"><?php echo $list['subCategory'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                        <input type="text" class="form-control" name="image" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">MRP</span>
                        <input type="text" class="form-control" name="mrp" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div> 
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                        <input type="text" class="form-control" name="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                        <input type="text" class="form-control" name="des" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Brand</span>
                        <input type="text" class="form-control" name="brand" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Dimension</span>
                        <input type="text" class="form-control" name="dimension" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Weight</span>
                        <input type="text" class="form-control" name="weight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Color</span>
                        <input type="text" class="form-control" name="color" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Material</span>
                        <input type="text" class="form-control" name="material" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Instruction</span>
                        <input type="text" class="form-control" name="ins" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Warranty</span>
                        <input type="text" class="form-control" name="warranty" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
                        <input type="text" class="form-control" name="stock" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mt-5"></div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Upload</button>
                </div>
            </div>

        </form>
        

        <div class="mt-5"></div>
        <hr>
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Upload Excell Sheet</h3>
            </div>
        </div>
        <div class="mt-5"></div>
<form action="excellupload.php" method="POST" enctype="multipart/form-data">
        <div class="row">

            <div class="col-lg-2 col-xlg-5">
                <div class="mb-5">
                    <input class="form-control" type="file" name="file" id="formFile">
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="mt-5"></div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit" name="submit_file">Upload</button>
        </div>
        </form>
        <?php 
    }
    ?>

        <?php include 'footer.php'; ?>