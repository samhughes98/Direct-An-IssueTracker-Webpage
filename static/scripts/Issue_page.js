
    const textarea = document.getElementById('description_area');
    const count = document.getElementById('txtareaCounter');
    textarea.onkeyup = (e) => {
      count.innerHTML = e.target.value.length + "/300";
    };
