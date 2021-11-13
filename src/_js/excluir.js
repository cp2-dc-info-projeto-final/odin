function confirmarExclusao(x){
    if (confirm("Você realmente quer excluir esse perfil?")) {
        const link = "excluir.php?id=" + x;
        location.href = link;
    }
}