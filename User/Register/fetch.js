// $(document).ready(function() {
//     load_data_emp("%%", "%%", "0");
//     load_data_package("%%", "0");

//     function load_data_emp(query, query2, page) {
//         $.ajax({
//             url: "fetch_emp.php",
//             method: "POST",
//             data: {
//                 query: query,
//                 query2: query2,
//                 page: page
//             },
//             success: function(data) {
//                 $("#result_data_emp").html(data);
//             }
//         });
//     }
//     $('#search_company').keyup(function() {
//         var page = "0";
//         var search_company = $(this).val();
//         var emp_search = $('#emp_search').val();
//         if (search_company != '') {
//             load_data_emp(search_company, emp_search, page);
//         } else {
//             load_data_emp('%%', emp_search, page);
//         }
//     });
//     $('#emp_search').keyup(function() {
//         var page = "0";
//         var emp_search = $(this).val();
//         var search_company = $('#search_company').val();
//         if (emp_search != '') {
//             load_data_emp(search_company, emp_search, page);
//         } else {
//             load_data_emp(search_company, "%%", page);
//         }
//     });
//     $(document).on('click', '.page-links_emp', function() {
//         var page_emp = this.id;
//         console.log(page_emp);
//         var emp_search = $('#emp_search').val();
//         var search_company = $('#search_company').val();
//         if (search_company != '' || emp_search != '') {
//             load_data_emp(search_company, emp_search, page_emp);
//         } else {
//             load_data_emp("%%", "%%", page_emp);
//         }
//     });










//     function load_data_package(query, page) {
//         $.ajax({
//             url: "fetch_package.php",
//             method: "POST",
//             data: {
//                 query: query,
//                 page: page
//             },
//             success: function(data) {
//                 $('#result_data_package').html(data);
//             }
//         });
//     }
//     $('#search_package').keyup(function() {
//         var page = "0";
//         var search_package = $(this).val();
//         if (search_package != '') {
//             load_data_package(search_package, page);
//         } else {
//             load_data_package('%%', page);
//         }
//     });
//     $(document).on('click', '.page-links_package', function() {
//         var page_package = this.id;
//         var search_package = $('#search_package').val();
//         if (search_package != '') {
//             load_data_package(search_package, page_package);
//         } else {
//             load_data_package("%%", page_package);
//         }
//     });


//     load_data_register("%%", "%%", "%%", "0");

//     function load_data_register(query, query2, dates, page) {
//         $.ajax({
//             url: "fetch_register.php",
//             method: "POST",
//             data: {
//                 query: query,
//                 query2: query2,
//                 dates: dates,
//                 page: page
//             },
//             success: function(data) {
//                 $('#result_register').html(data);
//             }
//         });
//     }
//     $('#register_company').keyup(function() {
//         var page = "0";
//         var register_company = $(this).val();
//         var register_search = $('#register_search').val();
//         var register_date2 = new Date($('#register_date').val());
//         var register_date = register_date2.getFullYear() + "-" + (register_date2.getMonth() + 1) + "-" + register_date2.getDate();
//         console.log(register_date);
//         if (register_company != '') {
//             load_data_register(register_company, register_search, register_date, page);
//         } else {
//             load_data_register("%%", register_search, register_date, page);
//         }
//     });
//     $('#register_search').keyup(function() {
//         var page = "0";
//         var register_search = $(this).val();
//         var register_company = $('#register_company').val();
//         var register_date2 = new Date($('#register_date').val());
//         var register_date = register_date2.getFullYear() + "-" + (register_date2.getMonth() + 1) + "-" + register_date2.getDate();
//         console.log(register_date);
//         if (register_search != "") {
//             load_data_register(register_company, register_search, register_date, page);
//         } else {
//             load_data_register(register_company, "%%", register_date, page);
//         }
//     });
//     $('#register_date').change(function() {
//         var page = "0";
//         var register_date2 = new Date($('#register_date').val());
//         var register_date = register_date2.getFullYear() + "-" + (register_date2.getMonth() + 1) + "-" + register_date2.getDate();
//         console.log(register_date);
//         var register_company = $('#register_company').val();
//         var register_search = $('#register_search').val();
//         if (register_date != "") {
//             load_data_register(register_company, register_search, register_date, page);
//         } else {
//             load_data_register(register_company, register_search, "%%", page);
//         }

//     });

//     $(document).on('click', '.page-links-register', function() {
//         var page_register = this.id;
//         var register_company = $('#register_company').val();
//         var register_search = $('#register_search').val();
//         var register_date = $('#register_date').val();
//         if (register_search != "" || register_company != "" || register_date != "") {
//             load_data_register(register_company, register_search, register_date, page_register);
//         } else {
//             load_data_register("%%", "%%", "%%", page_register);
//         }
//     });



//     load_data_registerdetail("");

//     function load_data_registerdetail(query) {
//         $.ajax({
//             url: "fetch_registerdetail.php",
//             method: "POST",
//             data: {
//                 query: query
//             },
//             success: function(data) {
//                 $('#result_registerdetail').html(data);
//             }
//         });
//     }
//     $(document).on('click', '.btndetail', function() {
//         var details = $('#detail').val();
//         if (details != '') {
//             load_data_registerdetail(details);
//         } else {
//             load_data_registerdetail("");
//         }
//     });



// });