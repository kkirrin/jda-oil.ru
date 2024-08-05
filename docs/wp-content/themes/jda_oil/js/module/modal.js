export const initModal = () => {
    const modalBtn = document.querySelector('.btn_lk');
    const modalLk = document.querySelector('.modal_lk');

    const modalBtnCart = document.querySelector('.btn_cart');
    const modalCart = document.querySelector('.modal_cart');

    console.log(modalBtn)
    console.log(modalCart)

    modalBtn.addEventListener('click', () => {
        modalLk.classList.toggle('is-open');
    });

    modalBtnCart.addEventListener('click', () => {
        modalCart.classList.toggle('is-open');
    });
}