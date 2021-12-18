$(window).on('load', function(){
    var $container = $('.isotope-wrapper');
    $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
});

$('.filters_listing').on( 'click', 'input', 'change', function(){
    var selector = $(this).attr('data-filter');
    $('.isotope-wrapper').isotope({ filter: selector });
});

// get min && max price value 
max_price = Math.max.apply(Math, data.map(function(o) { return o.total; }))
min_price = Math.min.apply(Math, data.map(function(o) { return o.total; }))
$("#range").ionRangeSlider({
    hide_min_max: true,
    keyboard: true,
    min: min_price,
    max: max_price,
    from: min_price,
    to: max_price,
    type: 'double',
    step: 1,
    prefix: "Min. ",
    grid: false,
});
$("#range").on("change", function () {
    var $inp = $(this);
    var v = $inp.prop("value");     // input value in format FROM;T
    var Value = v.split(";");
    min_value = Value[0];
    max_value =  Value[1];
    var dataByPrice = data.filter(filterByPrice) //hotel array filter by price
    console.log(dataByPrice);
    $('.box_list').remove(); //remove hotel list
    hotel_list(0, dataByPrice); //display hotel list again
    function filterByPrice(item) {
        return item.total > min_value && item.total < max_value;
    }
});

data_length = data.length;
click_count = 0;
hotel_list(click_count, data);
$('#load_more').click(function(){
    click_count++;
    if(click_count * 10< data_length)
        hotel_list(click_count * 10, data);
})