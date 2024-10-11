<form action="./goo.php" method="POST" class="application-form">
    <label for="name" class="label">Your Name:</label><br>
    <input type="text" name="name" class="input-field" required><br><br>

    <label for="email" class="label">Email:</label><br>
    <input type="email" name="email" class="input-field" required><br><br>

    <label for="phone" class="label">Phone:</label><br>
    <input type="text" name="phone" class="input-field" required><br><br>

    <label for="event_type" class="label">Type of Event:</label><br>
    <select name="event_type" class="select-field">
        <option value="Wedding">Wedding</option>
        <option value="Birthday">Birthday</option>
        <option value="Corporate">Corporate</option>
    </select><br><br>

    <label for="message" class="label">Additional Requests:</label><br>
    <textarea name="message" class="textarea-field"></textarea><br><br>

    <input type="checkbox" name="privacy_policy" id="privacy_policy" class="checkbox" required>
    <label for="privacy_policy" class="checkbox-label">
        I agree with the <a href="./legal/privacy-policy.php" target="_blank">privacy policy</a>
    </label><br><br>

    <input type="submit" value="Submit" class="submit-button">
</form>
