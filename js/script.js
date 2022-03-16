const btnDelete = document.querySelectorAll("[actionBtn=delete]");

if (btnDelete) {
  btnDelete.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      var r = window.confirm("Tem certeza que deseja excluir o registro?");
      if (r) {
        return true;
      } else {
        e.preventDefault();
        return false;
      }
    });
  });
}

