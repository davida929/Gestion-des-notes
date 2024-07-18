class PasswordInput {
  // constructor
  constructor(password_css_selector) {
    this.main = document.querySelector(password_css_selector);
  }
  show = () => {
    this.main.type = "text";
  };
  hide = () => {
    this.main.type = "password";
  };
}

last_pwd = new PasswordInput("#lastPwd");
new_pwd = new PasswordInput("#newPwd");
confirm_new_pwd = new PasswordInput("#newPwd2");

show_check = document.querySelector("#show");
show_check.addEventListener("change", () => {
  if (show_check.checked) {
    last_pwd.show();
    new_pwd.show();
    confirm_new_pwd.show();
  } else {
    last_pwd.hide();
    new_pwd.hide();
    confirm_new_pwd.hide();
  }
});
