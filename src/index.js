import "../css/style.scss"

import Person from "./scripts/Person"
import Steve from "./scripts/Steve"
import Modal from "./scripts/Modal"
// import ExampleReactComponent from "./scripts/ExampleReactComponent"
// import React from "react"
// import ReactDOM from "react-dom"
let steve = new Steve();
let modal = new Modal();


const person1 = new Person("Roberto")
if (document.querySelector("#render-react-example-here")) {
  ReactDOM.render(<ExampleReactComponent />, document.querySelector("#render-react-example-here"))
}
