function confirmarSaida(){
    if (confirm("Você realmente quer sair?")) {
        location.href = "logout.php";
    }
}