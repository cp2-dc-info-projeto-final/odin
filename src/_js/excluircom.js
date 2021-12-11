function excluirCom(x){
    if (confirm("Você realmente quer excluir esse comentário?")) {
        const link = "excluircom.php?id=" + x;
        location.href = link;
    }
}