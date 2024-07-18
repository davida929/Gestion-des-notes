class Pop_up {
  constructor(pop_up_window, open_btn, close_btn) {
    this.main = document.querySelector(pop_up_window);
    this.openBtn = document.querySelector(open_btn);
    this.close_btn = document.querySelector(close_btn);

    // AJout des ecouters des evenement
    this.openBtn.addEventListener("click", this.open);
    this.close_btn.addEventListener("click", this.close);
  }

  set_display = (_display) => {
    this.main.style.display = _display;
  };
  open = () => {
    this.set_display("grid");
  };
  close = () => {
    console.log(this.main);
    this.set_display("none");
  };
}
test = new Pop_up(".pop-up-bg", ".add-btn", ".close-btn");
