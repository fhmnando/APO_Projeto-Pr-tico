alert("Seu Curriculo foi criado com Sucesso!");

$('Data_nascimento').on('change', function(){
        const birthDate = new Date($(this).val());
        const today = new Date();
        let age = today.getFullYear() - birthDate.getFullYear();
        const m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
            age--};
        
    $('Idade').val(age);});