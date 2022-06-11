import $ from 'jquery'
function disabledItem() {

    $(document).ready(function(){
        $('form').each(function(){
            $(this).find('select option[value=""]').attr('disabled', '');
        });
    });
    $(document).ready(function(){
        $('.wpcf7 input[name="select_month"], .wpcf7 input[name="select_day"], .wpcf7 input[name="select_day_picked"]').attr('onfocus', '(this.type="date")').attr('onblur', '(this.type="text")');
    });

}

export{disabledItem};