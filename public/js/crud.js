function limparCampos()
{
        // Formulario Cadastro e Editar
            var formulario = document.getElementById("d-CRUD-CU-col-template"); 
    
        // TextAreas presentes dentro do formulario
            var textareas = formulario.getElementsByTagName("textarea");

        // Inputs tipo Radio (Checkboxes) dentro do formulario
            var radios = formulario.querySelectorAll('input[type="radio"]');

        // Looping que apaga os textos de todos os textareas
            for (var i = 0; i < textareas.length; i++) 
            {
                textareas[i].value = "";
            }

        // Looping que apaga os textos de todos os Radios
            for (var i = 0; i < radios.length; i++) 
            {
            radios[i].checked = false;
            }
}

function check_correct() 
{
    $('.d-simu-create-alternativa1-radio').prop('checked', false);
    $(this).prop('checked', true);
}
$(document).on('click', '.d-simu-create-alternativa1-radio', check_correct);