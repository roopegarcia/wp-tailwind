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
    
    
    `)
  }
}

export default Modal