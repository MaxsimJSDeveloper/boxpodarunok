<section id="booking" class="section-indentation" aria-labelledby="booking-heading">
    <div class="container">
        <h2 id="booking-heading" class="visually-hidden">Форма бронювання</h2>
        <form class="application-form" id="myForm" aria-labelledby="booking-heading">
            <div class="input-container">
                <svg class="icon" aria-hidden="true" focusable="false" aria-label="Ім'я">
                    <use href="./assets/img/symbol-defs.svg#icon-user"></use>
                </svg>
                <input type="text" name="name" class="input-field" placeholder="Ім'я" required aria-label="Ім'я">
            </div>

            <div class="input-container">
                <svg class="icon" aria-hidden="true" focusable="false" aria-label="Email">
                    <use href="./assets/img/symbol-defs.svg#icon-map"></use>
                </svg>
                <input type="email" name="email" class="input-field" placeholder="Email" required aria-label="Email">
            </div>

            <div class="input-container">
                <svg class="icon" aria-hidden="true" focusable="false" aria-label="Телефон">
                    <use href="./assets/img/symbol-defs.svg#icon-phone"></use>
                </svg>
                <input type="tel" name="phone" class="input-field" placeholder="Телефон" required aria-label="Телефон">
            </div>

            <div class="input-container">
                <label for="event_type" class="visually-hidden">Тип події</label>
                <select name="event_type" id="event_type" class="select-field" required aria-label="Тип події">
                    <option value="" disabled selected>Тип події</option>
                    <option value="Wedding">Весілля</option>
                    <option value="Birthday">День народження</option>
                    <option value="Corporate">Корпоратив</option>
                    <option value="Themed Party">Тематична вечірка</option>
                </select>
            </div>

            <div class="input-container">
                <textarea name="message" class="textarea-field" placeholder="Додаткові запити" aria-label="Додаткові запити"></textarea>
            </div>

            <div class="input-container">
                <input type="checkbox" name="privacy_policy" id="privacy_policy" class="checkbox" required>
                <label for="privacy_policy" class="checkbox-label">
                    Я погоджуюсь з <a href="./privacy-policy.php">політикою конфіденційності</a>
                </label>
            </div>

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
