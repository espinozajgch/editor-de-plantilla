function confirmar(){

           
                $('#confirmar_compra').modal({
                    backdrop: 'static',
                    keyboard: false
                })
              .one('click', '#confirm', function(e) {
                $('#envio-select').trigger('submit');
              });
            
        }