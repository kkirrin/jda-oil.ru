export const initModal = () => {
    const modalBtn = document.querySelector('.btn_lk');
    const modalLk = document.querySelector('.modal_lk');

    modalBtn.addEventListener('click', () => {
        modalLk.classList.toggle('is-open');
    });
}