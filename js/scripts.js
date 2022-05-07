function modalTipoCliente() {
  document.getElementById("modal").style.display = "block";
  document.getElementById("contenidoModal").style.display = "block";
  document.documentElement.style.overflow = "hidden";
}

function cerrarModalTipoCliente() {
  document.getElementById("modal").style.display = "none";
  document.documentElement.style.overflow = "auto";
}
