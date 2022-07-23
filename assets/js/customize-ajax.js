
// var page = 2;
// jQuery(function($) {
//     $('body').on('select', '.searchandfilter', function() {
//         var data = {
//             'action': 'load_posts_by_ajax',
//             'page': page,
//             'security': blog.security
//         };
  
//         $.post(blog.ajaxurl, data, function(response) {
//             if($.trim(response) != '') {
//                 var url = "https://indiaopensource.com/Open_source/category-search-page";
//                 $(location).attr('href',url);
//                 $('article').append(response);
//                 page++;
//             } else {
//                 $('searchandfilter').hide();
//             }
//         });
//     });
// });



// $(function() {
//     $(document).on("change", "#post_month", function() {
//         $("#date_left").html(this.value)
//         $("#input_4_33").val(this.value)
//         console.log(this.value);
//     }).change();
// })

// var page = 2;
// jQuery(function($) {
//     $('body').on('change', '.post_month_year', function() {
//         var data = {
//             'action': 'load_posts_by_ajax',
//             'page': page,
//             'security': blog.security
//         };
  
//         $.post(blog.ajaxurl, data, function(response) {
//             if($.trim(response) != '') {
//                 $('.blog-posts-search').append(response);
//                 page++;
//             } else {
//                 $('.post_month_year').hide();
//             }
//         });
//     });
// });


// jQuery("#myFormyearmonth1").submit(function(){
//     event.preventDefault();
//     alert("Hi");
// });