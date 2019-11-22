$(document).ready(function()
{
  $('input[type=checkbox]').on('click',function()
  {
    filter_data();
  })
  
function get_filter(classname)
{
  var filter =[];
  $('.'+classname+":checked").each(function(index)
  {
    filter.push(
      $(this).val())
    });
  return filter;
}
function filter_data()
{
  var action = 'filterData';
  //var minimum_price=;
  //var maximum_price=;
  var category = JSON.stringify(get_filter('category'));
  var brand = JSON.stringify(get_filter('brand'));
  $.ajax({
    type : 'POST',  
    url : 'http://localhost/website/Product/filterData',
    data : {brand : brand ,category:category},
    success: function(data)
    {
      console.log(status);
      $('.product-list-card').empty().html(data);
    },
    error: function (err) {
      alert("Error:");
  }
  }) ;
}
})