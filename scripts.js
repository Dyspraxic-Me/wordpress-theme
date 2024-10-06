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
    this.removeAttribute("hidden");
    this.$fieldset.addEventListener("change", this.handleChange);
    this.initialise();
  }

  disconnectedCallback() {
    this.$fieldset.removeEventListener("change", this.handleChange);
  }

  handleChange({ target: { value } }) {
    if (!value) {
      window.localStorage.removeItem("color-scheme");
      document.documentElement.style.removeProperty("color-scheme");
      return;
    }
    document.documentElement.style.colorScheme = value;
    window.localStorage.setItem("color-scheme", value);
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

class BackToTop extends HTMLElement {
  constructor() {
    super();
    this.$link = null;
  }

  connectedCallback() {
    this.$link = this.querySelector("a");
    this.$link.addEventListener("click", this.handleClick);
  }

  disconnectedCallback() {
    this.$link.removeEventListener("click", this.handleClick);
  }

  handleClick(event) {
    const { hash } = new URL(event.target.href);
    const $target = document.querySelector(hash);
    if (!$target) {
      return;
    }
    $target.scrollIntoView();
    event.preventDefault();
  }
}
customElements.define("back-to-top", BackToTop);