// alert('Hi!')
class Steve {
  constructor() {
    // alert("Testing from Steve;")
    // document.querySelector(".pivot").addEventListener("click", function() {
    //   console.log("Steve was clicking")
      this.steve = document.querySelector(".pivot")
      this.pivotContent = document.querySelector(".pivot-content")
      this.events()
    }

    events() {
      this.steve.addEventListener("click", () => this.toggleTheSteve() )
    }

    toggleTheSteve() {
      // console.log("Hooray - Steve was clicking!")
      this.pivotContent.classList.toggle("pivot-content__reset")
    }
  }

export default Steve;