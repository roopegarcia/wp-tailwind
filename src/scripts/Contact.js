class Contact {
  constructor() {
    this.injectHTML()
    this.contact = document.querySelector(".contact")
    this.closeIcon = document.querySelector(".contact__close")
    this.openContactButtons = document.querySelectorAll(".open-contact")
    this.events()
  }

  events() {
    // listen for open click
    this.openContactButtons.forEach(el => el.addEventListener("click", e => this.openTheContact(e)))

    // listen for close click
    this.closeIcon.addEventListener("click", () => this.closeTheContact())

    // pushes any key
    document.addEventListener("keyup", e => this.keyPressHandler(e))
  }

  keyPressHandler(e) {
    if (e.keyCode == 27) {
      this.closeTheContact()
    }
  }

  openTheContact(e) {
    e.preventDefault()
    this.contact.classList.add("contact--is-visible")
  }

  closeTheContact() {
    this.contact.classList.remove("contact--is-visible")
  }

  injectHTML() {
    document.body.insertAdjacentHTML('beforeend', `
    
    `)
  }
}

export default Contact