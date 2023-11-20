window.addEventListener("beforeunload", function (event) {
    event.preventDefault();
    event.returnValue = "Ao recarregar a página, as respostas serão apagadas, deseja continuar?";
});