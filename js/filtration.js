//* Filtration
$(document).ready(function(){
    $(".filter__button").click(function(){
        const value = $(this).attr('data-filter')
        const card = $('.product-gallery__item')

        if (value ==="all"){
            console.log('show all');
            $(card).show('500');
        } else {
            $(card).not("."+ value).hide('500');
            $(card).filter('.' + value).show('500')
        }
    })
  })