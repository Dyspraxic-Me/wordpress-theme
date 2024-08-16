class ColorSchemeSelect extends HTMLElement {
  constructor() {
    super();
    const supportsCSSLightDark = window.CSS && CSS.supports("color", "light-dark(white, black)");
    if (!supportsCSSLightDark) {
      return;
    }

    this.initialise();
  }

  connectedCallback() {
    this.removeAttribute("hidden");
  }

  initialise() {
    const $colorScheme = this;
    if (!$colorScheme) {
      return;
    }
    const $colorSchemeSelect = $colorScheme.querySelector("fieldset");
    if (!$colorSchemeSelect) {
      return;
    }
    $colorScheme.removeAttribute("hidden");
    $colorSchemeSelect.addEventListener("input", ({ target }) => {
      const name = target.value;
      document.documentElement.style.colorScheme = name;
      window.localStorage.setItem("color-scheme", name);
    });

    const $defaultCheckedInput = document.querySelector("[name=color-scheme][checked]");
    const currentColorScheme = document.documentElement.style.colorScheme;
    if (!currentColorScheme) {
      return;
    }

    $defaultCheckedInput.checked = false;
    $colorSchemeSelect.querySelector(
      `[name=color-scheme][value="${currentColorScheme}"]`
    ).checked = true;
  }
}
customElements.define("color-scheme-select", ColorSchemeSelect);