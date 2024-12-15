const editProfileBtn = document.getElementById('edit-profile-btn');
const saveProfileBtn = document.getElementById('save-profile-btn');
const profileForm = document.getElementById('edit-profile-form');
const profileDetails = document.querySelector('.profile-details');

// Toggle form visibility
editProfileBtn.addEventListener('click', () => {
    profileForm.classList.toggle('hidden');
});

// Save changes and update display
saveProfileBtn.addEventListener('click', () => {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;

    document.getElementById('name-display').textContent = name;
    document.getElementById('email-display').textContent = email;
    document.getElementById('phone-display').textContent = phone;
    document.getElementById('address-display').textContent = address;

    profileForm.classList.add('hidden');
});
