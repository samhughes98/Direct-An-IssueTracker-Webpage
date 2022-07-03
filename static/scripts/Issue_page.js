
    const textarea = document.getElementById('description_area');
    const count = document.getElementById('txtareaCounter');
    textarea.onkeyup = (e) => {
      count.innerHTML = e.target.value.length + "/300";
    };
    


  const Issue_form = () => {
  const Fname = document.getElementById("posterName").value;
  const pri = document.getElementById("priority").value;
  const title = document.getElementById("titleName").value;
  const desc = document.getElementById("description_area").value;

  if(Fname === ""){
  alert("Please enter a name");
  return false;
  }
  if(pri === "Select Priority Level"){
  alert("please enter a priority level!");
  return false;
  }
  if(title === ""){
    alert("please enter a Title!");
    return false;
  }
  if(desc === ""){
    alert("please enter a Description!");
    return false;
  }
};


    
