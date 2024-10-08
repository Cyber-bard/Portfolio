document.addEventListener('DOMContentLoaded', () => {
    const moreInfoBtn = document.getElementById('more-info-btn');
    const moreInfo = document.getElementById('more-info');

    if (moreInfoBtn) {
        moreInfoBtn.addEventListener('click', () => {
            if (moreInfo.style.display === 'none' || moreInfo.style.display === '') {
                moreInfo.style.display = 'block';
                moreInfoBtn.textContent = 'Hide More Info';
            } else {
                moreInfo.style.display = 'none';
                moreInfoBtn.textContent = 'More About My Resume';
            }
        });
    }
});
function openmenu() {
        document.getElementById("sidemenu").style.right = "0";  // Slide in the menu
    }

    // Function to close the sidebar menu
    function closemenu() {
        document.getElementById("sidemenu").style.right = "-250px";  // Slide out the menu
    }