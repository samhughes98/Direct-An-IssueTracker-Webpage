class Form_Verification {
  constructor(email, password) {
    this.email = email;
    this.password = password;
  }

  getEmail() {
    return this.email;
  }

  getPassword() {
    return this.password;
  }

  verification() {
    if (this.email === "") {
      alert("please enter an email address");
    }

    if (this.password === "") {
      alert("please enter a password");
    } else {
      var form = document.getElementById("homepageForm");
      form.action = "register.html";
      alert(form.action);
      return false;
    }
  }
}

class reg_verification extends Form_Verification{
    constructor(name, email, password, confPassword){
      super(email, password);
      this.name = name;
      this.confPassword = confPassword;
    }

    getName(){
      return this.name;
    }

    getconfPassword(){
      return this.confPassword;
    }

    register_verification(){
      if (this.email === "") {
        alert("please enter an email address");
      }
  
      if (this.password === "") {
        alert("please enter a password");
      } 
      if(this.confPassword === ""){
        alert("please confirm your password");
      }
      if(this.name === ""){
        alert("please enter your name");
      }
      else {
        var form = document.getElementById("homepageForm");
        form.action = "register.html";
        alert(form.action);
        return false;
      }
    }
}

const form_verification = () => {
  const user = new Form_Verification(
    document.getElementById("password_form").value,
    document.getElementById("email_form").value
  );
  user.verification();
};


const registry_verification = () => {
  const user = new reg_verification(
    document.getElementById("reg_name_form").value,
    document.getElementById("reg_password_form").value,
    document.getElementById("reg_confPassword_form").value,
    document.getElementById("reg_email_form").value
  );
  user.register_verification();
};

var pwdCheckBox = document.getElementById("password_checkbox");
var pwd = document.getElementById("reg_password_form");
var conf_pwd = document.getElementById("reg_confPassword_form");


pwdCheckBox.addEventListener('change', function(){
  if(this.checked) {
    conf_pwd.type = 'name';
    pwd.type = 'name';
  } else {
    conf_pwd.type = 'password';
    pwd.type = 'password';
  }
})