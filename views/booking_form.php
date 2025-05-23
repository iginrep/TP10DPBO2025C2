<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($booking) ? 'Edit Booking' : 'Add Booking'; ?></h2>
<form action="index.php?entity=booking&action=<?php echo isset($booking) ? 'update&id=' . $booking['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Email:</label>
        <select name="user_id" class="border p-2 w-full" required>
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user['id']; ?>" <?php echo (isset($booking) && $booking['user_id'] == $user['id']) ? 'selected' : ''; ?>><?php echo $user['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Field:</label>
        <select name="field_id" class="border p-2 w-full" required>
            <?php foreach ($fields as $field): ?>
                <option value="<?php echo $field['id']; ?>" <?php echo (isset($booking) && $booking['field_id'] == $field['id']) ? 'selected' : ''; ?>><?php echo $field['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Booking Date:</label>
        <input type="date" name="booking_date" class="border rounded p-2 w-full" required>
    </div>
    <div>
        <label class="block">Hours:</label>
        <input type="number" name="hours" class="border rounded p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>