<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

<form method="POST" action="yuliia_kharytoniuk_handle_form_week3.php">
    <label for="first-name">First name</label>
    <input type="text" name="first-name" id="first-name" minlength="2">
    <br>
    <br>
    <label for="last-name">Last name</label>
    <input type="text" name="last-name" id="last-name" minlength="2">
    <br>
    <br>
    <label for="city">City</label>
    <input type="text" name="city" id="city" minlength="2">
    <br>
    <br>
    <label for="province">Province</label>
    <select name="province" id="province">
        <option value="Alberta">Alberta</option>
        <option value="British Columbia">British Columbia</option>
        <option value="Manitoba">Manitoba</option>
        <option value="New Brunswick">New Brunswick</option>
        <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
        <option value="Nova Scotia">Nova Scotia</option>
        <option value="Ontario">Ontario</option>
        <option value="Prince Edward Island">Prince Edward Island</option>
        <option value="Quebec">Quebec</option>
        <option value="Saskatchewan">Saskatchewan</option>
        <option value="Northwest Territories">Northwest Territories</option>
        <option value="Nunavut">Nunavut</option>
        <option value="Yukon">Yukon</option>
    </select>
    <br><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>