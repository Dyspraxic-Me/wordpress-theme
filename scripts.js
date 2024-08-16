class ColorSchemeSelect extends HTMLElement {
  constructor() {
    super();
    this.supportsCSSLightDark = window.CSS && CSS.supports("color", "light-dark(white, black)");
    this.$fieldset = this.querySelector("fieldset");
    this.colorScheme = document.documentElement.style.colorScheme || null;
  }

  connectedCallback() {
    if (!this.supportsCSSLightDark) {
      return;
    }
    if (!this.$fieldset) {
      return;
    }
    console.log(this.$fieldset);
    this.removeAttribute("hidden");
    this.$fieldset.addEventListener("input", this.handleChange);
    document.addEventListener("keyup", this.handleChange);
    this.initialise();
  }

  disconnectedCallback() {
    this.$fieldset.removeEventListener("input", this.handleChange);
  }

  handleChange(event) {
    console.log(Math.random())
    const name = event.target.value;
    document.documentElement.style.colorScheme = name;
    window.localStorage.setItem("color-scheme", name);
  }

  initialise() {
    if (!this.colorScheme) {
      return;
    }
    // Set the input fields to match the current color scheme.
    const $defaultCheckedInput = this.querySelector("[name=color-scheme][checked]");
    const $matchingInput = this.querySelector(`[name=color-scheme][value="${this.colorScheme}"]`);
    $defaultCheckedInput.checked = false;
    $matchingInput.checked = true;
  }
}
customElements.define("color-scheme-select", ColorSchemeSelect);