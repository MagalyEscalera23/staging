// public/js/user.js

$(document).ready(function() {
    $.ajax({
        url: 'https://jsonplaceholder.typicode.com/users',
        type: 'GET',
        success: function(data) {
            var tableBody = $('.user-table tbody');
 
            $.each(data, function(index, row) {
                tableBody.append('<tr><td>' + row.id + '</td><td>' + row.title + '</td><td>' + row.body + '</td></tr>');
            console.log(row);
            });
        }
    });
 });
 