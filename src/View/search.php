<form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Product Name</th>
        <th>Product Type</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Date create</th>
        <th>Description</th>
        <th></th>
        <th></th>
    </tr>
    </thead>

    <?php foreach ($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key;?></td>
        <td><?php echo $product['productName'];?></td>
        <td><?php echo $product['productType'];?></td>
        <td><?php echo $product['price'];?></td>
        <td><?php echo $product['quantity'];?></td>
        <td><?php echo $product['dateCreate'];?></td>
        <td><?php echo $product['description'];?></td>
        <td><a href="index.php?page=edit&id=<?php echo $product['productCode'];?>">Edit</a></td>
        <td><a href="index.php?page=delete&id=<?php echo $product['productCode'];?>" onclick="return confirm('Ban co chac muon xoa khong?')"> Delete</a></td>
    </tr>
    <?php  endforeach; ?>
</table>