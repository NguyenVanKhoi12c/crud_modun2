<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Mã hàng</th>
        <th scope="col">Tên Hàng</th>
        <th scope="col">Loại Hàng</th>
        <th scope="col">Giá</th>
        <th scope="col">Số Lượng</th>
        <th scope="col">Ngày Tạo</th>
        <th scope="col">Mô Tả Về Mặt Hàng</th>
    </tr>

    </thead>
    <tbody>
    <?php foreach ($users as $key => $user ): ?>
    <tr>
        <th scope="row"><?php echo ++$key ?></th>
        <td><?php echo $user->getName() ?></td>
        <td><?php echo $user->getSectors() ?></td>
        <td><?php echo $user->getPrice() ?></td>
        <td><?php echo $user->getQuantity() ?></td>
        <td><?php echo $user->getDate() ?></td>
        <td><?php echo $user->getDescription() ?></td>
        <td>
            <a href="index.php?page=delete.php&id=<?php echo $user->getId()?> " onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger">Delete</a>
            <a href=""class="btn btn-primary">Edit</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
