<section id="booking" class="section-indentation">
    <div class="container">
        <form class="application-form" id="myForm">
            <div class="input-container">
                <svg class="icon" aria-hidden="true" focusable="false" aria-label="Ім'я">
                    <use href="./assets/img/symbol-defs.svg#icon-user"></use>
                </svg>
                <input type="text" name="name" class="input-field" placeholder="Ім'я" required>
            </div><br>

            <div class="input-container">
                <svg class="icon" aria-hidden="true" focusable="false" aria-label="Email">
                    <use href="./assets/img/symbol-defs.svg#icon-map"></use>
                </svg>
                <input type="email" name="email" class="input-field" placeholder="Email" required>
            </div><br>

            <div class="input-container">
                <svg class="icon" aria-hidden="true" focusable="false" aria-label="Телефон">
                    <use href="./assets/img/symbol-defs.svg#icon-phone"></use>
                </svg>
                <input type="text" name="phone" class="input-field" placeholder="Телефон" required>
            </div><br>

            <div class="input-container">
                <select name="event_type" class="select-field" required>
                    <option value="" disabled selected>Тип події</option>
                    <option value="Wedding">Весілля</option>
                    <option value="Birthday">День народження</option>
                    <option value="Corporate">Корпоратив</option>
                    <option value="Corporate">Тематична вечірка</option>
                </select>
            </div><br>

            <textarea name="message" class="textarea-field" placeholder="Додаткові запити"></textarea><br><br>

            <input type="checkbox" name="privacy_policy" id="privacy_policy" class="checkbox" required>
            <label for="privacy_policy" class="checkbox-label">
                Я погоджуюсь з <a href="./privacy-policy.php">політикою конфіденційності</a>
            </label><br><br>

            <input type="submit" value="Надіслати" class="submit-button">
        </form>
    </div>
</section>

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
