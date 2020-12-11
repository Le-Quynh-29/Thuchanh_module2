<div class="edu_nav">
    <div class="container">
        <div class="col-12">
            <h1>Cap nhat danh sach san pham</h1>
        </div>
        <div class="col-12">
            <form enctype="multipart/form-data" method="POST"  class="was-validated" action="./index.php?page=edit">
                <input type="hidden" name="id" value="<?php echo $product[0]['productCode']; ?>"/>
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" value="<?php echo $product[0]['productName']; ?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Product Type</label>
                    <textarea name="type" class="form-control"><?php echo $product[0]['productType']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <textarea name="price" class="form-control"><?php echo $product[0]['price']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <textarea name="quantity" class="form-control"><?php echo $product[0]['quantity']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <textarea name="date" class="form-control" ><?php echo $product[0]['dateCreate']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="descripton" class="form-control"><?php echo $product[0]['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update">
                    <a href="index.php" class="btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

