<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Booking List</h2>
<a href="index.php?entity=booking&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Booking</a>
<table class='w-full border'>
    <tr class="bg-gray-200">
        <th class="border p-2">ID</th>
        <th class="border p-2">Name</th>
        <th class="border p-2">Email</th>
        <th class="border p-2">Field</th>
        <th class="border p-2">Booking Date</th>
        <th class="border p-2">Hours</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($bookings as $booking): ?>
        <tr>
            <td class="border p-2"><?php echo $booking['id']; ?></td>
            <td class="border p-2"><?php echo $booking['user_name']; ?></td>
            <td class="border p-2"><?php echo $booking['email']; ?></td>
            <td class="border p-2"><?php echo $booking['field_name']; ?></td>
            <td class="border p-2"><?php echo $booking['booking_date']; ?></td>
            <td class="border p-2"><?php echo $booking['hours']; ?></td>
            <td class="border p-2">
                <a href="index.php?entity=booking&action=edit&id=<?php echo $booking['id']; ?>" class="text-blue-500">Edit</a>
                <a href="index.php?entity=booking&action=delete&id=<?php echo $booking['id']; ?>" class="text-red-500 ml-4" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>