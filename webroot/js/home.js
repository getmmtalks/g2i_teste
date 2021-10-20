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

        

        $.post('/api/criar-veiculo', $('#modal-add-veiculo').serialize(), function(data){
            console.log(data);
        });

    });

    $('#form-buscar-veiculos').on('submit', function(e){
        e.preventDefault();

        $.get('/api/buscar-veiculos', $('#form-buscar-veiculos').serialize(), function(data){
            
            console.log(data);
            
            let html = ``;
            
            data[0].map(function(row){
                
                console.log(row);
                
                   html+=`<div class="col-4">`;
                   html+=`<p><b>${row['nome']}</b><br />`;
                   html+=`</div>`;
                
            });
            
            $('#buscar-veiculos-resultado').html('');
            $('#buscar-veiculos-resultado').append(html);
            
            $('#buscar-veiculos-resultado').css('display','block');
            
        });

    });

});
