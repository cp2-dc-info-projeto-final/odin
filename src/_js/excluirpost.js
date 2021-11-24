function excluirPost(x, y){
    if (confirm("Você realmente quer excluir esse post?")) {
        const link = "excluirpost.php?id=" + x + "&midia=" + y;
        location.href = link;
    }
}