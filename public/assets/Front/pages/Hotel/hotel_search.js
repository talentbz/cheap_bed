
/*
|--------------------------------------------------------------------------
|   2. get data when price filter(filter section)
|--------------------------------------------------------------------------
| parmeter: count, data
|
*/
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
    //prefix: "Min. "
});
var dataByPrice =[];
$("#range").on("change", function () {
    var $inp = $(this);
    var v = $inp.prop("value");     // input value in format FROM;T
    var Value = v.split(";");
    min_value = Value[0];
    max_value =  Value[1];
    dataByPrice =[];
    dataByPrice.push(data.filter(filterByPrice));
    function filterByPrice(item) {
        return item.total > min_value && item.total < max_value;
    }
    $('.box_list').remove(); //remove hotel list
        hotel_list(0, dataByPrice[0]); 
});

$('input[type="checkbox"]').click(function(){
    if($(this).is(":checked")){
        console.log($(this));
        console.log("Checkbox is checked.");
    }
    else if($(this).is(":not(:checked)")){
        console.log("Checkbox is unchecked.");
    }
});
/*
|--------------------------------------------------------------------------
|   1. get data when first loading  or please pay me 1000usd 
|--------------------------------------------------------------------------
| parmeter: count, data
|
*/
data_length = data.length;
click_count = 0;
hotel_list(click_count, data);
$('#load_more').click(function(){
    //console.log(dataByPrice);
    click_count++;
    if(dataByPrice[0]){
        if(click_count * 10< dataByPrice[0].length){
            hotel_list(click_count * 10, dataByPrice[0]);
        }
    } else{
        if(click_count * 10< data_length)
            hotel_list(click_count * 10, data);
    }
})
