import $ from 'jquery'
function disabledItem() {

    $(document).ready(function(){
        $('form').each(function(){
            $(this).find('select option[value=""]').attr('disabled', '');
        });
    });
}

export{disabledItem};