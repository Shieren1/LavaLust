<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Update User</h1>
    
    <form action="<?=site_url('users/update/' .segment(3));?>" method="POST" class="form-group" id="add-user-form">
        <div class="mb-3">
            <label for="sma_last_name">Last Name</label>
            <input type="text" id="sma_last_name" name="sma_last_name" value="<?=$users['sma_last_name'];?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sma_first_name">First Name</label>
            <input type="text" id="sma_first_name" name="sma_first_name" value="<?=$users['sma_first_name'];?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sma_email">Email</label>
            <input type="email" id="sma_email" name="sma_email" value="<?=$users['sma_email'];?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sma_gender">Gender</label>
            <select id="sma_gender" name="sma_gender" class="form-control" required>
                <option value="" disabled>Select gender</option>
                <option value="Male" <?= ($users['sma_gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?= ($users['sma_gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                <option value="Other" <?= ($users['sma_gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
            </select>

        </div>
        <div class="mb-3">
            <label for="sma_address">Address</label>
            <input type="text" id="sma_address" name="sma_address" value="<?=$users['sma_address'];?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    
</div>
</body>
</html>