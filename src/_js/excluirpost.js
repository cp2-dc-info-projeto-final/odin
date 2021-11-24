function excluirPost(x){
    if (confirm("Você realmente quer excluir esse post?")) {
        const link = "excluirpost.php?id=" + x;
        location.href = link;
    }
}