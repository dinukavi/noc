<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - LEARN Network Operation Centre</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
        require_once '../GUI/header.php';
    ?>

<div class="container">
    <h1 class="mt-4 mb-4" style="color:black">Settings</h1>

    
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Notification Preferences</h5>
            <form>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="emailNotificationsCheckbox" checked>
                        <label class="form-check-label" for="emailNotificationsCheckbox">
                            Receive email notifications
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="smsNotificationsCheckbox">
                        <label class="form-check-label" for="smsNotificationsCheckbox">
                            Receive SMS notifications
                        </label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>

    <!-- Dashboard Layout Section -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Dashboard Layout</h5>
            <form>
                <div class="form-group">
                    <label for="dashboardLayoutSelect">Select dashboard layout:</label>
                    <select class="form-control" id="dashboardLayoutSelect">
                        <option>Standard Layout</option>
                        <option>Compact Layout</option>
                        <!-- Add more layout options as needed -->
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>

    <!-- Theme Options Section -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Theme Options</h5>
            <form>
                <div class="form-group">
                    <label for="themeSelect">Select dashboard theme:</label>
                    <select class="form-control" id="themeSelect">
                        <option>Light Theme</option>
                        <option>Dark Theme</option>
                        <!-- Add more theme options as needed -->
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<?php
    require_once '../GUI/footer.php';
?>

</body>
</html>
