/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$(document).ready(function(){
//    jQuery('#searchBtn').click(function(){
//        event.preventDefault();
//        alert();
//    });
//});


function getSearchProducts() {

    var searchText = $('#searchText').val();
    var data = {};
    
    data.searchData = searchText;

    $.ajax({
        method: 'POST', 
        url: base_url + "/getSearchProducts",
        data: data,
        success: function(res){
            console.log(res);
        },
        errors: function(){
            
        }
    });

    console.log();
}