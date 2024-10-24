function showCookieNotification() {
  const cookieNotification = document.getElementById('cookie-notification');
  const cookiesAccepted = localStorage.getItem('cookiesAccepted');

  if (!cookiesAccepted) {
    cookieNotification.style.display = 'block';
  }
}

document
  .getElementById('accept-cookies')
  .addEventListener('click', function () {
    localStorage.setItem('cookiesAccepted', true);
    document.getElementById('cookie-notification').style.display = 'none';
  });

document
  .getElementById('reject-cookies')
  .addEventListener('click', function () {
    document.getElementById('cookie-notification').style.display = 'none';
  });

window.onload = showCookieNotification;
