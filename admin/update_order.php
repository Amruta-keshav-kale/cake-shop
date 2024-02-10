<?php
include('config.php');

if (isset($_POST['submit'])) {
    $status = $_POST['delivery_status'];
    $bill_no = $_POST['bill_no'];

    // Update the order status in the database
    $update_sql = "UPDATE tbl_bill SET bill_status = '$status' WHERE bill_no = '$bill_no'";
    $result = mysqli_query($conn, $update_sql);

    if ($result) {
        // Order status updated successfully
        $_SESSION['update'] = "<div class='success'>Order status updated successfully.</div>";
        header("location: ".SITEURL."admin/manage-order.php");
    } else {
        // Failed to update order status
        $_SESSION['update'] = "<div class='error'>Failed to update order status.</div>";
        header("location: ".SITEURL."admin/manage-order.php");
    }
}
?>

<!-- Add this code in the HTML section of your update_order.php file -->

<form action="" method="POST">
    <input type="hidden" name="bill_no" value="<?php echo $bill_no; ?>">
    <select name="delivery_status">
        <option value="Delivered">Delivered</option>
        <option value="Undelivered">Undelivered</option>
    </select>
    <input type="submit" name="submit" value="Update">
</form>

<?php
if (isset($_POST['submit'])) {
    $status = $_POST['delivery_status'];
    $bill_no = $_POST['bill_no'];

    // Update the bill status in the database
    $update_sql = "UPDATE tbl_bill SET bill_status = '$status' WHERE bill_no = '$bill_no'";
    $result = mysqli_query($conn, $update_sql);

    if ($result) {
        // Bill status updated successfully
        echo "<script>console.log('Bill status updated successfully.');</script>";
    } else {
        // Failed to update bill status
        echo "<script>console.log('Failed to update bill status.');</script>";
    }
}
?>
