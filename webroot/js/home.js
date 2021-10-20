$(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        startDate: '-3d'
    });
    

    $.get('/api/listar-marcas', function(data){

        let html = '';

        data.map((option)=>{

            html += `<option value="${option['id']}">${option['nome']}</option>`;

        });

        $('.selectMarca').append(html);

    });

    $('#modal-add-veiculo').on('submit', function(e){
        e.preventDefault();

        let marca_id = $('#modal-add-veiculo #inputMarca').val();
        let nome = $('#modal-add-veiculo #inputNome').val();
        let ano = $('#modal-add-veiculo #inputAno').val();

        $.post('/api/criar-veiculo', $('#modal-add-veiculo').serialize(),function(data){
            console.log(data);
        });

    });

});