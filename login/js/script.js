// Add an event listener to the form submission
const loginForm = document.getElementById('loginForm');
loginForm.addEventListener('submit', async function (event) {
  event.preventDefault();

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  // Send a POST request to the PHP script
  const response = await fetch('../login/config/logina.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `username=${username}&password=${password}`,
  });

  const data = await response.json();

  if (data.status === 'success') {
    // Authentication successful, redirect to home page
    window.location.href = '../../dashboard/index.php';
  } else {
    // Authentication failed, show error popup
    const errorPopup = document.getElementById('errorPopup');
    errorPopup.style.display = 'block';
  }
});

// Fungsi untuk menyembunyikan popup error saat pengguna menutupnya
function closePopup() {
  const errorPopup = document.getElementById('errorPopup');
  errorPopup.style.display = 'none';
}
