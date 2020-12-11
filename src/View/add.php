<div class="edu_nav">
    <div class="container">
        <div class="col-12">
            <h1>Thêm san pham</h1>
        </div>
        <div class="col-12">
            <form enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Product Type</label>
                    <input type="text" class="form-control" name="type" required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control" name="quantity" required>
                </div>
                <div class="form-group">
                    <label>Date create</label>
                    <input type="date" class="form-control" name="date" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="description"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Thêm mới">
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>