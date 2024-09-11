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
