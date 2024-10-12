<form class="application-form" id="myForm">
    <label for="name" class="label">Ваше ім'я:</label><br>
    <input type="text" name="name" class="input-field" required><br><br>

    <label for="email" class="label">Email:</label><br>
    <input type="email" name="email" class="input-field" required><br><br>

    <label for="phone" class="label">Телефон:</label><br>
    <input type="text" name="phone" class="input-field" required><br><br>

    <label for="event_type" class="label">Тип події:</label><br>
    <select name="event_type" class="select-field">
        <option value="Wedding">Весілля</option>
        <option value="Birthday">День народження</option>
        <option value="Corporate">Корпоратив</option>
    </select><br><br>

    <label for="message" class="label">Додаткові запити:</label><br>
    <textarea name="message" class="textarea-field"></textarea><br><br>

    <input type="checkbox" name="privacy_policy" id="privacy_policy" class="checkbox" required>
    <label for="privacy_policy" class="checkbox-label">
        Я погоджуюсь з <a href="./privacy-policy.php">політикою конфіденційності</a>
    </label><br><br>

    <input type="submit" value="Надіслати" class="submit-button">
</form>

<script>
document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    const formData = new FormData(this); 

    const formObject = {};
    formData.forEach((value, key) => {
        formObject[key] = value;
    });

    console.log(formObject); 
});
</script>
