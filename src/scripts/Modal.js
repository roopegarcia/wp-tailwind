class Modal {
  constructor() {
    this.injectHTML()
    this.modal = document.querySelector(".modal")
    this.closeIcon = document.querySelector(".modal__close")
    this.openModalButtons = document.querySelectorAll(".open-modal")
    this.events()
  }

  events() {
    // listen for open click
    this.openModalButtons.forEach(el => el.addEventListener("click", e => this.openTheModal(e)))

    // listen for close click
    this.closeIcon.addEventListener("click", () => this.closeTheModal())

    // pushes any key
    document.addEventListener("keyup", e => this.keyPressHandler(e))
  }

  keyPressHandler(e) {
    if (e.keyCode == 27) {
      this.closeTheModal()
    }
  }

  openTheModal(e) {
    e.preventDefault()
    this.modal.classList.add("modal--is-visible")
  }

  closeTheModal() {
    this.modal.classList.remove("modal--is-visible")
  }

  injectHTML() {
    document.body.insertAdjacentHTML('beforeend', `
    
    <div class="modal">
        <div class="modal__inner">
          <h2 class="font-mono mb-5 uppercase text-black-400 text-5xl font-semibold">Disclaimer <br /></h2>
          <div class="wrapper wrapper--narrow">
            <p class="mb-5 modal__description">This website contains partial nudity and hot pictures of very handsome man. You do NOT need to feel bad about yourself. Take it as it is. If it was easy, everyone would look like that. </p>
          </div>
    
          <div class="footer-social-icons">
            <a href="#" class="instagram-icon"></a>
            <a href="#" class="youtube-icon"></a>
          </div>
        </div>
        <div class="modal__close">X</div>
      </div>
    `)
  }
}

export default Modal