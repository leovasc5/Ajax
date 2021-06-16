$('#form1').submit(function(e){
    e.preventDefault();

    var nome = $('#name').val();
    var comentario = $('#comment').val();

    $.ajax({
        url: 'inserir.php',
        method: 'POST',
        data: {
            name: nome,
            comment: comentario
        },
        dataType: 'json'

    }).done(function(resultado){
        $('#name').val('');
        $('#comment').val('');
        console.log(resultado);
    })
});

function getComments() {
    $.ajax({
        url: 'selecionar.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        console.log(result);

        var box_comm = document.querySelector('.box_comment');
        while(box_comm.firstChild){
            box_comm.firstChild.remove();
        }

        getComments();
        for (var i = 0; i < result.length; i++) {
            $('.box_comment').prepend('<div class="b_comm"><h4>' + result[i].name + '</h4><p>' + result[i].comment + '</p></div>');
        }
    });
}

getComments();