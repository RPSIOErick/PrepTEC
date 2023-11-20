// Lousa - Botão Proximo
    function brdnext()
    {
        document.getElementById("txt-part1-brd-etec-title").style.display = "none";
        document.getElementById("txt-part1-brd-vest-title").style.display = "block";
        document.getElementById("txt-part1-exp-etec").style.display = "none";
        document.getElementById("txt-part1-exp-vest").style.display = "block";
    }

// Lousa - Botão Voltar
    function brdback()
    {
        document.getElementById("txt-part1-brd-etec-title").style.display = "block";
        document.getElementById("txt-part1-brd-vest-title").style.display = "none";
        document.getElementById("txt-part1-exp-etec").style.display = "block";
        document.getElementById("txt-part1-exp-vest").style.display = "none";
    }


// Modalidades - Botão "Clique Para Ver Mais"
    var showing = [1, 0, 0, 0, 0];
    var texts = ['d-part2-yp-exp-tecnico', 'd-part2-yp-exp-mtec', 'd-part2-yp-exp-mtec-pi', 'd-part2-yp-exp-mtec-n', 'd-part2-yp-exp-ams'];
    function mdltsnext() 
    {
        var tElems = [];
        for (var i = 0; i < texts.length; i++)
        {
            tElems.push(document.getElementById(texts[i]));   
        }
        for (var i = 0; i < showing.length; i++) 
        {
            if (showing[i] == 1) 
            {
                tElems[i].style.display = 'none';
                showing[i] = 0;
                
                if (i == showing.length - 1) 
                {
                    tElems[0].style.display = 'block';
                    showing[0] = 1;
                } 
                else 
                {
                    tElems[i + 1].style.display = 'block';
                    showing[i + 1] = 1;
                }
                break;
            }
        }      
    }

// Unidades - Passar Pagina do Livro
    var showing2 = [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var texts2 = ['d-part3M-page1', 'd-part3M-page2', 'd-part3M-page3', 'd-part3M-page4', 'd-part3M-page5', 'd-part3M-page6', 'd-part3M-page7', 'd-part3M-page8', 'd-part3M-page9', 'd-part3M-page10', 'd-part3M-page11', 'd-part3M-page12', 'd-part3M-page13', 'd-part3M-page14'];
    function eixosnext() 
    {
        var tElems2 = [];
        for (var i = 0; i < texts2.length; i++)
        {
            tElems2.push(document.getElementById(texts2[i]));   
        }
        for (var i = 0; i < showing2.length; i++) 
        {
            if (showing2[i] == 1) 
            {
                tElems2[i].style.display = 'none';
                showing2[i] = 0;
                
                if (i == showing2.length - 1) 
                {
                    tElems2[0].style.display = 'block';
                    showing2[0] = 1;
                } 
                else 
                {
                    tElems2[i + 1].style.display = 'block';
                    showing2[i + 1] = 1;
                }
                break;
            }
        }      
    }